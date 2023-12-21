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

Route::get("/auth", [AuthController::class, "index"]);
Route::get("/auth/login", [AuthController::class, "login"])->name("login");
Route::post("/auth/login", [AuthController::class, "loginProcess"])->name("login.process");
Route::get("/auth/signup", [AuthController::class, "signup"])->name("signup");
Route::post("/auth/signup", [AuthController::class, "signupProcess"])->name("signup.process");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");

Route::group(["middleware" => ["auth", 'role:admin,user']], function () {
    Route::get('/', [HomeController::class, "index"])->name("home");
    Route::get('/watch/{id}', [WatchController::class, "index"])->name("watch");
    Route::get('/settings', function () {
        return view("settings");
    });
    Route::post('/settings/update', [UserController::class, "update"])->name("user.update");

    Route::middleware('role:admin')->group(function () {
        Route::get("/admin", [UserController::class, "index"])->name("user.index");
        Route::get("/admin/users", [UserController::class, "user"])->name("user.user");
        Route::get("/admin/delete-user/{id}", [UserController::class, "destroy"])->name("user.delete");
        Route::get('admin/videos/add', [VideoController::class, "addVideo"])->name("videos.add");
        Route::resource('admin/videos', VideoController::class);
    });
});
