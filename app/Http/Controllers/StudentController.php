<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;
class StudentController extends Controller
{
    public function show(){
        // $students =Student::with('contact')->whereHas('contact',function($query){
        //     $query->where('city','Delhi');
        // })->get();
            //return $students;
            
        $contacts=Contact::with('student')->get();
        return $contacts;
    }
}
