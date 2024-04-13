<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return redirect(route('dashboard'));
        } else {
            return redirect(route('login'));
        }
    }
}
