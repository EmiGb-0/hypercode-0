<?php

namespace App\Http\Controllers\Extras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('extras.about');
    }
}
