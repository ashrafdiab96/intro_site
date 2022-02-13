<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Session;

class LanguageController extends Controller
{
    // CHANGE LOCALE
    public function languages($lang)
    {
        Session()->put('front-locale', $lang);
        app()->setLocale($lang);
        // REDIRECT TO
        return redirect()->back();
    }
}
