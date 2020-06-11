<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title> đăng nhập </title>
</head>
<body style="background-color: #f9f9f9">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center mt-5">
                <a  href="#" >
                    <span class="mt-3 font-weight-light" style="font-size: 20px" >Đăng nhập </span>
                </a>
                <h4 class="mt-3 font-weight-light">
                    đăng nhập tài khoản

                    @if ( Session::has('error') )
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif
                </h4>
            </div>
            <div class="card mt-4 mb-5">
                <div class="card-body">
                    <form action="login" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label> email</label>
                            <div class="input-group">
                                <input class="form-control" name="email" placeholder="email" type="text" value="{{old('email')}}">
                            </div>
                            @if ($errors->has('email') )

                                <span style="color: red">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="Password"> Mật khẩu</label>
                            <input class="form-control" name="password" placeholder="mật khẩu" type="password" value="">
                        </div>
                        @if ($errors->has('password') )
                            <span style="color: red">{{$errors->first('password')}}</span>

                        @endif
                        <div class="form-group">
                            <input name="txt_ghinho" type="checkbox" > duy trì đăng nhập

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" >Đăng nhập</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
