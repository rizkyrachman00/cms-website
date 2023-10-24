<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($language = ' en')
    {
        request()->session()->put('locale', $language);
        return redirect()->back();
    }
}
