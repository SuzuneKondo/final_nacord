<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('オーナーのDashboard') }}
        </h2>
    </x-slot>

    マッチング相手の詳細画面
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="マッチング相手の画像" src="https://dummyimage.com/720x600">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">マッチング相手の名前
                    <br class="hidden lg:inline-block">しろたん
                </h1>
                <p class="mb-8 leading-relaxed">それ以外の情報諸々</p>
                <div class="flex justify-center">
                    <button class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">編集する</button>
                    {{-- <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> --}}
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
