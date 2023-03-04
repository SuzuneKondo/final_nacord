<?php

namespace App\Http\Controllers\Owner\Auth;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Validator;  //この1行だけ追加！

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('owner.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Owner::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'owner_user_id' => ['required', 'string', 'max:255'],
            'owner_tel' => ['required', 'string'],
            'owner_age' => ['required', 'integer'],
            'owner_birth' => ['required', 'string'],
            'owner_sex' => ['required', 'string'],
            'owner_area' => ['required', 'string'],
            'owner_address' => ['required', 'string'],
            'owner_job' => ['required', 'string'],
            'owner_photo_main' => ['required', 'string'],
            'owner_photo_id' => ['required', 'string'],
        ]);

        $user = Owner::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'owner_user_id' => $request->owner_user_id,
            'owner_tel' => $request->owner_tel,
            'owner_age' => $request->owner_age,
            'owner_birth' => $request->owner_birth,
            'owner_sex' => $request->owner_sex,
            'owner_area' => $request->owner_area,
            'owner_address' => $request->owner_address,
            'owner_job' => $request->owner_job,
            'owner_photo_main' => $request->owner_photo_main,
            'owner_photo_id' => $request->owner_photo_id,
        ]);

        event(new Registered($user));

        Auth::guard('owners')->login($user);

        return redirect(RouteServiceProvider::OWNER_HOME);
    }
}
