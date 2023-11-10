<?php

// app/Http/Controllers/MainDashboardController.php

namespace App\Http\Controllers;

class MainDashboardController extends Controller
{
    public function index()
    {
        return view('main_dashboard');
    }
}
