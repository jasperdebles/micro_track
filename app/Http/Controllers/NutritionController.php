<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function nutrition(Request $request)
    {
        return view('nutrition');  // Rendert je nutrition.blade.php
    }
}