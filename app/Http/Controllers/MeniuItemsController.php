<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\MeniuItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeniuItemsController extends Controller
{
    // Create form
    public function create() {
        $meniuItems = DB::table('categories')->get();
        return view('meniu-items.create', [
            'categories' => $meniuItems,
        ]);
    }

    // Store Meniu-Items

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'category_id' => 'required',
        ]);

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        MeniuItems::create($data);
        return redirect('/');
    }

    // Edit Meniu-Items

    public function edit(MeniuItems $meniuItem) {
        return view('meniu-items.edit', [
            'categories' => Categories::all(),
            'meniuItem' => $meniuItem,
        ]);
    }
    // Update Meniu-Items
    public function update(Request $request, MeniuItems $meniuItem) {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'category_id' => 'required',
        ]);

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $meniuItem->update($data);
        return redirect('/');
    }

    // Delete Meniu-Items
    public function destroy(MeniuItems $meniuItem) {
        $meniuItem->delete();
        
        return redirect('/');
    }

}
