@extends('layout.app')
@section('content')
    <div class="row">
        <div class="pull-left">
            <h2 class="text-center">Show Book</h2>
        </div>
        <div class="pull-right mb-4">
            <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
        </div>
    </div>
    <div class="container" style="background-color: aliceblue;">
        <div class="row">
            <div class="row my-3">
                <div class="col-1">
                    <strong>Author: </strong>
                </div>
                <div class="col-10">
                    {{$book->author}}
                </div>
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <strong>Title: </strong>
                </div>
                <div class="col-10">
                    {{$book->title}}
                </div>
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <strong>Short_desc: </strong>
                </div>
                <div class="col-10">
                    {{$book->short_desc}}
                </div>
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <strong>Pages: </strong>
                </div>
                <div class="col-10">
                    {{$book->pages}}
                </div>
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <strong>Price, $: </strong>
                </div>
                <div class="col-10">
                    {{$book->price}}
                </div>
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <strong>Description: </strong>
                </div>
                <div class="col-10">
                    {{$book->description}}
                </div>
            </div>
        </div>
    </div>

@endsection
