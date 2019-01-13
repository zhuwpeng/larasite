@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
    <div class="card-column">
        @foreach($posts as $post)
        <div class="card bg-light">
            <div class="card-body">
                <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <div class="card bg-light">
            <div class="card-body">
                <p>No posts found</p>
            </div>
        </div>
    @endif
    </div>
@endsection