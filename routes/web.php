<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show Form
Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::put('/listings/{listing}', [ListingController::class, 'update']);

// <a href="/users/posts/comments">
// <a href="{{ route('users') }}">

// route('users')

// Route::match(['get','post'], '/', function(){
//     return 'from match route';
// });

// Route::get('/', function(){});

// Route::post('/', functino(){});


// Route::get('/about', function () {
//     return 'About PHP';
//     // return view('welcome');
// });

// Route::get('/aboutsss', function () {
//     return 'Aboutsss PHP';
//     // return view('welcome');
// });

// Route::get('/users/{id}', function ($id) {
//     $a = 'test';
//     $b = ['a','b','c'];
//     $listings = [
//         [
//             'id' => 1,
//             'title' => 'Listing One',
//             'description' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Listing Two',
//             'description' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum'
//         ],
//     ];
//     return view('about',compact(['id','a', 'b', 'listings']));
// });
