@extends('layouts.layouts')
@section('page_title')
    {{$post->title}}
@endsection
@section('page_header')
{{ implode(', ', $post->categories->pluck('name')->toArray()) }}
@endsection
@section('content')
    <!-- Blog entries-->
    <div class="col-lg">
        <!-- Blog post-->
        <h1 class="fw-bold text-decoration-none text-white">{{$post->title}}</h1>
        <span class="medium text-white">By {{$post->author}} | {{date('d/m/Y', strtotime($post->created_at))}}</span>
        <div class="card mt-4 mb-4 rounded-0">
            <div class="card-body">
            <a class="text-decoration-none text-black" href="/post/{{$post->slug}}">
                <div class="img-fluid" style="margin-bottom: -45px;"><blockquote class="instagram-media" data-instgrm-permalink="{{$post->embed}}" data-instgrm-version="14" 
                    style=" background:#FFF; border:0; border-radius:0; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:99.375%; width:-webkit-calc(40% - 2px); width:calc(100% - 2px);">
                    </blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </a>
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">{!!$post->body!!}</p>
            </div>
        </div>
    </div>

@endsection
