<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'detail'])->where('id', '[0-9]+');
Route::get('/articles/partager', [ArticleController::class, 'partager']);
Route::post('/articles/sauvegarde', [ArticleController::class, 'sauvegarde']);


Route::post('/commentaires/sauvegarder', [CommentaireController::class, 'sauvegarder']);
