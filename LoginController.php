<?php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        // Show login form
        return view('login');
    }

    public function store(Request $request)
    {
        // Handle login logic
        if ($request->isMethod('post')) {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "registration";

            try {
                $email = $request->input('email');
                $password = $request->input('password');

                // Using the query builder instead of PDO
                $user = DB::table('users')
                    ->where('email', $email)
                    ->where('password', $password)
                    ->first();

                if ($user) {
                    // Redirect to main dashboard
                    return redirect()->route('main.dashboard');
                } else {
                    // Display error message
                    return back()->withErrors(['login' => 'Login failed. Please check your credentials.']);
                }
            } catch (\Exception $e) {
                // Handle exceptions
                return back()->withErrors(['login' => 'Error: ' . $e->getMessage()]);
            }
        } else {
            // Invalid request method
            return back()->withErrors(['login' => 'Invalid request method.']);
        }
    }
}
