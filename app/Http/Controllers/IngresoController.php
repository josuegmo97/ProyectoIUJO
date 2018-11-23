<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DatesRequest;
use App\User;

class IngresoController extends Controller
{
    function index()
    {
        $users = User::orderBy('id','desc')->paginate(8);

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

        if($users){
            return view("user.edit" , ['users' => $users]);
        }
        else{
            return response('Este usuario no existe' , 404);
        }

    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }

    function update(User $user)
    {
        $data = request()->validate();

        $user->update($data);

        //pilas esto
        return redirect()->route('users.index');
    }

    function definitive()
    {
        $users = User::orderBy('id' , 'asc')
        ->where('copyTitle' , 'Si')
        ->where('copyOpsu' , 'Si')
        ->get();

        return view('user.definitive' , ['users' => $users]);
    }
}
