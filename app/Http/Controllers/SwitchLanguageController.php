<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class SwitchLanguageController extends Controller
{
    public function changeLocale($locale)
    {
        session()->put('locale', $locale);

        return redirect()->back();
    }

}
