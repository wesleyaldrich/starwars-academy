<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeLanguageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChangeLanguageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ChangeLanguageRequest $request)
    {
        Session::put('lang', $request->lang);

        return redirect()->back();
    }
}
