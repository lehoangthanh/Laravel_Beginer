<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('products', [
    ProductsController::class,
    'index'
]);

Route::get('products/{id}', [
    ProductsController::class,
    'detail'
]);

//reponse an string
Route::get('/users', function () {
    return 'This is the users page';
});

//reponse an array
Route::get('/foods', function () {
    return ['sushi', 'sashimi', 'tofu'];
});

//reponse an object(associative array)
Route::get('/aboutme', function () {
    return response()->json([
        'name' => 'Thai Van Quy',
        'age' => 22,
        'email' => 'thaivanquy2503@gmail.com'
    ]);
});

//reponse another request = redirect
Route::get('/contact', function() {
    return redirect('/aboutme'); //redirect page aboutme
});
*/
