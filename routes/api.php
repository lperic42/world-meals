<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;


//main routes - Note: route '/' redirects to /lang/en as default landing page
//to filter response by language change /lang/en to /lang/hr

Route::get('/', [MainController::class, 'index']);
Route::get('/lang/{locale}', [MainController::class, 'switchLocale']);

