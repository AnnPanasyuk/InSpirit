@extends('layouts.layout')

@section('content')

    <h2>Publish a post</h2>

    <form action="/post" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" id="title" type="text" required name="title">
        </div>
        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" id="alias" type="text" required name="alias">
        </div>
        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea class="form-control" id="intro" type="text" required name="intro"></textarea>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" type="text" required name="body"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Post</button>
        </div>
        @include('layouts.errors')
    </form>

@endsection