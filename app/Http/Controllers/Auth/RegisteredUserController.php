<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Verifikator;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register', ['roles' => Role::get()]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $slug = $this->uniqueSlug($request->name);

        User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'username' => $slug,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->role_id == 2) {
            $data = Verifikator::create([
                'user_id' => $request->role_id,
                'name' => $request->name,
                'username' => $slug
            ]);

            $data->cities()->attach($request->city_id);
        }

        // event(new Registered($user));

        return redirect()->route('users.index');
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = User::where('username', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
