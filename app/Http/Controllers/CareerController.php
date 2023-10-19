<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function create() {
        return view('career.apply');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'cover_letter' => 'sometimes',
            'cv' => 'required|file|mimes:pdf,doc,docx',
            'privacy_policy' => 'accepted',
        ]);

        if ($request->hasFile('cv')) {
            $data['cv'] = $request->file('cv')->store('cv', 'cv');
        }

        Career::create($data);
        
        return redirect('/');
    }
}
