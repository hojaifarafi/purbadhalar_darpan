<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BaseController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->paginate(10);
        //dd($news);
        return view("welcome",compact('news'));
    }
    public function news_details($slug){
        $news = News::where('slug',$slug)->first();
        $more_news = News::orderBy('created_at','desc')->take(3)->get();
        return view("news-details",compact("news","more_news"));
    }
}
