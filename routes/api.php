<?php

use App\Models\Role;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", function (Request $request) {
    return User::all();
});


Route::get("/roles", function (Request $request) {
    return Role::all();
});

Route::get("/sessions", function (Request $request) {
    return Session::where('active', 'N')->get();
});
