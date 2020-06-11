@extends('layout.app')

@section('title', 'thêm mới student')
@section('content')
    <div class="col-sm-9">
        <h3 style="text-align: center ; padding-bottom: 5px" > thêm mới student </h3>
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{route('add_save')}}" method="post">
            <div class="nav navbar">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="col-sm-4">
                    <label> first_name </label>
                    <input name="first_name" placeholder="first_name" type="text" value="">
                </div>
                <div class="col-sm-4">
                    <label> last_name</label>
                    <input name="last_name" placeholder="last_name" type="text" value="">
                </div>
                <div class="col-sm-4">
                    <label>  class </label>
                    <input name="class" placeholder="class" type="text" value="">
                </div>
                <div style="margin-left: 40%; padding: 10px">
                    <input  class="btn btn-primary btn-sm" type="submit" value=" thêm mới student ">
                </div>
            </div>
        </form>


@endsection


