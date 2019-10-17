<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index()
    {
        $user = Users::all();
        return dd($user);
    }
}
