<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WatchController;
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

Route::get("/admin",[UserController::class,"index"])->name("user.table");
Route::get("/admin/delete-user/{id}",[UserController::class,"destroy"])->name("delete.user");
Route::get("/admin/video-table",[VideoController::class, "tableVideo"])->name("video.table");
Route::post("/admin/add-video",[VideoController::class,"create"])->name("add.video.process");
Route::get("/admin/add-video",[VideoController::class, "addVideo"])->name("add.video");
Route::get("/admin/update-video/{id}",[VideoController::class, "edit"])->name("edit.video");
Route::put("/admin/update-video/{id}",[VideoController::class, "update"])->name("update.video");
Route::get("/admin/delete-video/{id}",[VideoController::class, "destroy"])->name("delete.video");


Route::get("/auth",[AuthController::class, "index"]);
Route::get("/auth/login",[AuthController::class, "login"])->name("login");
Route::post("/auth/login",[AuthController::class, "loginProcess"])->name("login.process");
Route::get("/auth/signup",[AuthController::class, "signup"])->name("signup");
Route::post("/auth/signup",[AuthController::class, "signupProcess"])->name("signup.process");
Route::get("/logout",[AuthController::class, "logout"])->name("logout");

Route::group(["middleware" => ["auth"]] ,function(){
    Route::get('/', [HomeController::class, "index"])->name("home")->middleware("auth");
    Route::get('/watch/{id}', [WatchController::class, "index"])->name("watch");
});

