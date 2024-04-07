<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Transactions;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('categoriesList',[
            'title' => 'Dashboard',
            'username' => 'Putra',
            'categories' => Category::all(),
            'transactions' => Transactions::all()
        ]);
    }

    public function show(Category $category){
        return view('category', [
            'title' => 'Dashboard',
            'username' => 'Putra',
            'category' => $category
        ]);
    }
    
}
