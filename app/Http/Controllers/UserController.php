<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\PhoneNumber;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        //$users = User::with('companyNumber')->get();
        $users = User::with('companyname')->with('companyNumber')->get();
        return $users;
    }
}
