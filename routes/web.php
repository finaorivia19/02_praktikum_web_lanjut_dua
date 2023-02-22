<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/articles/{id}', [HomeController::class, 'articles']);

//praktikum 3
//halaman home
Route::get('/', function () {
     echo"Selamat Datang di Halaman Website Educa Studio";
 });

 //Halaman Products
 Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Ini Merupakan Halaman Marbel Edu Games";
    });
    Route::get('/marbel-and-friend-kids-games', function () {
        echo "Ini Merupakan Halaman Marbel and Friend kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Ini Merupakan Halaman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Ini Merupakan Halaman Kolak Kids Songs";
    });
});

//Halaman News
Route::get('/news/{name?}', function ($name = null) {
    return 'Anda menuju ke dalam Halaman Berita ' . $name;
});

//Halaman Program
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Ini Merupakan Halaman Program Karir";
    });
    Route::get('/magang', function () {
        echo "Ini Merupakan Halaman Program Magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Ini Merupakan Halaman Program Kunjungan Industri";
    });
});

//Halaman About Us
Route::get('/aboutUs', function () {
    echo "Ini Merupakan Halaman About Us";
});

//Halaman Contact Us
Route::resource('/contact-us',ContactController::class)->only([
    'show'
]);