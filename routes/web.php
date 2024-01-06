<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteVideo;
use App\Http\Controllers\FavoriteVideoController;
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

Route::get("/auth", [AuthController::class, "index"]);
Route::get("/auth/login", [AuthController::class, "login"])->name("login");
Route::post("/auth/login", [AuthController::class, "loginProcess"])->name("login.process");
Route::get("/auth/signup", [AuthController::class, "signup"])->name("signup");
Route::post("/auth/signup", [AuthController::class, "signupProcess"])->name("signup.process");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");

Route::group(["middleware" => ["auth", "role:admin, user "]], function () {
    Route::get("/", [VideoController::class, "showAllVideos"])->name("home");
    Route::get("/watch/{id}", [VideoController::class, "showSelectedVideo"])->name("watch");
    Route::get("/settings", function () {
        return view("settings");
    });
    Route::post("/settings/update", [UserController::class, "update"])->name("user.update");

    Route::get("/favorites", [FavoriteVideoController::class, "showFavoriteVideos"])->name("favorite.video.index");

    Route::get(
        "/videos/{id}/check-favorite-status",
        [FavoriteVideoController::class, "checkFavoriteStatus"]
    )->name("video.check.favorite.status");

    Route::middleware("web")->post(
        "/videos/{id}/add-to-favorites",
        [FavoriteVideoController::class, "addToFavorites"]
    )->name("video.add.favorite");

    Route::middleware("web")->post(
        "/videos/{id}/remove-from-favorites",
        [FavoriteVideoController::class, "removeFromFavorites"]
    )->name("video.remove.favorite");

    Route::middleware("role:admin")->group(function () {
        Route::get("/admin", [UserController::class, "index"])->name("user.index");
        Route::get("/admin/delete-user/{id}", [UserController::class, "destroy"])->name("user.destroy");
        Route::get("admin/videos/add", [VideoController::class, "addVideo"])->name("videos.add");
        Route::resource("admin/videos", VideoController::class);
    });
});
