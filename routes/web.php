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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AuthController@login');
Route::get('/home', 'HomeController@home');
Route::get('/users', 'UsersController@users');
Route::get('/addUsers', 'UsersController@addUsers');
Route::get('/clients', 'ClientController@client');
Route::get('/addClient', 'ClientController@addClient');
Route::get('/taskMaster', 'TaskController@taskMaster');
Route::get('/addTask', 'TaskController@addTask');
Route::get('/penawaran', 'PenawaranController@penawaran');
Route::get('/addPenawaran', 'PenawaranController@addPenawaran');
Route::get('/rab', 'RabController@rab');
Route::get('/addRab', 'RabController@addRab');
Route::get('/bak', 'BakController@bak');
Route::get('/addBak', 'BakController@addBak');
Route::get('/invoice', 'InvoiceController@invoice');
Route::get('/addInvoice', 'InvoiceController@addInvoice');