@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">{{$user->name}}</h1>
        </div>
        <div class="card-block">
            <h4 class="card-title">Header</h4>
            <p class="card-text">Header</p>
        </div>
        <div class="card-footer text-muted">
            Header
        </div>
    </div>
@endsection