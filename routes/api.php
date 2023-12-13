<?php

use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\UserController;
use App\Models\Post;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/blog/user', [UserController::class, 'userAll']);
Route::post('/blog/register', [UserController::class, 'register']);
Route::post('/blog/login', [UserController::class, 'login']);

Route::get('/blog', function () {
    return response()->json(
        [
            'message' => 'success',
            'data' => [
                'nama' => 'data 1',
                'umur' => 23
            ]
        ],
        200
    );
})->middleware(['auth:sanctum']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post}/post', [PostController::class, 'show']);
Route::post('/blog', [PostController::class, 'create']);
Route::put('/blog/{post}/edit', [PostController::class, 'update']);
Route::delete('/blog/{post}/delete', [PostController::class, 'destroy']);
