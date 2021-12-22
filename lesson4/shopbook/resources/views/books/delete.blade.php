@extends('layout.app')
@section('content')
    <div class="row">
        <div class="pull-left">
            <h2 class="text-center">Delete Book</h2>
        </div>
        <div class="pull-right mb-4">
            <a class="btn btn-primary" href="{{route('books.index')}}">Back</a>
        </div>
    </div>

@endsection
