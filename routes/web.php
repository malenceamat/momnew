<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
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

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/post', [PostController::class, 'Submit']);

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

/*Route::get('/', function () {
    $post = App\Http\Controllers\PostController::all();
    return view('image', compact('post'));
});*/

Route::get('/slider', 'PostController@allData')->name('test');