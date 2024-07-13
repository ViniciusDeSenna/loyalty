<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CartoesController extends Controller
{
    public function index() : View {

        return view('modules.cartoes.index');
    }
}
