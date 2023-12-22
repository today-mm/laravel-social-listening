<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home
Route::get('/', function () {return view('home');});
// Commands
Route::get('/console', function () {return view('home');});
// Github Page
Route::get('/gh-page', function () {return view('site.home');})->name('gh-page-home');
Route::get('/gh-page/developer-documentation', function () {return view('welcome');})->name('developer-documentation');
Route::get('/gh-page/supports/bug-report', function () {return view('welcome');})->name('support.bug-report');
Route::get('/gh-page/supports/technical-support', function () {return view('welcome');})->name('support.technical-support');
Route::get('/gh-page/supports/feature-request', function () {return view('welcome');})->name('support.bug-report');
Route::get('/gh-page/supports/question', function () {return view('welcome');})->name('support.bug-report');
Route::get('/gh-page/supports/documentation', function () {return view('welcome');})->name('support.bug-report');

