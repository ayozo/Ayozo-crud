@extends('layouts.app')

@section('title', 'Page title')

@section('content')

    <a href="{{ route('posts.create') }}" class="btn btn-success">Create post</a>
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nazivaniye</th>
            <th scope="col">opisaniye</th>
            <th scope="col">sena</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    @foreach($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->price }}$</td>
            <td style="text-align: right";>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-success">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <form style="display: contents"; action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection

