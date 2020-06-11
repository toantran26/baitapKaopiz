@extends('layout.app')

@section('title', 'thêm mới comment')
@section('content')
    <div class="col-sm-9">
        <h3 style="text-align: center ; padding-bottom: 5px" > thêm mới  comment </h3>
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form action="themmoi_comment" method="post">
            <table class="table-bordered table ">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <tr>
                    <th>content_comment</th>
                    <td>
                        <input type="text" name="content_comment" id="tile" placeholder="content_comment">
                    </td>
                </tr>
                <tr>
                    <th>post_id</th>
                    <td>
                        <input type="number" name="post_id" id="post_id"  placeholder="post_id" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input  class="btn btn-primary btn-sm" type="submit" value="Thêm mới">
                    </td>
                </tr>
            </table>
        </form>
@endsection

