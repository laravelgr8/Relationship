<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
class CustomerController extends Controller
{
    public function index(){
        //$customers=Customer::with('latestorder')->get(); //get latest order
        //$customers=Customer::with('olderorder')->get(); //get oldest order
        //$customers=Customer::with('largestorder')->get(); //get largest order
        $customers=Customer::with('smallestorder')->get(); //get smallest order
        return $customers;
    }
}
