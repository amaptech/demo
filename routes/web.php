<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('/ about',function(){
//     return view ('about');
// });
// route::get('/ contact',function(){
// return view ('contact');
// });

// route::get('/product/{name}', function($name){
//     $data=$name;
//     return view('product');
// });

route::get ('/', [BasicController::class , 'index']);
route::get ('/contact', [BasicController::class , 'get_contact']); 
route::get('/about',[BasicController::class,'about']);
route::get('/products/{name}',[BasicController::class,'get_products']);

route::get('/services',SingleActionController::class);


route::resource('demo',ResourceController::class);


route::get('/add_user',[UserController::class, 'add_user']);
route::get('/add_customer', [CustomerController::class, 'add_customer']);
route::post('/add_customer_data',[CustomerController::class, "add_customer_data"]);