@extends('layouts.main')
@section('content')
    <section class="hero">
        <img src="./assets/images/hero.jpg" alt="" class="hero-img">
    </section>
    <section class="main">
        <div class="container">
            <div class="blog">
                <h2 class="h2">Latest News</h2>
                <div class="blog-card-group">
                    @foreach($news as $new)
                    <a href="{{ url('news/'.$new->slug) }}" >
                    <div class="blog-card">
                            <div class="blog-card-banner">
                                <img src="{{ Storage::url($new->image) }}" alt="blog image" width="250" class="blog-banner-img">
                            </div>
                            <div class="blog-content-wrapper">
                                <button class="blog-topic text-tiny">{{$new->category->name}}</button>
                                <h3 class="h3 blog-title">{{ $new->title }}</h3>
                                <p class="blog-text">{!! Str::limit(strip_tags($new->content), 100) !!}</p>
                                <div class="wrapper-flex">
                                    <div class="wrapper">
                                        <span>by {{$new->authorUser->name}}</span>
                                        <p>
                                        <time datetime="{{$new->created_at}}">{{ $new->created_at->format('d M Y') }}</time>                                           
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    @endforeach
                </div>
                {{$news->links()}}
                <!-- <button class="btn-load-more">Load More</button> -->
            </div>
            <div class="youtube-section">
            <hr>
            <br><h2 class="h2">ভিডিও নিউজ</h2><br>
            <div class="more-news">
                @foreach($videos as $video)
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
            </div>
                <!-- <div class="youtube-video-group">
                    @foreach($videos as $video)
                    <div class="youtube-video-card">
                        <div class="youtube-thumbnail">
                            <img src="{{ $video['thumbnail'] }}" alt="youtube thumbnail">
                        </div>
                        <div class="youtube-title">
                            <h3 class="h3">{{ $video['title'] }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div> -->
            </div>
        </div>
    </section>
@endsection
@push('social-meta')
<meta property="og:title" content="পূর্বধলার দর্পন। পূর্বধলার নিউজ পোর্টাল">
<meta property="og:description" content="পূর্বধলার সর্বাধিক পঠিত ও জনপ্রিয় নিউজ পোর্টাল">
<meta property="og:image" content="{{ asset('assets/images/pd_logo.png') }}">
<meta property="og:url" content="{{ url('/') }}">
@endpush