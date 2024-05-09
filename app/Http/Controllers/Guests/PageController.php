<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = movie::orderByDesc('id')->get();
        return view('guest.welcome', compact('movies'));
    }
}
