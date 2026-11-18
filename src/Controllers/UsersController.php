<?php

namespace App\Controllers;


use App\Models\User;

class UsersController
{
    public function index() {
        $users = User::all();
        $title = 'Users';
        view('users/index', compact('title', 'users'));
    }

    public function view() {
        $user = User::find($_GET['id']);
        if($user) {
            view('users/view', compact('user'));
        } else {
            echo 404;
        }
    }

    public function edit() {
        $user = User::find($_GET['id']);
        if($user) {
            view('users/edit', compact('user'));
        } else {
            echo 404;
        }
    }

    public function update() {
        $user = User::find($_GET['id']);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->save();
        redirect('/admin/users');
    }

    public function delete() {
        $user = User::find($_GET['id']);
        if($user) {
            $user->delete();
            redirect('/admin/users');
        } else {
            echo 404;
        }
    }
}