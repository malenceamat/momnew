<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
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

Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);

Route::get('/admin', function () {
    return view('admin');
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

Route::get('/image', function () {
    return view('image');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/tablica', [DeleteController::class, 'table']);

Route::get('/slider', [UploadImageController::class, 'slider']);
Route::get('/slider/{update}',[EditController::class, 'edit']);
/*Route::get('/slider/{id}{update}',[EditController::class, 'formedit']);*/
Route::delete('/tablica/{delete}',[DeleteController::class, 'DELETE']);


