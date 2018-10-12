<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
<script type="/js/app.js"></script>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">首页</a>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.index')}}">用户列表</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                @auth
                    <a href="{{route('user.edit',auth()->user())}}" class="btn btn-light my-2  my-sm-0 mr-2">{{auth()->user()->name}}</a>
                    <a href="{{route('user.edit',auth()->user())}}" class="btn btn-info my-2  my-sm-0 mr-2">修改资料</a>
                    <a href="{{route('logout')}}" class="btn btn-danger my-2  my-sm-0 mr-2">退出</a>
                @else
                    <a href="{{route('user.create')}}" class="btn btn-danger my-2  my-sm-0 mr-2">注册</a>
                    <a href="{{route('login')}}" class="btn btn-success my-2 my-sm-0">登陆</a>
                @endauth
            </form>
        </div>
    </nav>
    @include('layouts._errors')
    @include('layouts._message')
    @yield('content')
</div>
</body>
</html>