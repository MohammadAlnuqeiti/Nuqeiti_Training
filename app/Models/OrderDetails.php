<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','course_id','quantity','price'];


    public function cousre()
    {
        return $this->belongsTo(Course::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
