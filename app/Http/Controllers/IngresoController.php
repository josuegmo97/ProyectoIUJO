<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DatesRequest;
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

    function store(DatesRequest $request)
    {
        User::create($request->all());

        return redirect()->route('user.index');
    }

    function edit($id)
    {
        $users = User::find($id);

        return view("user.edit" , ['users' => $users]);
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
