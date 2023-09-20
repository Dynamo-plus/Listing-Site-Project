<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Database\Factories\ListingFactory;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

/**
 * index - show all listing
 * show - show single listing
 * create - show form to create a listing
 * store - Store new listing
 * edit - show form to edit listing
 * update - update listing
 * destroy - delete listing
*/

//ALL Listings
Route::get('/', [ListingController::class, 'index']);


//Show Create Form

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Edit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Route to the store method

Route::post('/listings', [ListingController::class, 'store']);

//Create manage listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Route to Registration/Sign Up form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login user
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('users/authenticate', [UserController::class, 'authenticate']);




