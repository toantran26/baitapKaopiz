<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $primaryKey='id';


//    public function addStudent($first_name ,$last_name ,$class){
//
//        $add_save =DB::table('students')->insert([
//            'first_name'=>$first_name,
//            'last_name'=>$last_name,
//            'class'=>$class
//        ]);
//        return $add_save;
//    }


}
