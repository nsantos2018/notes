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
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            // Error Messages
            [
                'text_username.required' => 'O usuário é obrigatório',
                'text_username.email' => 'O usuário deve ser um e-mail válido',
                'text_password.required' => 'O password é obrigatório',
                'text_password.min' => 'O password deve ter ao menos :min caracteres',
                'text_password.max' => 'O password deve ter no máximo :max caracteres'


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
