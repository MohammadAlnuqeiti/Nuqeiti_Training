<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Course extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['name', 'short_description', 'long_description','image','video_course','user_id','category_id','price','status','duration_of_the_course','feature','new_price','discount'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
  
}
