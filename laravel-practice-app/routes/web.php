<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Users;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('users',[UserController::class,'getData']);
