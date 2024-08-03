<?php

namespace App\Http\Controllers\Auth;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class RegisteredClientController extends Controller
{
    public function create(): View
    {
        return view('auth.register-cliente');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        dd($request);
    }
}
