<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Session;

class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }
    public function postLogin( Request $request){
       $rule=[
                'email' => 'required|email',
                 'password' => 'required|min:3'
           ];
       $mssg=[
         'email.required' =>'email không được để trống',
           'email.email'=>'email phải đúng định dang',
           'password.required'=>'mật khẩu không được để trống ',
           'password.min'=>'mật khẩu phải chứa ít nhất 3 ký tự'
       ];
       $validator =Validator::make($request->all() ,$rule ,$mssg);
       if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        } else{
            $email= $request->input('email');
            $password = $request->input('password');
           if ($email ==='toantran26106@gmail.com'& $password==='123'){

               Session::flash('error', 'đăng nhập thanh công');
               @$_SESSION['name']=$email;
               return redirect('trangchu');
           }
           else{
              Session::flash('error', 'Email hoặc mật khẩu không đúng!');
               return redirect('login');
           }
           return redirect('login');
       }
    }
}
