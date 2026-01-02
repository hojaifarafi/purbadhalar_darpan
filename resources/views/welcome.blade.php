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
                    <a href="{{ url('news/'.$new->slug) }}" wire:navigate>
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
        </div>
    </section>
@endsection