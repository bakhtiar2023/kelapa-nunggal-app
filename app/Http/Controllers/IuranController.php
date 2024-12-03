<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IuranController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function iuran(Request $request): View
    {
        return view('iuran.iuran');
    }
    public function catatIuran(Request $request): View
    {
        return view('iuran.catat');
    }
}
