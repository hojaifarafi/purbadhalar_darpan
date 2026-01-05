<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Http;


class BaseController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->paginate(10);
        //dd($news);
        $channelId = 'UC4g9eppU_Bs_D5Ze6wDOMbw';

        $channel = Http::get('https://www.googleapis.com/youtube/v3/channels', [
            'key'  => config('services.youtube.key'),
            'part' => 'contentDetails',
            'id'   => $channelId,
        ])->json();

        $uploadsPlaylistId =
            $channel['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
            $response = Http::get('https://www.googleapis.com/youtube/v3/playlistItems', [
                'key'        => config('services.youtube.key'),
                'part'       => 'snippet,contentDetails',
                'playlistId' => $uploadsPlaylistId,
                'maxResults' => 10,
            ]);
            
            $videos = collect($response['items'])->map(function ($item) {
                return [
                    'video_id'  => $item['contentDetails']['videoId'],
                    'title'     => $item['snippet']['title'],
                    'thumbnail' => $item['snippet']['thumbnails']['medium']['url'],
                    'published' => $item['contentDetails']['videoPublishedAt'],
                    'url'       => 'https://www.youtube.com/watch?v=' .
                                $item['contentDetails']['videoId'],
                ];
            });
//dd($videos);  
        return view('welcome', compact('news','videos'));
}
    public function news_details($slug){
        $news = News::where('slug',$slug)->first();
        if ($news->status != 'published') {
            abort(404, 'News not found');
        }
        $news->views++;
        $news->save();
        $more_news = News::where('id','!=',$news->id)->orderBy('created_at','desc')->take(3)->get();
        return view("news-details",compact("news","more_news"));
    }
    public function video($video_id){
        $response = Http::get('https://www.googleapis.com/youtube/v3/videos', [
            'key'  => config('services.youtube.key'),
            'part' => 'snippet,contentDetails,statistics',
            'id'   => $video_id,
        ]);

        if ($response->failed() || empty($response['items'])) {
            return response()->json([
                'error' => 'Video not found'
            ], 404);
        }

        $video = $response['items'][0];
        $date = \Carbon\Carbon::parse($video['snippet']['publishedAt'])
            ->setTimezone('Asia/Dhaka');
        $video_data = [
            'video_id'   => $video['id'],
            'title'      => $video['snippet']['title'],
            'description'=> $video['snippet']['description'],
            'thumbnail'  => $video['snippet']['thumbnails']['high']['url'],
            'published'  => $date->format('M j, Y'),
            'duration'   => $video['contentDetails']['duration'],
            'views'      => $video['statistics']['viewCount'] ?? 0,
            'likes'      => $video['statistics']['likeCount'] ?? 0,
            'comments'   => $video['statistics']['commentCount'] ?? 0,
        ];
        //dd($video);
        $channelId = 'UC4g9eppU_Bs_D5Ze6wDOMbw';

        $channel = Http::get('https://www.googleapis.com/youtube/v3/channels', [
            'key'  => config('services.youtube.key'),
            'part' => 'contentDetails',
            'id'   => $channelId,
        ])->json();

        $uploadsPlaylistId =
            $channel['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
            $response = Http::get('https://www.googleapis.com/youtube/v3/playlistItems', [
                'key'        => config('services.youtube.key'),
                'part'       => 'snippet,contentDetails',
                'playlistId' => $uploadsPlaylistId,
                'maxResults' => 10,
            ]);
            
            $videos = collect($response['items'])->map(function ($item) {
                return [
                    'video_id'  => $item['contentDetails']['videoId'],
                    'title'     => $item['snippet']['title'],
                    'thumbnail' => $item['snippet']['thumbnails']['medium']['url'],
                    'published' => $item['contentDetails']['videoPublishedAt'],
                    'url'       => 'https://www.youtube.com/watch?v=' .
                                $item['contentDetails']['videoId'],
                ];
            });
        return view("video-news",compact("video_data","videos","video_id"));
    }
}
