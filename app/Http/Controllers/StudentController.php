<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\MessageBag;

class StudentController extends Controller
{
    public function index(){

        return view('timkiem');
    }
    public function add_save_student(Request $request){
        $first_name= $request->input('first_name');
        $last_name =$request->input('last_name');
        $class =$request->input('class');

        \App\Student::insert([
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'class'=>$class
        ]);
        return redirect()->route('timkiem')->with('success', 'thêm mới thành công');

    }
    public function  timkiem(Request $request){
        $students_list= \App\Student::all()->toArray();
        $students_list=array_map(function($item){
            return (array) $item;
        },$students_list);
        if (count($students_list)<=0){

            return view('add_student');
        }else{
            $id_student = $request->input('id_student');
            $last_name =$request->input('name');
            $class = $request->input('class');
            if ($id_student!=''){
                if ($last_name!='' and $class !=''){
                    $list = \App\Student::select('id','last_name','class')
                    ->orwhere('id',$id_student)
                    ->orwhere('last_name','like','%'.$last_name.'%')
                    ->orwhere('class','like','%'.$class.'%')
                    ->orderBy('id','DESC')
                    ->get()->toArray();
                }
                elseif ($last_name!=''){
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('id',$id_student)
                        ->orwhere('last_name','like','%'.$last_name.'%')
                        ->get()->toArray();
                }elseif($class!=''){
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('id',$id_student)
                        ->orwhere('class','like','%'.$class.'%')
                        ->orderBy('id','DESC')
                        ->get()->toArray();
                }else{
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('id',$id_student)->orderBy('id','DESC')->get()->toArray();
                }
            }else{
                if ($last_name=='' and $class ==''){
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('id',$id_student)
                        ->orwhere('last_name','like','%'.$last_name.'%')
                        ->orwhere('class','like','%'.$class.'%')
                        ->orderBy('id','DESC')
                        ->get()->toArray();
                }elseif ($last_name!='' and $class !=''){
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('last_name','like','%'.$last_name.'%')
                        ->orwhere('class','like','%'.$class.'%')
                        ->orderBy('id','DESC')
                        ->get()->toArray();
                }elseif ($last_name!=''){
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('last_name','like','%'.$last_name.'%')
                        ->orderBy('id','DESC')
                        ->get()->toArray();
                }else{
                    $list = \App\Student::select('id','last_name','class')
                        ->orwhere('class','like','%'.$class.'%')
                        ->orderBy('id','DESC')
                        ->get()->toArray();
                }

            }

            $list=array_map(function($item){
                return (array) $item;
            },$list);
            //return redirect()->route('timkiem' , ['list'=>$list]);
            return  view('timkiem', ['list'=>$list]);

        }

    }
}
