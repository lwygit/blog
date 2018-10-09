@extends('layouts.default')
@section('content')
    {{--@include('layouts._errors')--}}
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-header">用户登陆</div>
                <div class="card-body">
                    <div class="card-group">
                        <label for="">邮箱</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                    <div class="card-group">
                        <label for="">密码</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-success">登陆</button>
                </div>
            </div>
        </div>
    </form>
@endsection