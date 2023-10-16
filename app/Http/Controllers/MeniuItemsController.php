<?php

namespace App\Http\Controllers;

use App\Models\MeniuItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeniuItemsController extends Controller
{
    // Create form
    public function create() {
        $menuItems = DB::table('categories')->get();
        return view('meniu-items.create', [
            'categories' => $menuItems,
        ]);
    }

    // Store Meniu-Items

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            // Add other validation rules for your fields
        ]);

        MeniuItems::create($data);
        return redirect('/');
    }
}
