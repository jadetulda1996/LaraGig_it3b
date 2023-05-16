<?php

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

Route::get('/', function (Request $request) {
    return view('welcome');
});


Route::get('/users/{id}', function ($id) {
    $a = 'test';
    $b = ['a','b','c'];
    $listings = [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum'
        ],
    ];
    return view('about',compact(['id','a', 'b', 'listings']));
});

//All listings
Route::get('/listings', function(){

    $listings = Listing::all();
    //select * from listings

    return view('listings', compact('listings'));
});

// Single Listing
Route::get('/listings/{id}',function($id){

    $listing = Listing::find($id);

    //select * from listings where id=$id

    // dd($listing);

    return view('listing',compact('listing'));
});

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
