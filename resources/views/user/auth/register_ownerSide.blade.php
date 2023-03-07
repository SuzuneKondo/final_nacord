<x-guest-layout>
    <form method="POST" action="{{ route('user.register_ownerSide') }}">
        @csrf

        仲人がユーザーの情報を登録する画面
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('お名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
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

        <!-- user_user_id -->
        <div class="mt-4">
            <x-input-label for="user_user_id" :value="__('ユーザーID')" />
            <x-text-input id="user_user_id" class="block mt-1 w-full" type="user_user_id" name="user_user_id" :value="old('user_user_id')" required autocomplete="user_user_id" />
            <x-input-error :messages="$errors->get('user_user_id')" class="mt-2" />
        </div>
        <!-- user_tel -->
        <div class="mt-4">
            <x-input-label for="user_tel" :value="__('電話番号')" />
            <x-text-input id="user_tel" class="block mt-1 w-full" type="user_tel" name="user_tel" :value="old('user_tel')" required autocomplete="user_tel" />
            <x-input-error :messages="$errors->get('user_tel')" class="mt-2" />
        </div>
        <!-- user_age -->
        <div class="mt-4">
            <x-input-label for="user_age" :value="__('年齢')" />
            <x-text-input id="user_age" class="block mt-1 w-full" type="user_age" name="user_age" :value="old('user_age')" required autocomplete="user_age" />
            <x-input-error :messages="$errors->get('user_age')" class="mt-2" />
        </div>
        {{-- <!-- user_birth -->
        <div class="mt-4">
            <x-input-label for="user_birth" :value="__('生年月日')" />
            <x-text-input id="user_birth" class="block mt-1 w-full" type="user_birth" name="user_birth" :value="old('user_birth')" required autocomplete="user_birth" />
            <x-input-error :messages="$errors->get('user_birth')" class="mt-2" />
        </div> --}}
        <!-- user_sex -->
        <div class="mt-4">
            <x-input-label for="user_sex" :value="__('性別')" />
            <x-text-input id="user_sex" class="block mt-1 w-full" type="user_sex" name="user_sex" :value="old('user_sex')" required autocomplete="user_sex" />
            <x-input-error :messages="$errors->get('user_sex')" class="mt-2" />
        </div>
        <!-- user_area -->
        <div class="mt-4">
            <x-input-label for="user_area" :value="__('居住地')" />
            <x-text-input id="user_area" class="block mt-1 w-full" type="user_area" name="user_area" :value="old('user_area')" required autocomplete="user_area" />
            <x-input-error :messages="$errors->get('user_area')" class="mt-2" />
        </div>
        {{-- <!-- user_address -->
        <div class="mt-4">
            <x-input-label for="user_address" :value="__('住所')" />
            <x-text-input id="user_address" class="block mt-1 w-full" type="user_address" name="user_address" :value="old('user_address')" required autocomplete="user_address" />
            <x-input-error :messages="$errors->get('user_address')" class="mt-2" />
        </div> --}}
        <!-- user_job -->
        <div class="mt-4">
            <x-input-label for="user_job" :value="__('仕事')" />
            <x-text-input id="user_job" class="block mt-1 w-full" type="user_job" name="user_job" :value="old('user_job')" required autocomplete="user_job" />
            <x-input-error :messages="$errors->get('user_job')" class="mt-2" />
        </div>
        <!-- friend -->
        <div class="mt-4">
            <x-input-label for="friend" :value="__('仲人との関係')" />
            <x-text-input id="friend" class="block mt-1 w-full" type="friend" name="friend" :value="old('friend')" required autocomplete="friend" />
            <x-input-error :messages="$errors->get('friend')" class="mt-2" />
        </div>
        <!-- character_p -->
        <div class="mt-4">
            <x-input-label for="character_p" :value="__('性格プラス面')" />
            <x-text-input id="character_p" class="block mt-1 w-full" type="character_p" name="character_p" :value="old('character_p')" required autocomplete="character_p" />
            <x-input-error :messages="$errors->get('character_p')" class="mt-2" />
        </div>
        <!-- character_m -->
        <div class="mt-4">
            <x-input-label for="character_m" :value="__('性格マイナス面')" />
            <x-text-input id="character_m" class="block mt-1 w-full" type="character_m" name="character_m" :value="old('character_m')" required autocomplete="character_m" />
            <x-input-error :messages="$errors->get('character_m')" class="mt-2" />
        </div>
        <!-- lt_short -->
        <div class="mt-4">
            <x-input-label for="lt_short" :value="__('一言紹介文')" />
            <x-text-input id="lt_short" class="block mt-1 w-full" type="lt_short" name="lt_short" :value="old('lt_short')" required autocomplete="lt_short" />
            <x-input-error :messages="$errors->get('lt_short')" class="mt-2" />
        </div>
        {{-- <!-- lt -->
        <div class="mt-4">
            <x-input-label for="lt" :value="__('紹介文')" />
            <x-text-input id="lt" class="block mt-1 w-full" type="lt" name="lt" :value="old('lt')" required autocomplete="lt" />
            <x-input-error :messages="$errors->get('lt')" class="mt-2" />
        </div>
        <!-- hobby -->
        <div class="mt-4">
            <x-input-label for="hobby" :value="__('趣味')" />
            <x-text-input id="hobby" class="block mt-1 w-full" type="hobby" name="hobby" :value="old('hobby')" required autocomplete="hobby" />
            <x-input-error :messages="$errors->get('hobby')" class="mt-2" />
        </div>
        <!-- meeting -->
        <div class="mt-4">
            <x-input-label for="meeting" :value="__('初対面の方法')" />
            <x-text-input id="meeting" class="block mt-1 w-full" type="meeting" name="meeting" :value="old('meeting')" required autocomplete="meeting" />
            <x-input-error :messages="$errors->get('meeting')" class="mt-2" />
        </div> --}}
        <!-- user_photo_main -->
        <div class="mt-4">
            <x-input-label for="user_photo_main" :value="__('顔写真')" />
            <x-text-input id="user_photo_main" class="block mt-1 w-full" type="user_photo_main" name="user_photo_main" :value="old('user_photo_main')" required autocomplete="user_photo_main" />
            <x-input-error :messages="$errors->get('user_photo_main')" class="mt-2" />
        </div>
        {{-- <!-- user_photo_sub -->
        <div class="mt-4">
            <x-input-label for="user_photo_sub" :value="__('サブ写真')" />
            <x-text-input id="user_photo_sub" class="block mt-1 w-full" type="user_photo_sub" name="user_photo_sub" :value="old('user_photo_sub')" required autocomplete="user_photo_sub" />
            <x-input-error :messages="$errors->get('user_photo_sub')" class="mt-2" />
        </div>
        <!-- user_photo_id -->
        <div class="mt-4">
            <x-input-label for="user_photo_id" :value="__('証明写真')" />
            <x-text-input id="user_photo_id" class="block mt-1 w-full" type="user_photo_id" name="user_photo_id" :value="old('user_photo_id')" required autocomplete="user_photo_id" />
            <x-input-error :messages="$errors->get('user_photo_id')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('ユーザーにリンクを送る') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
