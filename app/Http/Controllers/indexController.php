<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GuruController;
use Inertia\Inertia;

class indexController extends Controller
{
    public function home()
    {
        return Inertia::render ('Home');
    }
}