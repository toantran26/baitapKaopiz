<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

@include('layout.header')

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-3">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('listPosts')}}"> list Posts </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('themmoi')}}"> thêm mới </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('themmoi_comment') }}"> thêm mới comment </a>
                </li>
            </ul>

        </div>
        @yield('content')
    </div>
</div>

</body>

</html>
