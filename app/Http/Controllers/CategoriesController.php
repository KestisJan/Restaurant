<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    // Create form
    public function create() {
        $menuItems = DB::table('categories')->get();
        return view('categories.create', [
            'categories' => $menuItems,
        ]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            
        ]);

        Categories::create($data);

        return redirect('/');
    }
}
