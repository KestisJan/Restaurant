<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{   
    public function index() {
        return view('career.index',[
            'careers' => Career::all(),
        ]);
    }

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
            $data['cv'] = $request->file('cv')->store('cv', 'local');
        }

        Career::create($data);
        
        return redirect('/');
    }
     // Download function
     public function download($filename) {
        $file = storage_path('app/' . $filename);
        if (file_exists($file)) {
            return response()->file($file);
        } else {
            abort(404);
        }
    }

    public function destroy($careerId) {
        $cv = Career::find($careerId);
        $cv->delete();
        
        return redirect('/');
    }
}
