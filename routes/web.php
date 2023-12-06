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

Route::get("/admin",[UserController::class,"index"])->name("admin");

Route::post("/admin/add-video",[VideoController::class,"create"])->name("add.video.process");
Route::get("/admin/video-list",[VideoController::class, "tableVideo"])->name("video.list");
Route::get("/admin/add-video",[VideoController::class, "addVideo"])->name("add.video");
Route::get("/admin/update-title",[VideoController::class, "updateTitle"])->name("update.title");
Route::get("/admin/update-anime",[VideoController::class, "updateAnime"])->name("update.anime");
Route::get("/admin/update-link-id",[VideoController::class, "updateLinkID"])->name("update.linkID");
Route::get("/admin/update-thumbnail",[VideoController::class, "updateThumbnail"])->name("update.thumbnail");

Route::get("/auth",[AuthController::class, "index"]);
Route::get("/auth/login",[AuthController::class, "login"])->name("login");
Route::post("/auth/login",[AuthController::class, "loginProcess"])->name("login.process");
Route::get("/auth/signup",[AuthController::class, "signup"])->name("signup");
Route::post("/auth/signup",[AuthController::class, "signupProcess"])->name("signup.process");
Route::get("/logout",[AuthController::class, "logout"])->name("logout");

Route::group(["middleware" => ["auth"]] ,function(){
    Route::get('/', [HomeController::class, "index"])->name("home")->middleware("auth");
    Route::get('/watch/{id}', [WatchController::class, "index"]);
});

