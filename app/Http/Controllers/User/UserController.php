<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function loggedin()
    {
        if (Auth::guest())
        {
            return redirect('login');
        }
        else
        {
            return view('index');
        }
    }
}
