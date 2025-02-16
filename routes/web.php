<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soodhawoow', function () {
    return view('customerRegistration');
});


Route::get('/displayCustomer',[CustomerController::class,'showCustomer']);
Route::post('/create-customer',[CustomerController::class,'storeCustomer']);
