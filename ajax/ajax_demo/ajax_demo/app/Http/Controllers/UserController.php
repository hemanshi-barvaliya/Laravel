<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display the form (index method)
    public function index()
    {
        return view("welcome");  // Returns the form page
    }

    // Handle the AJAX request
    public function ajax(Request $request)
    {
        // Correct way to access the form data
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // Prepare the data array
        $data = compact('name', 'email', 'password');

        // Return the view with the data (Ajax response)
        return view('ajax', compact('data'));  // This view will render the table row
    }
}

