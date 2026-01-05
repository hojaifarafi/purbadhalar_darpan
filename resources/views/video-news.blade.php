@extends('layouts.main')
@section('content')
<section class="main">
    <div class="news-container">
        <h1 class="news-title h1">{{ $video_data['title'] }}</h1>
        <div class="news-meta">
            <p class="news-date">প্রকাশিত: {{ $video_data['published'] }}</p>
        </div>
        <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/{{$video_data['video_id']}}" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="news-content">
            {!! $video_data['description'] !!}
        </div>
    </div>
    <div class="youtube-section container">
            <hr>
            <br><h2 class="h2">ভিডিও নিউজ</h2><br>
            <div class="more-news">
                @foreach($videos as $video)
                @php
                if($video['video_id'] == $video_id)
                    continue;
                @endphp
                <a href="/video/{{ $video['video_id'] }}">
                <div class="news-card image-youtube">
                <div class="image-wrapper">
                <img src="{{ $video['thumbnail'] }}" alt="youtube thumbnail">
                    <span class="play-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M187.2 100.9C174.8 94.1 159.8 94.4 147.6 101.6C135.4 108.8 128 121.9 128 136L128 504C128 518.1 135.5 531.2 147.6 538.4C159.7 545.6 174.8 545.9 187.2 539.1L523.2 355.1C536 348.1 544 334.6 544 320C544 305.4 536 291.9 523.2 284.9L187.2 100.9z"/></svg>
                    </span>
                </div>
                    <h3 class="h3">{{ $video['title'] }}</h3>
                </div>
                </a>
                @endforeach
</section>
@endsection