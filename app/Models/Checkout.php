<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = ['user_name','address','city','card_name','card_number','exp_date','cvv','order_id'];



    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
