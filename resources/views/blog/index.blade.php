@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            文章列表
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>标题</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td scope="row">{{$blog['id']}}</td>
                        <td>{{$blog['title']}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{route('blog.destroy',$blog)}}" method="post">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-danger">删除</button>
                                </form>
                                <a href="{{route('blog.edit',$blog)}}" class="btn btn-info ">修改资料</a>
                                <a href="{{route('blog.show',$blog)}}" class="btn btn-secondary">查看</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted ">
            {{$blogs->links()}}
        </div>
    </div>
@endsection