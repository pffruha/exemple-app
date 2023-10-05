<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome'); // Комментарий
});

Route::get('/mypage', 'MyPageController@mypage');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/post/create', 'PostController@create');
Route::get('/post/update', 'PostController@update');
Route::get('/post/delete', 'PostController@delete');

Route::get('/sport', 'sportController@index');

Route::get('/Season', 'SeasonController@index');

Route::get('/week', 'WeekController@index');

Route::get('/first', function(){
    return 'Первая страница';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
