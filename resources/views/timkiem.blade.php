@extends('layout.app')

@section('title', 'tìm kiếm')
@section('content')
    <div class="col-sm-9">
        <h3 style="text-align: center ; padding-bottom: 5px" > nhập thông tin tìm kiếm </h3>
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

            <form action="{{route('timkiem')}}" method="post">
                <div class="nav navbar">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="col-sm-4">
                        <input name="id_student" placeholder="id student" type="number" value="">
                    </div>
                    <div class="col-sm-4">
                        <input name="name" placeholder="name" type="text" value="">
                    </div>
                    <div class="col-sm-4">
                        <input name="class" placeholder="class" type="text" value="">
                    </div>
                    <div style="margin-left: 40%; padding: 10px">
                        <input  class="btn btn-primary btn-sm" type="submit" value="tìm kiếm ">
                    </div>
                </div>
            </form>
        <div>
            <table class="table table-bordered ">
                <tr>
                    <th>id</th>
                    <th>last_name</th>
                    <th>class</th>
                </tr>
                <?php
                if( $list ?? ''!=''){
                     foreach ($list  as $post)

                 echo "<tr>
                    <td>".$post['id']."</td>
                    <td>".$post['last_name']."</td>
                    <td>".$post['class']."</td>
                </tr>";
                }else{
                    echo("");
                } ?>
            </table>
        </div>

    </div>

@endsection


