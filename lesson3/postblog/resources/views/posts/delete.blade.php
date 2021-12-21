@extends('layout.app')
@section('content')
    <div class="row">
        <div class="pull-left">
            <h2>Show Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
        </div>
    </div>
    <div class="col-xl-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title: </strong>
            {{$post->title}}
        </div>
    </div>
    <div class="col-xl-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category: </strong>
            {{$post->category}}
        </div>
    </div>
    <div class="col-xl-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description: </strong>
            {{$post->description}}
        </div>
    </div>

@endsection
