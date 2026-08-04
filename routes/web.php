<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\BookingController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Seeder\SeederController;
use App\Http\Controllers\Database\DatabaseController;

use App\Http\Controllers\Admin\{
    AdminController,
    HotelInfoController,
    ServiceController,
    RoomController,
    ReviewController,
    PostController,
    BlogController,
    LocationController
};

// Client routes
Route::get("/", [HomeController::class, "trang_chu"])->name("client.trang_chu");
Route::get("/bai-viet", [HomeController::class, "bai_viet"])->name("client.bai_viet");
Route::get("/bai-viet-chi-tiet/{id}", [HomeController::class, "bai_viet_chi_tiet"])->name("client.bai_viet_chi_tiet");
Route::get("/dich-vu", [HomeController::class, "dich_vu"])->name("client.dich_vu");
Route::get("/dich-vu-chi-tiet/{id}", [HomeController::class, "dich_vu_chi_tiet"])->name("client.dich_vu_chi_tiet");
Route::get("/bai-bao", [HomeController::class, "bai_bao"])->name("client.bai_bao");
Route::get("/danh-sach-phong-nghi", [HomeController::class, "bai_bao"])->name("client.danh_sach_phong_nghi");
Route::get("/chi-tiet-phong/{id}", [HomeController::class, "chi_tiet_phong"])->name("client.chi_tiet_phong");

Route::get("/phong-nghi", [HomeController::class, "phong_nghi"])->name("client.phong_nghi");
Route::get("/phong-nghi-chi-tiet/{id}", [HomeController::class, "chi_tiet_phong"])->name("client.phong_nghi_chi_tiet");
Route::get("/lien-he", [ContactController::class, "lien_he"])->name("client.lien_he");

Route::post("/booking", [BookingController::class, "booking"])->name("client.booking");

Route::get("/login", [LoginController::class, "login"])->name("login");
Route::get("/logout", [LoginController::class, "login"])->name("logout");
Route::post("/authenticate", [LoginController::class, "authenticate"])->name("admin.authenticate");


// Admin routes protected by 'auth' middleware
//Route::get("/seeder", [SeederController::class, "index"])->name("seeder");
//Route::get("/database", [DatabaseController::class, "editor"])->name("database.editor");
//Route::post("/executeSQL", [DatabaseController::class, "executeSQL"])->name("database.executeSQL");

Route::prefix('admin')->name("admin.")->middleware('auth')->group(function () {
    Route::get("/index", [HotelInfoController::class, "index"])->name("index");

    Route::get("/passwordReset", [AdminController::class, "index"])->name("passwordReset");
    Route::post("/updatePassword", [AdminController::class, "updatePassword"])->name("updatePassword");

    Route::resource('hotel-info', HotelInfoController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('posts', PostController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('locations', LocationController::class);

    // CK Finder setup (nếu cần bảo vệ)
    Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
        ->name('ckfinder_connector');
    Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
        ->name('ckfinder_browser');
});
