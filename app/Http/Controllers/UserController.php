<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use App\Models\Role;  //for many to many
class UserController extends Controller
{
    



    //many to many
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
