<?php
use Illuminate\Support\Facades\Route;
use App\Livewire\Website\HomePage;
use App\Livewire\Website\Contact;

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

Route::get('/', HomePage::class);
Route::get('/contact', Contact::class);
