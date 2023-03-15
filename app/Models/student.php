<?php

namespace App\Models;

class student{

    public static function all(){
        $students= [ [
            'id'=>'1',
            'name'=>'fatma',
            'city'=>'shibeen',
            'country'=>'egypt',
            'phone_n'=>'0292982',
            'email'=>'cavhh.com',


        ],[
            'id'=>'2',
            'name'=>'hoda',
            'city'=>'banha ',
            'country'=>'egypt',
            'phone_n'=>'0244442',
            'email'=>'gjggd.com',
        ]];
        return $students;
    }
    public static function find($id){
          $students=self::all();
          foreach($students as $student){
            if ($student['id']==$id){
                return$student;
            }
          }
    }
}