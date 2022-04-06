<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\userMenuController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\PaymentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/menu',[userMenuController::class,'menu'])->name('menu');

Route::get('/addItem',[ItemController::class,'index'])->name('addItem');
Route::post('/createItem',[ItemController::class,'create'])->name('createItem');
Route::get('/allItem',[ItemController::class,'all'])->name('allItem');
Route::get('/editItem/{itemId}',[ItemController::class,'edit'])->name('editItem');
Route::post('/updateItem',[ItemController::class,'update'])->name('updateItem');
Route::get('/deleteItem/{itemId}',[ItemController::class,'delete'])->name('deleteItem');

Route::get('/addMenu',[MenuController::class,'index'])->name('addMenu');
Route::post('/createMenu',[MenuController::class,'create'])->name('createMenu');
Route::get('/editMenu/{menuId}',[MenuController::class,'edit'])->name('editMenu');
Route::post('/updateMenu',[MenuController::class,'updateMenu'])->name('updateMenu');
Route::get('/deleteMenu/{menuId}',[MenuController::class,'delete'])->name('deleteMenu');
Route::get('/allMenu',[MenuController::class,'all'])->name('allMenu');


Route::get('/addOrder/{itemId}',[orderController::class,'index'])->name('addOrder');
Route::post('/createOrder',[orderController::class,'create'])->name('createOrder');
Route::get('/allOrder',[orderController::class,'all'])->name('allOrder');
Route::get('/editOrder/{orderId}',[orderController::class,'edit'])->name('editOrder');
Route::post('/updateOrder',[orderController::class,'updateOrder'])->name('updateOrder');
Route::get('/deleteOrder/{orderId}',[orderController::class,'delete'])->name('deleteOrder');
Route::get('/adminOrder',[orderController::class,'adminOrder'])->name('adminOrder');
Route::get('/notification',[orderController::class,'notification'])->name('notification');


Route::post('/createPayment',[PaymentController::class,'create'])->name('createPayment');
Route::get('/addPayment/{orderId}',[PaymentController::class,'index'])->name('addPayment');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
