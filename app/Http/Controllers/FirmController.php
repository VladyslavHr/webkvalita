<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirmController extends Controller
{
    public function index()
    {
        return view('firm.index');
    }
}
