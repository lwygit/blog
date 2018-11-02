@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">{{$blog->title}}</h1>
        </div>
        <div class="card-footer text-muted">
            <p class="card-text">{{$blog->content}}</p>
        </div>
    </div>
@endsection