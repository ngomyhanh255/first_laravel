<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

use App\Http\Controllers\ProductController;






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
Route::get('/', function () {
    dd("helo");
    return 'Hello World';
}); 

Route::prefix('/product')->group(function () {
    Route::post('/', [ProductController::class, 'create']);
    Route::get('/', [ProductController::class, 'list']);
});

