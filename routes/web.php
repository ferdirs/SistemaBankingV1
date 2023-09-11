<?php

use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

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


Route::get('/personal_login', function(){
    return view('personal_login');
});

Route::get('/business_login', function(){
    return view('business_login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/transaction', function(){
    return view('transaction');
});

Route::get('/token_authorization', function(){
    return view('token_authorization');
});

Route::get('/transaction_success', function(){
    return view('transaction_success');
});


Route::get('/transaction_history', function(){
    return view('transaction_history');
});
