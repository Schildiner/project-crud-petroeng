<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("users", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = User::create([
            "name"=> $request->input(   "name")
        ]);

        if ($created) {
            return redirect()->route('users.index');
        }

        return redirect()->back()->with("message","Erro");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // dd($user->name);
        return view("user_show", ["user" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // dd($user);
        return view("user_edit", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = User::where('id', $id)->update($request->except(['_method', '_token']));

        if ($updated) {
            return redirect()->route('users.index');
        }

        return redirect()->back()->with("message","Erro Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();

        return redirect()->route('users.index');
    }
}
