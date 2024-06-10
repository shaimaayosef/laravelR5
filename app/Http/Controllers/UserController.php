<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();

        foreach ($users as $user) {
            echo "User: " . $user->name . "\nRoles:\n";
            foreach ($user->roles as $role) {
                echo " - " . $role->name . "\n";
            }
        }
    }
}
