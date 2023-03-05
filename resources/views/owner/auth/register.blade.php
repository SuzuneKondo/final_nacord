<x-guest-layout>
    仲人ログイン用
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('owner.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- パスワード -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('owner.password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('owner.password.request') }}">
                    {{ __('パスワードを忘れた方はこちら') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('ログイン') }}
            </x-primary-button>
        </div>
    </form>


    <!-- 新規登録用 -->
    <form method="POST" action="{{ route('owner.register') }}">
        @csrf

        新規登録用
        <!-- name -->
        <div>
            <x-input-label for="name" :value="__('お名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード再入力')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- owner_user_id -->
        <div class="mt-4">
            <x-input-label for="owner_user_id" :value="__('ユーザーID')" />
            <x-text-input id="owner_user_id" class="block mt-1 w-full" type="owner_user_id" name="owner_user_id" :value="old('owner_user_id')" required autocomplete="owner_user_id" />
            <x-input-error :messages="$errors->get('owner_user_id')" class="mt-2" />
        </div>
        <!-- owner_tel -->
        <div class="mt-4">
            <x-input-label for="owner_tel" :value="__('電話番号')" />
            <x-text-input id="owner_tel" class="block mt-1 w-full" type="owner_tel" name="owner_tel" :value="old('owner_tel')" required autocomplete="owner_tel" />
            <x-input-error :messages="$errors->get('owner_tel')" class="mt-2" />
        </div>
        <!-- owner_age -->
        <div class="mt-4">
            <x-input-label for="owner_age" :value="__('年齢')" />
            <x-text-input id="owner_age" class="block mt-1 w-full" type="owner_age" name="owner_age" :value="old('owner_age')" required autocomplete="owner_age" />
            <x-input-error :messages="$errors->get('owner_age')" class="mt-2" />
        </div>
        <!-- owner_birth -->
        <div class="mt-4">
            <x-input-label for="owner_birth" :value="__('生年月日')" />
            <x-text-input id="owner_birth" class="block mt-1 w-full" type="owner_birth" name="owner_birth" :value="old('owner_birth')" required autocomplete="owner_birth" />
            <x-input-error :messages="$errors->get('owner_birth')" class="mt-2" />
        </div>
        <!-- owner_sex -->
        <div class="mt-4">
            <x-input-label for="owner_sex" :value="__('性別')" />
            <x-text-input id="owner_sex" class="block mt-1 w-full" type="owner_sex" name="owner_sex" :value="old('owner_sex')" required autocomplete="owner_sex" />
            <x-input-error :messages="$errors->get('owner_sex')" class="mt-2" />
        </div>
        <!-- owner_area -->
        <div class="mt-4">
            <x-input-label for="owner_area" :value="__('居住地')" />
            <x-text-input id="owner_area" class="block mt-1 w-full" type="owner_area" name="owner_area" :value="old('owner_area')" required autocomplete="owner_area" />
            <x-input-error :messages="$errors->get('owner_area')" class="mt-2" />
        </div>
        <!-- owner_address -->
        <div class="mt-4">
            <x-input-label for="owner_address" :value="__('住所')" />
            <x-text-input id="owner_address" class="block mt-1 w-full" type="owner_address" name="owner_address" :value="old('owner_address')" required autocomplete="owner_address" />
            <x-input-error :messages="$errors->get('owner_address')" class="mt-2" />
        </div>
        <!-- owner_job -->
        <div class="mt-4">
            <x-input-label for="owner_job" :value="__('仕事')" />
            <x-text-input id="owner_job" class="block mt-1 w-full" type="owner_job" name="owner_job" :value="old('owner_job')" required autocomplete="owner_job" />
            <x-input-error :messages="$errors->get('owner_job')" class="mt-2" />
        </div>
        <!-- owner_photo_main -->
        <div class="mt-4">
            <x-input-label for="owner_photo_main" :value="__('顔写真')" />
            <x-text-input id="owner_photo_main" class="block mt-1 w-full" type="owner_photo_main" name="owner_photo_main" :value="old('owner_photo_main')" required autocomplete="owner_photo_main" />
            <x-input-error :messages="$errors->get('owner_photo_main')" class="mt-2" />
        </div>
        <!-- owner_photo_id -->
        <div class="mt-4">
            <x-input-label for="owner_photo_id" :value="__('証明写真')" />
            <x-text-input id="owner_photo_id" class="block mt-1 w-full" type="owner_photo_id" name="owner_photo_id" :value="old('owner_photo_id')" required autocomplete="owner_photo_id" />
            <x-input-error :messages="$errors->get('owner_photo_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('owner.login') }}">
                {{ __('登録済みの方はこちら') }}
            </a> --}}

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
