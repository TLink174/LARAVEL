<?php

use Illuminate\Support\Facades\Route;
// use PharIo\Manifest\Email;
use App\Http\Controllers\ProController;


 Route::get('products', [ProController::class, 'index']);
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
/*
Route::get('/', function () {
    return view('home');
    return env("MY_NAME");
}); 
Route::get('/users', function () {
    return 'hé lô mng';
});
Route::get('/list', function () {
    return ['Linh', 'Tiên', 'Tú'];
});
Route::get('/info', function () {
    return response()->json([
        'name' => 'Linh',
        'email' => 'linh@gmail.com',
        'young' => '19'
    ]);
});Route::get('/something', function () {
    return redirect('/info');
});
*/