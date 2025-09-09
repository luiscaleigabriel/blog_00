<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashController extends Controller
{
    public function index(): View
    {
        return view('dashboard');
    }
}
