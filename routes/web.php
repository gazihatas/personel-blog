<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\ArticleController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/
//Giriş yapmışssa tekrardan giriş sayfasına ulaşmama kısmı
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function () {
    Route::get('giris', [AuthController::class, 'login'])->name('login');
    Route::post('giris', [AuthController::class, 'loginPost'])->name('login.post');
});

//panele ulaşmama middleware i
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function (){
    Route::get('panel',[Dashboard::class,'index'])->name('dashboard');
    Route::resource('makaleler',ArticleController::class);
    Route::get('/switch',[ArticleController::class,'switch'])->name('switch');
    Route::get('cikis',[AuthController::class,'logout'])->name('logout');
});



/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[Homepage::class, 'index'])->name('homepage');
Route::get('sayfa',[Homepage::class, 'index']);
Route::get('/iletisim',[Homepage::class,'contact'])->name('contact');
Route::post('/iletisim',[Homepage::class,'contactpost'])->name('contact.post');
Route::get('/kategori/{category}',[Homepage::class,'category'])->name('category');
Route::get('/{category}/{slug}',[Homepage::class,'single'])->name('single');
Route::get('/{sayfa}',[Homepage::class,'page'])->name('page');


