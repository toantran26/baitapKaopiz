@extends('layout.app')

@section('title', 'thêm mới posts')
@section('content')
    <div class="col-sm-9">
        <h3 style="text-align: center ; padding-bottom: 5px" > thêm mới  post </h3>
        @if (session('error'))
            <div class="alert alert-success" role="alert">
                <p style="color: red">{{ session('error') }}</p>
            </div>
        @endif
        <form action="themmoi" method="post">
            <table class="table-bordered table ">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <tr>
                    <th>tile</th>
                    <td>
                        <input type="text" name="tile" id="tile">
                    </td>
                </tr>
                <tr>
                    <th>content</th>
                    <td>
                        <input type="text" name="content" id="content">
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


