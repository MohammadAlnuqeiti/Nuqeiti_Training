<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\PublicUserController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\RegisterEngineerController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\ProfileEngineerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/single', function () {
//     return view('publicUser.singleCourse');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('user')->name('user.')->group(function () {



    Route::get('/',[PublicUserController::class,'index'])->name('index');
    Route::get('/categories/{id}',[PublicUserController::class,'show'])->name('categories.show');

    Route::get('/about',function(){
        return view('publicUser.about');
    })->name('about');
    
    Route::get('/register',function(){
        return view('publicUser.registerPage');
    })->name('register');

     Route::get('/contact',[ContactController::class,'index'])->name('contact');
     Route::get('/courses',[ShopController::class,'index'])->name('shop');
    //  Route::get('/admin/contact',[FeedController::class,'show'])->name('contact.show');
    //  Route::get('/contact/create',[FeedController::class,'store'])->name('contact.create');

    // Route::resource('/signup',RegisterUserController::class);
    // Route::post('/search' , [Search::class , 'search'])->name('search');
    Route::get('/login',[LoginUserController::class,'index'])->name('login');
    Route::get('/register_user',[RegisterUserController::class,'index'])->name('register_user');
    Route::get('/register_engineer',[RegisterEngineerController::class,'index'])->name('register_engineer');
    // Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
    // Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');

    Route::resource('/profile_user',ProfileUserController::class);
    Route::resource('/profile_engineer',ProfileEngineerController::class);

    // Route::get('/package_details/{id}',[PackageDetailsController::class,'index'])->name('package.details');

    // Route::get('/trip_details/{id}',[TripsDetailsController::class,'index'])->name('trip.details');
    // Route::get('/booking/{id}',[BookController::class,'index'])->name('book')->middleware('CheckLogin');
    // Route::get('/booking/create/{id}',[BookController::class,'create'])->name('book.create')->middleware('CheckLogin');

    // Route::get('/profile/editPook/{id}',[EditBookController::class,'index'])->name('book.edit');
    // Route::get('/profile/update/{id}',[EditBookController::class,'update'])->name('book.update');
    });
require __DIR__.'/auth.php';
