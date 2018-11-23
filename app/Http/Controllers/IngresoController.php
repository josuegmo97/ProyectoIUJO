<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IngresoController extends Controller
{
    function index()
    {
        $users = User::all();

        return view('user.index' , ['users' => $users]);
    }

    function create()
    {
        return view('user.create');
    }

    function edit()
    {
        return view("user.edit");
    }
}
