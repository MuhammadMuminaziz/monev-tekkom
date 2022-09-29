<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', ['users' => User::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', ['roles' => Role::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user,
            'roles' => Role::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::find($request->id);
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|max:255|unique:users,email,' . $request->id,
            'role_id' => 'required',
            'password' => 'confirmed'
        ]);

        if ($request->password) {
            $password = Hash::make($request->password);
        } else {
            $password = $user->password;
        }

        $data['username'] = $this->uniqueSlug($request->name);
        $data['password'] = $password;

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'Account has been updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'The account has been deleted..');
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = User::where('username', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
