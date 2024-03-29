<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\userMenuController;
use App\Http\Controllers\orderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
