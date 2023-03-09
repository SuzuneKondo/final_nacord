<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('オーナーのDashboard') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("ログインしています") }}
                </div>
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="仲人の画像" src="https://dummyimage.com/720x600">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">仲人の名前
              <br class="hidden lg:inline-block">こんちゃん
            </h1>
            <p class="mb-8 leading-relaxed">それ以外の情報諸々</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">編集する</button>
              {{-- <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> --}}
            </div>
          </div>
        </div>
    </section>

    <section class="text-gray-800 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="bg-white lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
            <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font">ユーザーの登録画面に飛ぶ</h1>
            <button class="flex-shrink-0 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg mt-10 sm:mt-0"  onclick="location.href='{{ route('user.register_ownerSide') }}' ">登録する</button>
            </div>
        </div>
    </section>

</x-app-layout>
