@extends('layouts.app')

@section('title', 'show post' .$post->id)

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>{{ $post->title }}</h1>
            <h2>{{ $post->description }}</h2>
            <h2><b>{{ $post->price }}</b></h2>
        </div>
    </div>
@endsection
