<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\VideoController;


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
Route::get('/admin', function () {return view('contentadmin.contentadmin');});
Route::get('/slider', function () {return view('slider');});
Route::get('/banner', function () {return view('banner');});
Route::get('/video', function () {return view('video');});
Route::get('/post', [PostController::class, 'index']);
Route::get('/tablica', [DeleteController::class, 'table']);
Route::get('/slider', [PostController::class, 'slider']);
Route::get('/tablcia/{update}',[EditController::class, 'edit']);
Route::delete('/tablica/{delete}',[DeleteController::class, 'delete']);
Route::post('/edit/{edit}',[EditController::class, 'edit']);
Route::post('edit',[EditController::class, 'update']);
Route::post('edit/{edit}',[EditController::class, 'lama']);
Route::post('/video',[VideoController::class, 'video']);





