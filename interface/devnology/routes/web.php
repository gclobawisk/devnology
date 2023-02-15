<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinksController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;



Route::get('', [LinksController::class, 'getLinks'])->middleware('usuario');
Route::get('/meusblogs', [LinksController::class, 'MeusBlogs'])->middleware('usuario');
Route::get('/login', [LoginController::class, 'pageLogin']);
Route::get('/logout', [LogoutController::class, 'logout'])->middleware('usuario');
Route::get('/perfil', [UserController::class, 'getInfoUser'])->middleware('usuario');


Route::get('/events/{li_id}', [EventsController::class, 'destroyLinks']);
Route::get('/events/deletarblog/{blog_id}', [EventsController::class, 'destroyBlogs']);
Route::get('/events/deletarlink/{li_id}/{li_blog_id}', [EventsController::class, 'destroyLink']);
Route::get('/deletartodososlinks', [EventsController::class, 'destroyAllLinks']);
Route::get('/blogdetalhes/{li_blog_id}', [BlogController::class, 'getBlogDetalhes'])->middleware('usuario');

Route::post('/processarlogin', [LoginController::class, 'auth']);
Route::post('/editarlink', [LinksController::class, 'editarLink']);
Route::post('/events/processaimagem', [EventsController::class, 'uploadImage']);

Route::post('/events/pesquisa', [EventsController::class, 'searchLink']); //