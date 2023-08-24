<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;

class LoggedController extends Controller
{
    public function show($id) {
        $projects = Project :: findOrFail($id);
        return view ('show', compact('projects'));
    } 

    public function create() {
        $types = Type :: all();
        return view('create', compact('types'));
    }
    
    public function store(Request $request) {
        
        $data = $request -> all(); 
        $projects = Project :: create($data);
        return redirect() -> route('project.show', $projects -> id);
    }
}
