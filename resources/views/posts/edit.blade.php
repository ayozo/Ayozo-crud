@extends('layouts.app')

@section('title', 'Edit post' .$post->id)

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('posts.update', $post) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="post-title">Nazivaniye</label>
                    <input type="text" name="title"
                           value="{{ $post->title }}" class="form-control" id="post-title">
                </div>

                <div class="form-group">
                    <label for="post-description">Opisaniya</label>
                    <textarea name="description"
                              value="{{ $post->description }}" class="form-control" id="post-description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="post-price">sena</label>
                    <textarea name="price"
                              value="{{ $post->price }}" class="form-control" id="post-price" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Edit Post</button>
            </form>
        </div>
    </div>
@endsection

