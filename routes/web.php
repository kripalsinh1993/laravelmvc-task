<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RapidController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//contact us  view route

// Route:: get('/',function(){
//     return view('contactus');       
// });

// Route:: get('/gallery',function(){
//     return view('gallery');       
// });

// Route:: get('/our-services',function(){
//     return view('ourservices');       
// });

// Route:: get('/account',function(){
//     return view('account');       
// });


//template integrations


Route::get("/",[HomeController::class,'index']);


Route::get("/about",function(){

    return view("rapid.about");
});

Route::get("/services",function(){

    return view("rapid.services");
});

Route::get("/portfolio",function(){

    return view("rapid.portfolio");
});

Route::get("/team",function(){

    return view("rapid.team");
});


Route::get("/contact",function(){

    return view("rapid.contact");
});

//contact page routing
Route::get("/contact",[ContactController::class,'index']);

Route::post("/contact",[ContactController::class,'store']);

//register page routing
Route::get("/register",[RegisterController::class,'index']);
Route::post("/register",[RegisterController::class,'store']);


//admin routing here

Route::get("/admin-login",[AdminLoginController::class,"index"]);
Route::get("/admin-login/admin-dashboard",[AdminDashboardController::class,"index"]);

//manage contact routing here
Route::get("/admin-login/managecontact",[ContactController::class,"show"]);
Route::get("/admin-login/managecontact/{id}",[ContactController::class,"destroy"]);

// manage customer here

Route::get("/admin-login/managecustomer",[RegisterController::class,"show"]);
Route::get("/admin-login/managecustomer/{id}",[RegisterController::class,"destroy"]);