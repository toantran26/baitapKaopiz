<div class="text-center" style="margin-bottom:0">
    <a href="{{route('listPosts')}}">
        <p>trang chủ </p>
    </a>
</div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('listPosts')}}"> list Posts </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('themmoi')}}"> thêm mới </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('themmoi_comment')}}"> thêm mới comment </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('timkiem') }}"> tìm kiếm </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_student">  Thêm mới student </a>
                </li>
            </ul>
        </div>
    </nav>
