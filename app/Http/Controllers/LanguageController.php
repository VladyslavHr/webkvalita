<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        if (in_array($locale, ['en', 'sk'])) {
            Session::put('locale', $locale);
        }
        return Redirect::back();
    }
}
