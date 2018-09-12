@extends('layouts.layout')

@section('content-posts')

    <div class="row">
        @foreach($posts as $post)
                <div class="col-md-4">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->intro}}</p>
                    <a href="/posts/{{$post->alias}}" class="btn btn-default">Read more</a>
                    <a href="/edit/{{$post->alias}}" class="btn btn-primary">Edit</a>
                    <form action="/posts/{{$post->alias}}" method="post">
                        {{csrf_field()}}
                        {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
        @endforeach
    </div>
@endsection