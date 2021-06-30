<?php

use App\Http\Controllers\AddMember;
use App\Http\Controllers\PaginationController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Users;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Redis;

// Route::get('/', function () {
//     return view('user');
// });

// Route::get('/', function () {
//     return redirect('about');
// });

// Route::get("users/{user}",[Users::class,'index']);

// Route::view("user",'users');

// Route::get('user/{name}',function($name){
//     return view('users',['name'=>$name]);
// });

// Route::get("user/{user}",[Users::class,'loadView']);

// Route::view("about",'about');
// Route::view("contact",'contact');


// ....... blade.......

// Route::get('user', [UserController::class,'viewLoad']);

// ...........submit........

// Route::post('users', [UserController::class,'getData']);
// Route::view("login","users");

// ..........global middleware...........

// Route::view("home",'home');
// Route::view("users", 'users');
// Route::view("welcome", 'welcome');
// Route::view("about", 'about');
// Route::view("contact", 'contact');

// ..........group middleware...........


// Route::view("home",'home');
// Route::view("about", 'about');
// Route::view("contact", 'contact');

// Route::group(['middleware'=>['protectedPage']], function(){
//     Route::view("users", 'users');
// });


// ..........route middleware...........

// Route::view("home",'home')->middleware('ageCheck');
// Route::view("users", 'users');
// Route::view("about", 'about');
// Route::view("contact", 'contact');

// ..........model...........

// Route::get('users', [UserController::class,'getData']);
// Route::get('products', [ProductController::class,'getData']);

// ..........Http client...........

// Route::get('users',[UserController::class,'getData']);

// ..........Http request...........

// Route::put('users',[UserController::class,'getRequest']);
// Route::view('login','users');

// ..........session...........

// Route::view('login', 'login');
// Route::view('profile', 'profile');
// Route::post('user', [UserAuth::class, 'userLogin']);

// Route::get('logout', function () {

//     if (session()->has('user')) {
//         session()->pull('user');
//     }
//     return redirect('login');
// });

// Route::get('login', function () {

//     if (session()->has('user')) {
//         return redirect('profile');
//     }
//     return view('login');
// });

// Route::get('profile', function () {

//     if (session()->has('user')) {
//         return view('profile');
//     }
//     return redirect('login');
// });

// ..........flash session...........


// Route::view('add', 'add');
// Route::post('addmember', [AddMember::class, 'add']);

// ..........file upload...........

// Route::view('upload','upload');
// Route::post('upload', [UploadController::class, 'index']);

// ..........pagination...........

Route::view('pagination','pagination');
Route::get('list',[PaginationController::class, 'getData']);