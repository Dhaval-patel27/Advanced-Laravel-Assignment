<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);

        $users = new User;

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->status = $request->status;
        $users->save();
        return redirect(route('userlogin'))->with('msg', 'New Data Registered successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function log()
    {
        return view('user_login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            return redirect(route('myadmin'))->with('success_msg', 'login Successfully.');
        } else {
            return redirect(route('userlogin'))->with('error_msg', 'wrong email or password..!!');
        }
    }

    public function admin()
    {
        // dd(Auth::user());
        if (Auth::check() && Auth::user()->status == 'Admin') {
            return view('admin');
        } elseif (Auth::check() && Auth::user()->status == 'Normal') {
            return redirect(route('normal'));
        } else {
            return redirect(route('userlogin'));
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect(route('userlogin'));
    }
}