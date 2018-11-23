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

    function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            /* 'email' => 'required|email|unique:users,email,'.$user->id, */
            //'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ''
         ], [
                'name.required' => 'El campo nombre es obligatorio',
                /* 'password.required' => 'La contraseña es necesaria ñero',
                'email.required' => 'Aja y el email lo saco de donde?',
                'email.unique' => 'Este email ya exite mi pana'  */
        ]);

        /* if($data['password'] != null)
        {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        } */

        $user->update($data);

        return redirect()->route('users.index');
    }
}
