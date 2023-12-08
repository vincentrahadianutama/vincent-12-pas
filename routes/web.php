<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\NewsController;

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
    return view('beranda');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});



/*Route::get('/news', function(){
    return view('news');
});*/

//CRUD News
//Create
Route::get('/news/create', [NewsController::class, 'create']);
//mengirim data ke database
Route::post('/news', [NewsController::class, 'push']);
//Read
//menampilkan data
Route::get('/news', [NewsController::class, 'index']);
//berdasarkan id
Route::get('/news/{news_id}', [NewsController::class, 'show']);
//Update
//form update news
Route::get('/news/{news_id}/edit', [NewsController::class, 'edit']);
//update data ke database
Route::put('/news/{news_id}', [NewsController::class, 'update']);
//Delete
//Delete berdasarkan id
Route::delete('/news/{news_id}', [NewsController::class, 'delete']);