@extends('layout.app')

@section('title', 'trang chủ')
@section('content')
    <div class="col-sm-9">
        <h3 style="text-align: center ; padding-bottom: 5px" > danh sách post </h3>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success" role="alert">
                <p style="color: red">{{ session('error') }}</p>
            </div>
        @endif

            <table class="table table-bordered ">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>content</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th colspan="2" align="center">Thao tác</th>
                </tr>
                <?php foreach ($listPosts as $post): ?>

                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['tile']}}</td>
                    <td>{{$post['content']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>{{$post['updated_at']}}</td>
                    <td>
                        <a class="btn" href="xemchitiet/{{$post['id']}}">
                            <span> xem chi tiết </span>
                        </a>

                    </td>
                </tr>
                <?php endforeach ?>
            </table>
    </div>
@endsection


