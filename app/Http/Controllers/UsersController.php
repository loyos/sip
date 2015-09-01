<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Requesta; // native class to handle requests
//use Request; // This is a Facade and can be removed because we are using the CreateUserRequest object $request
//use App\Http\Requests\CreateUserRequest; // class created by me, useful when you have a lot of validations!
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::latest()->get();
        return view ('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }


    public function store(Requesta $request)
    {
        $this->validate($request, ['name' => 'required|min:3']);
        User::create($request->all());

        \Session::flash('flash_message', 'Your user has been created');

        return redirect('users');
    }

    public function show($id)
    {
        $user  = User::findOrFail($id);

        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }


    public function update(Requesta $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('users');
    }

    public function destroy($id)
    {
        //
    }
}
