<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyTestCon;

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
    return view('login');
});

Route::view("register",'register');
//view register form
Route::post('register/',[MyTestCon::class,'regform']);

//insertion and validation
Route::post('regist/',[MyTestCon::class,'register']);

//view login form
Route::view("login",'login');

//validation login
Route::post('logvalid/',[MyTestCon::class,'check']);


Route::get('userview',[MyTestCon::class,'userview']);

//deleting the user
Route::get('delete/{id}',[MyTestCon::class,'deleteuser']);

//updating the user
Route::get('updateuser/{id}',[MyTestCon::class,'updateView']);
Route::post('/updateuser',[MyTestCon::class,'updateuser']);
Route::view('update', 'updateuser');
Route::view('userhome','userhome');

