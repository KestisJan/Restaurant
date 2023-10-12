<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeniuItemsController extends Controller
{
    // Create form
    public function create() {
        return view('meniu-items.create');
    }
}
