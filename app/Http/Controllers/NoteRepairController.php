<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteRepairController extends Controller
{
    public function index(){

        return view('noteRepair.index');

    }
}
