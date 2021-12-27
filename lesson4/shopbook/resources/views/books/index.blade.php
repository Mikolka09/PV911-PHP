@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg12" style="margin: 5px;">
            <div class="pull-left">
                <h2 class="text-center">SHOP BOOK PRICE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{'books/create'}}">
                    Create New Book
                </a>
            </div>
        </div>
    </div>
    @if($message = \Illuminate\Support\Facades\Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-success table-striped table-hover table-bordered">
        <thead class="text-center">
        <tr>
            <th>#</th>
            <th>Author</th>
            <th>Title</th>
            <th>Short_desc</th>
            <th>Description</th>
            <th>Pages</th>
            <th>Price,$</th>
            <th>Buttons</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$book->author}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->short_desc}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->pages}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <div class="container-full">
                        <div class="row mx-0">
                            <div class="col-md-4">
                                <a class="btn btn-info btn-sm" href="{{route('books.show', $book->id)}}">Show</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary btn-sm" href="{{route('books.edit', $book->id)}}">Edit</a>
                            </div>
                            <div class="col-md-3">
                                <form onclick="if(!confirm('Do you really want to delete with Book?')) {return false}"
                                      action="{{route('books.destroy', $book->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
