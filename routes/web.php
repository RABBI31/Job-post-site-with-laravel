<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('listings', [
        'listings' => \App\Models\Listing::all()
    ]);
});

// Route::get('/listing/{id}', function ($id) {
//     return view('listing',[
//         listings =>Listing::find($id)
//     ]);
// });

