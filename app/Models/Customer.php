<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Customer extends Model
{
    use HasFactory;

    public function latestorder(){
        return $this->hasOne(Order::class)->latestOfMany();
    }

    public function olderorder(){
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    public function largestorder(){
        return $this->hasOne(Order::class)->ofMany('amount','max');
    }

    public function smallestorder(){
        return $this->hasOne(Order::class)->ofMany('amount','min');
    }
}
