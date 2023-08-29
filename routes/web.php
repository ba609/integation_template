<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('404', function () {  return view('404');});
Route::get('alerts', function () {  return view('alerts');});
Route::get('blank', function () {  return view('blank');});
Route::get('buttons', function () {  return view('buttons');});
Route::get('charts', function () {  return view('charts');});
Route::get('copycontent', function () {  return view('copycontent');});
Route::get('datatables', function () {  return view('datatables');});
Route::get('dropdowns', function () {  return view('dropdowns');});
Route::get('form_advanceds', function () {  return view('form_advanceds');});
Route::get('form_basics', function () {  return view('form_basics');});
Route::get('login', function () {  return view('login');});
Route::get('modals', function () {  return view('modals');});
Route::get('popovers', function () {  return view('popovers');});
Route::get('progress', function () {  return view('progress');});
Route::get('register', function () {  return view('register');});
Route::get('simple-tables', function () {  return view('simple-tables');});
Route::get('ui-colors', function () {  return view('ui-colors');});

