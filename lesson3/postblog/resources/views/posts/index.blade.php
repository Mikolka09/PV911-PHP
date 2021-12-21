@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg12" style="margin: 5px;">
            <div class="pull-left">
                <h2>CRUD Example</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{'posts/create'}}">
                    Create New Product
                </a>
            </div>
        </div>
    </div>

    @if($message = \Illuminate\Support\Facades\Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('posts.show', $post->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
