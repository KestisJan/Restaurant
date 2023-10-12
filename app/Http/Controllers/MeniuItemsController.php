<?php

namespace App\Http\Controllers;

use App\Models\MeniuItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeniuItemsController extends Controller
{
    // Create form
    public function create() {
        $menuItems = DB::table('meniu')->get();
        return view('meniu-items.create', [
            'menu' => $menuItems,
        ]);
    }

    // Store Meniu-Items

    public function store(Request $request) {
        
        MeniuItems::create();
    }
}
