<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RazdelController;
Route::get('/', function () {
    return view('content');
});

Route::get('/tablica', function () {
    return view('tablica');
});

Route::get('/editvideo', function () {
    return view('videoedit');
});

Route::get('/galleryedit', function () {
    return view('galleryedit');
});

Route::get('/createslide', function () {
    return view('createslide');
});

Route::get('/redrazdel', function () {
    return view('redrazdel');
});


Route::get('/createimage', function () {
    return view('createimage');
});

Route::get('/createrazdel', function () {
    return view('createrazdel');
});


Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/slider', [PostController::class, 'Submit']);
Route::get('/admin', function () {return view('contentadmin.contentadmin');});
Route::get('/slider', function () {return view('slider');});
Route::get('/gallery', function () {return view('gallery');});
Route::get('/post', [PostController::class, 'index']);
Route::get('/tablica', [DeleteController::class, 'table']);
Route::get('/slider', [PostController::class, 'slider']);
Route::get('/tablica/{update}',[EditController::class, 'edit']);
Route::delete('/tablica/{delete}',[DeleteController::class, 'delete']);
Route::post('/edit/{edit}',[EditController::class, 'edit']);
Route::post('edit',[EditController::class, 'update']);
Route::get('/video', [VideoController::class, 'video']);
Route::post('/video', [VideoController::class, 'insert'])->name('video');
Route::get('video', [VideoController::class, 'qwe']);



Route::get('createimage', [GalleryController::class, 'index']);
Route::post('createimage', [GalleryController::class, 'upload']);

Route::post('createrazdel', [RazdelController::class, 'create']);

Route::get('/galleryedit',[RazdelController::class, 'table']);
Route::delete('/galleryedit/{delete}',[RazdelController::class, 'delete']);

Route::post('/redrazdel/{edit}',[RazdelController::class, 'edit']);
Route::post('redrazdel',[RazdelController::class, 'update']);
