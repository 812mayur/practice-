<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CustomerController;


Route::controller(CustomerController::class)->group(function()
{
    Route::get('display','display');
    Route::post('store','store')->name('store');

});

Route::get('/',[MemberController::class,'display'])->name('welcome');

Route::get('/addmember',[MemberController::class,'addform'])->name('addform');

Route::post('/added',[MemberController::class,'added'])->name('added');

Route::get('/updatepage/{id}',[MemberController::class,'updateform'])->name('editform');

Route::post('/updated/{id}',[MemberController::class,'updated'])->name('updated');

Route::get('/delete/{id}',[MemberController::class,'delete'])->name('delete');



//PAYMENT

Route::get('/pay',[MemberController::class,'phome'])->name('phome');

Route::get('/addpayment',function(){
    return view('pform');
})->name('p_add');

Route::post('/addedpay',[MemberController::class,'payadded'])->name('payadded');

Route::get('/deletep/{id}',[MemberController::class,'deletep'])->name('deletep');

Route::get('/memberdetails/{id}',[MemberController::class,'memberdetails'])->name('memberdetails');
