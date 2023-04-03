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
use App\Http\Controllers\User\SingleCourseController;
use App\Http\Controllers\User\AddCourseController;
use App\Http\Controllers\User\LectureUserController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EngineeringController;
use App\Http\Controllers\Admin\LectureController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\CategoryDiscountController;
use App\Http\Controllers\Admin\CourseDiscountController;
use App\Http\Controllers\Admin\DeleteDiscountController;
use App\Http\Controllers\Admin\EditStatusController;
use App\Http\Controllers\Admin\FeatureCourseController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\SubscriberController;
use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;
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
    return view('admin.login');
})->name('admin.login');

// Route::get('/admin', function () {
//     return view('admin.profile.show');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//admin

// Route::middleware(['auth','verified','admin'])->name('admin.')->prefix('admin')->group(function()
Route::middleware(['auth','verified','admin'])->name('admin.')->prefix('admin')->group(function()
{
Route::get('/',[AdminController::class,'index'])->name('index');
Route::get('/admin',[AdminController::class,'admin'])->name('show.admin');
Route::get('/admin/create',[AdminController::class,'create'])->name('create.admin');
Route::get('/admin/store',[AdminController::class,'store'])->name('store.admin');
Route::get('/profile',[AdminController::class,'profile'])->name('profile.admin');
Route::get('/profile/edit/{id}',[AdminController::class,'editProfile'])->name('profile.edit');
Route::get('/profile/{id}',[AdminController::class,'updateProfile'])->name('profile.update');
Route::resource('/users',UserController::class);
Route::resource('/engineering',EngineeringController::class);
Route::resource('/categories',CategoryController::class);
Route::resource('/courses',CourseController::class);
Route::resource('/editStatus',EditStatusController::class);
Route::resource('/lectures',LectureController::class);
// Route::resource('/reservation',ReservationController::class);
Route::resource('/comment',CommentController::class);
Route::get('/messages',[ContactController::class,'show'])->name('message');
// Route::get('/comment/destroy/{id}',[CommentController::class,'destroy'])->name('comment.destroy');
Route::resource('/category_discount',CategoryDiscountController::class);
Route::resource('/course_discount',CourseDiscountController::class);
Route::get('/discount',[DiscountController::class,'index'])->name('discount');
Route::get('/discount/create',[DiscountController::class,'addDiscount'])->name('discount.create');
Route::get('/discount/delete',[DeleteDiscountController::class,'deleteDiscountCourse'])->name('course.delete');
Route::get('/download/{file}',[PdfController::class,'download'])->name('downloadcv');
Route::get('/view/{file}',[PdfController::class,'view'])->name('viewcv');
Route::get('/AddFeatue/{id}',[FeatureCourseController::class,'AddFeatue'])->name('AddFeatue');
Route::get('/RemoveFeatue/{id}',[FeatureCourseController::class,'RemoveFeatue'])->name('RemoveFeatue');
Route::get('/orders', OrdersController::class)->name('orders');


});


//user

Route::prefix('user')->name('user.')->group(function () {



    Route::get('/',[PublicUserController::class,'index'])->name('index');
    Route::get('/engineering_details/{id}',[PublicUserController::class,'engineeringDetails'])->name('engineeringDetails');
    Route::get('/categories/{id}',[PublicUserController::class,'show'])->name('categories.show');

    Route::get('/about',function(){
        return view('publicUser.about');
    })->name('about');

    Route::get('/register',function(){
        return view('publicUser.registerPage');
    })->name('register');

     Route::get('/contact',[ContactController::class,'index'])->name('contact');
     Route::get('/contact/create',[ContactController::class,'store'])->name('message.create');

     Route::get('/courses',[ShopController::class,'index'])->name('shop');
     Route::get('/courses/{id}',[ShopController::class,'showCategory'])->name('shop.category');

    // Route::post('/search' , [Search::class , 'search'])->name('search');
    Route::get('/login',[LoginUserController::class,'index'])->name('login');
    Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
    Route::get('/register_user',[RegisterUserController::class,'index'])->name('register_user');
    Route::get('/register_user/store',[RegisterUserController::class,'store'])->name('signup.store');
    Route::get('/register_engineer',[RegisterEngineerController::class,'index'])->name('register_engineer');
    Route::get('/register_engineer/store',[RegisterEngineerController::class,'store'])->name('register_engineer.store');
    Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');

    Route::resource('/profile_user',ProfileUserController::class);
    Route::resource('/profile_engineer',ProfileEngineerController::class);
    Route::resource('/course_details',SingleCourseController::class);
    Route::resource('/add_course',AddCourseController::class);
    Route::resource('/lectures',LectureUserController::class);
    Route::resource('/checkout',CheckoutController::class);
    Route::get('/cart',[CartController::class,'index'])->name('cart');
    Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('cart.store');
    Route::get('/destroy-from-cart/{id}',[CartController::class,'destroy'])->name('cart.destroy');
    Route::post('/search' , [SearchController::class , 'search'])->name('search');


    // Route::get('/package_details/{id}',[PackageDetailsController::class,'index'])->name('package.details');

    // Route::get('/trip_details/{id}',[TripsDetailsController::class,'index'])->name('trip.details');
    // Route::get('/booking/{id}',[BookController::class,'index'])->name('book')->middleware('CheckLogin');
    // Route::get('/booking/create/{id}',[BookController::class,'create'])->name('book.create')->middleware('CheckLogin');

    });

    Route::post('/subscribe', [SubscriberController::class, 'subscribe']);

    Route::get('/email' , function(){
        $message = "sorry." ;

        Mail::to('mohammadalnuqeiti@gmail.com')->send(new Subscribe($message));

        return response("ok");
        // return new Subscribe();

    });

require __DIR__.'/auth.php';
