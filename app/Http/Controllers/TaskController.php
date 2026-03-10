<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function tasks(Request $request)
    {
        return view('tasks');  // Rendert je tasks.blade.php
    }
}
