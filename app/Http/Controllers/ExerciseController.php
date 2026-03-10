<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function exercise(Request $request)
    {
        return view('exercise');  // Rendert je exercise.blade.php
    }
}