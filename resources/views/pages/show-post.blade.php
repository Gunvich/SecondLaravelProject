@extends('layouts.main-layout')

@section('title', $post->title)

@section('content')
    <div class="btn-group mb-4" role="group" aria-label="Basic outlined example">
        @foreach($categories as $category)
            <a href="{{route('getPostsByCategory',$category->slug)}}" class="btn btn-outline-primary">{{$category->title}}</a>
        @endforeach
    </div>
    <div>
    <a href="{{route('getPostsByCategory', $slug_category)}}" class="btn btn-outline-primary mb-4">Back</a>
    </div>
    <article>
        {!! $post->text !!}
    </article>

@endsection

