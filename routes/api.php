<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use App\Http\Controllers\Commentaire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentaireController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });[UserController::class, 'index']

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts',   [PostController::class, 'store']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::get('/commentaires', [CommentaireController::class, 'index']);
Route::get('/commentaires/{id}', [CommentaireController::class, 'show']);
Route::post('/commentaires',  [CommentaireController::class, 'store']);
Route::put('/commentaires/{id}', [CommentaireController::class, 'update']);
Route::delete('/commentaires/{id}', [CommentaireController::class, 'destroy']);

