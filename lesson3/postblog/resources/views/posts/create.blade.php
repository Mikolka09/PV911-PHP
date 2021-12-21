@extends('layout.app')
@section('content')
    <div class="row">
        <div class="pull-left">
            <h2>Add new Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title: </strong>
                    <input type="text" name="title" class="form-control" placeholder="Title"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category: </strong>
                    <input type="text" name="category" class="form-control" placeholder="Category"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="form-group">
                    <strong>Description: </strong>
                    <textarea name="description" class="form-control" style="height: 150px;" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
