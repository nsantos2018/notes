<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        echo "logout";
    }

    public function loginSubmit(Request $request)
    {
        // Form Validation
        $request->validate(
            [
                'text_username' => 'required',
                'text_password' => 'required'
            ]
        );

        // Get User Input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        //dd($request);
        echo $request->input('text_username');
        echo '<br>';
        echo $request->input('text_password');
    }
}
