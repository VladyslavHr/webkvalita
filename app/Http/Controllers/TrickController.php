<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrickController extends Controller
{
    public function index() {
        return view('tricks.index');
    }
}
