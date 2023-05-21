<?php

use App\Http\Controllers\ActionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/',[ActionController::class,'index'])->name('index');

Route::post('/store',[ActionController::class,'storeData'])->name('store');

Route::get('/user-agent',[ActionController::class,'getUserAgent']);

Route::get('/query',[ActionController::class,'getQuery']);


Route::get('/json-response',[ActionController::class,'sendResponse']);


Route::get('/uploadForm',[ActionController::class,'uploadForm']);
Route::post('/uploadFile',[ActionController::class,'upload']);

Route::get('/get-cookie',[ActionController::class,'getCookie']);

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    if(!empty($email)){
        $response = [
            "success" => true,
            "message" => "Form submitted successfully."
        ];
    
        return response()->json($response);
    }else{
        return "Please provide an email address first!";
    }
   
});

Route::get('/query',[ActionController::class,'getQuery']);


