<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Transactions;

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
    return view('welcome',[CategoriesController::class, 'index']);
});


Route::get('/dashboard');
Route::get('/recapitulation', function () {
    return view('recapitulation',[
        'title' => 'Recapitulation',
        'total_income' => '1500000',
        'total_outcome' => '7000000',
        'all_Category' => [
            'Biaya honor PTK','	Biaya Operasional Lembaga','Biaya Pembelian Media Pembelajaran'
        ],
        'sum_Category' => [
            1220000,200000,300004
        ]
    ]);
});

Route::get('/categoriesList', function () {
    return view('categoriesList',[
        'title' => 'Categories List',
        "categories" => Category::all()
    ]);
});

Route::get('/categoriesList', [CategoriesController::class, 'index']);
Route::get('/category/{category}', [CategoriesController::class, 'show']);

Route::get('/login', function () {
    return view('login',[
        'title' => 'Login',
    ]);
});
