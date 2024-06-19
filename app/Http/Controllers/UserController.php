<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UserController extends Controller
{
    public function show(){
        // $users =User::with('post')->whereHas('post',function($query){
        //     $query->where('title','like','%Cicero%');
        // })->get();
        // return $users;

        //$posts=Post::with('user')->where('id','3')->get();
        //return $posts;

        $users=User::with('post')->get();
        return view('users',compact('users'));
    }




    
}
