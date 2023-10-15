<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{   
    // Index
    public function index() {
        return view('categories.index', [
            'categories' => Categories::all(),
        ]);
    }
    // Create form
    public function create() {
        return view('categories.create', [
            'categories' => DB::table('categories')->get(),
        ]);
    }
    // Store function
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            
        ]);

        Categories::create($data);

        return redirect('/');
    }
}
