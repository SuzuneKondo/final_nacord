<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'user_user_id' => ['required', 'string'],
            // 'user_tel' => ['required', 'string'],
            // 'user_age' => ['required', 'integer'],
            'user_birth' => ['required', 'string'],
            // 'user_sex' => ['required', 'string'],
            // 'user_area' => ['required', 'string'],
            'user_address' => ['required', 'string'],
            // 'user_job' => ['required', 'string'],
            // 'friend' => ['required', 'string'],
            // 'character_p' => ['required', 'text'],
            // 'character_m' => ['required', 'text'],
            // 'lt_short' => ['required', 'text'],
            // 'lt' => ['required', 'text'],
            // 'hobby' => ['required', 'text'],//バリデーションにtextは存在していない（設定次第？
            'meeting' => ['required', 'string'],
            // 'user_photo_main' => ['required', 'string'],
            'user_photo_sub' => ['required', 'string'],
            'user_photo_id' => ['required', 'string'],
            // 'status' => ['required', 'string'],//このバリデーションに入力すると、項目を入力しない限り登録できない→ここに入力しなければ必須事項にならない（裏のみにできる）≠NULL設定
        ]);

        $user = User::create([
            // 'name' => $request->name,
            // 'email' => $request->email,
            // 'password' => Hash::make($request->password),
            // 'user_user_id' => $request->user_user_id,
            // 'user_tel' => $request->user_tel,
            // 'user_age' => $request->user_age,
            'user_birth' => $request->user_birth,
            // 'user_sex' => $request->user_sex,
            // 'user_area' => $request->user_area,
            'user_address' => $request->user_address,
            // 'user_job' => $request->user_job,
            // 'friend' => $request->friend,
            // 'character_p' => $request->character_p,
            // 'character_m' => $request->character_m,
            // 'lt_short' => $request->lt_short,
            // 'lt' => $request->lt,
            // 'hobby' => $request->hobby,
            'meeting' => $request->meeting,
            // 'user_photo_main' => $request->user_photo_main,
            'user_photo_sub' => $request->user_photo_sub,
            'user_photo_id' => $request->user_photo_id,
            // 'status' => $request->status,
        ]);

        event(new Registered($user));

        Auth::guard('users')->login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
