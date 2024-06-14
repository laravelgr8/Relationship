<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

use App\Models\Role;  //for many to many
class UserController extends Controller
{
    public function show(){
        // $users =User::with('post')->whereHas('post',function($query){
        //     $query->where('title','like','%Cicero%');
        // })->get();
        // return $users;

        $posts=Post::with('user')->where('id','3')->get();
        return $posts;
    }




    public function fetch(){
        //$users=User::with('roles')->where('id','1')->get();
        //return $users;

        /*foreach($users as $value){
            $r=$value->roles;
            foreach($r as $b){
                echo $b->role.'<br>';
            }
        }*/

        $users=User::all();
        foreach($users as $key => $value){
            $role=$users[$key]->roles;
        }
        
        return $users;
    }
}
