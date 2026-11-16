<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function loginForm() {}

    public function login() {}

    public function registerForm()
    {
        view('auth/register');
    }

    public function register()
    {
        $user = User::where('email', $_POST['email']);
        if ($user || $_POST['password'] !== $_POST['password_confirm']) {
            return redirect('/register');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        redirect('/login');
    }

    public function logout() {}
}