<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index() {
        $title = 'How to learn Laravel';
        return view('products.index', compact('title'));
    }
}
