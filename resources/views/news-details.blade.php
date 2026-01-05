@extends('layouts.main')
@section('content')
<section class="main">
    <div class="news-container">
        <h1 class="news-title h1">{{ $news->title }}</h1>
        <div class="news-meta">
            <p class="news-date">প্রকাশিত: {{ $news->created_at->format('d M Y') }}</p>
            <p class="news-author">by {{ $news->authorUser->name }}</p>
        </div>
        <div class="news-img">
            <img src="{{ Storage::url($news->image) }}" alt="">
        </div>
        <div class="news-content">
            {!! $news->content !!}
        </div>
    </div> 
    <div class="container">
        <hr>
        <br><h2 class="h2">আরও পড়ুন</h3><br>
        <div class="more-news">
            @foreach($more_news as $news)
            <a href="{{ url('news/'.$news->slug) }}" wire:navigate>
            <div class="news-card">
                <img src="{{ Storage::url($news->image) }}" alt="">
                <h3 class="h3">{{ $news->title }}</h3>
            </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
@push('social-meta')
<meta property="og:title" content="{{ $news->title }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($news->content), 100) }}">
<meta property="og:image" content="{{ Storage::url($news->image) }}">
<meta property="og:url" content="{{ url('news/'.$news->slug) }}">
@endpush