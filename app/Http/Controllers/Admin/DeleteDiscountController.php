<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class DeleteDiscountController extends Controller
{
    public function deleteDiscountCourse($id){

        $data = Course::findOrfail($id);
        $data->discount = 0;
        $data->new_price = 0;

        $data->save();
        return redirect()->route('admin.discount');
    }
}
?>
