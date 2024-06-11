<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'sk'])) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }
}
