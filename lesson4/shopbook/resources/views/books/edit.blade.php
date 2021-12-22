@extends('layout.app')
@section('content')
    <div class="row">
        <div class="pull-left">
            <h2 class="text-center">Edit Book</h2>
        </div>
        <div class="pull-right mb-4">
            <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
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

    <form action="{{route('books.update', $book->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="author" class="form-label fw-bold">Author</label>
                    <input type="text" id="author" name="author" class="form-control"
                          value="{{$book->author}}" placeholder="Author"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" id="title" name="title" class="form-control"
                           value="{{$book->title}}" placeholder="Title"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="author" class="form-label fw-bold">Short_desc</label>
                    <input type="text" id="short_desc" name="short_desc" class="form-control"
                           value="{{$book->short_desc}}" placeholder="Short_desc"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="author" class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" style="height: 150px;" placeholder="Description">
                        {{$book->description}}
                    </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="author" class="form-label fw-bold">Pages</label>
                    <input type="text" id="pages" name="pages" class="form-control"
                           value="{{$book->pages}}" placeholder="Pages"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="author" class="form-label fw-bold">Price</label>
                    <input type="text" id="price" name="price" class="form-control"
                           value="{{$book->price}}" placeholder="Price"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
