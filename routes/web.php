<?php

use App\Http\Controllers\SanPhamController; //khai báo link controller để sử dụng SanPhamController::class ở dưới
use Illuminate\Support\Facades\Route;



Route::get('/', [SanPhamController::class, 'index']);
Route::get('/layoutt', [SanPhamController::class, 'layoutt']);

Route::get('/sp/{id_sp}', [SanPhamController::class, 'chitietsp']);

Route::get('/loai/{id_loai}', [SanPhamController::class, 'loai']);


Route::get('/themvaogio/{idsp}/{soluong}', [SanPhamController::class, 'themvaogio']);

Route::get('/hiengiohang', [SanPhamController::class, 'hiengiohang']);

Route::get('/xoasptronggio/{idsp}', [SanPhamController::class, 'xoasptronggio']);

Route::get('/thanhtoan', [SanPhamController::class, 'thanhtoan']);

Route::post('/luu', [SanPhamController::class, 'luudonhang']);

Route::get('/thongbao', [SanPhamController::class, 'thongbao']);



// admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoaiController;
use App\Http\Controllers\AdminSanPhamController;
use App\Http\Controllers\AccountController;

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dangnhap', [AdminController::class, 'dangnhap']);

    Route::post('/dangnhap', [AdminController::class, 'dangnhap_']);

    Route::get('/thoat', [AdminController::class, 'thoat']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('loai', AdminLoaiController::class); //laravel se tu dong them cac route de minh dung
    Route::resource('sanpham', AdminSanPhamController::class); //laravel se tu dong them cac route de minh dung
});


Route::get('/dangnhap', [AccountController::class, 'dangnhap'])->name('login');
Route::post('/dangnhap', [AccountController::class, 'dangnhap_']);
Route::get('/thoat', [AccountController::class, 'thoat']);
Route::get('/download', [SanPhamController::class, 'download'])->middleware('auth');

Route::get('/dangky', [AccountController::class, 'dangky']);

Route::post('/dangky', [AccountController::class, 'dangky_']);

Route::get('/camon', [AccountController::class, 'camon']);

// mailer
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
