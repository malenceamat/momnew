<?php
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|d
*/

Route::get('/', function () {
    return view('content');
});

Route::get('/tablica', function () {
    return view('tablica');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/slider', [PostController::class, 'Submit']);
/*Route::post('/slider', [ButtonsText::class, 'Submit']);*/



Route::get('/admin', function () {
    return view('contentadmin.contentadmin');
});

Route::get('/slider', function () {
    return view('slider');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/text', function () {
    return view('text');
});



Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/tablica', [DeleteController::class, 'table']);

Route::get('/slider', [PostController::class, 'slider']);
Route::get('/tablcia/{update}',[EditController::class, 'edit']);

Route::delete('/tablica/{delete}',[DeleteController::class, 'DELETE']);
Route::post('/edit/{edit}',[EditController::class, 'edit']);
Route::post('edit',[EditController::class, 'update']);
/*Route::post('/edit/{edit}',[EditController::class, 'save']);*/
