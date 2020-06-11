@extends('layout.app')

@section('title', 'xem chi tiết ')
@section('content')
    <div class="col-sm-9">
        <h3 style="text-align: center ; padding-bottom: 5px" > danh sách post </h3>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered ">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>content</th>
                <th> content-comment</th>
            </tr>
            <?php foreach ($list_Posts as $post): ?>

            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['tile']}}</td>
                <td>{{$post['content']}}</td>
                <td>{{$post['content_comment']}}</td>

            </tr>
            <?php endforeach ?>
        </table>
    </div>
@endsection


