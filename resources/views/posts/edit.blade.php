@extends('layouts.layout')

@section('content')

    <h2>Edit a post</h2>

    <form action="/post/{{$post->id}}" method="POST">
        {{csrf_field()}}
        {!! method_field('patch') !!}

        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" id="title" type="text" required name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" id="alias" type="text" required name="alias" value="{{$post->alias}}">
        </div>
        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea class="form-control" id="intro" type="text" required name="intro" >{{$post->intro}}</textarea>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" type="text" required name="body">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
        @include('layouts.errors')
    </form>

@endsection