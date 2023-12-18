<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestRelationshipController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestRelationshipController::class, 'test'])->name('test.relationship');

// Search
Route::get('search/query', [SearchController::class, 'query']);
Route::get('search/add', [SearchController::class, 'add']);
Route::get('search/delete', [SearchController::class, 'delete']);
