<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('オーナーのDashboard') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">マッチング相手を探す</h1>
          {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p> --}}
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/200x200">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">名前</h2>
                <h3 class="text-gray-500 mb-3">居住地</h3>
                <p class="mb-4">詳細</p>
                <button class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg" onclick="location.href='{{ route('owner.users-detail') }}' ">詳細を見る</button>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/201x201">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">名前</h2>
                <h3 class="text-gray-500 mb-3">居住地</h3>
                <p class="mb-4">詳細</p>
                <button class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg" onclick="location.href='{{ route('owner.users-detail') }}' ">詳細を見る</button>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/204x204">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">名前</h2>
                <h3 class="text-gray-500 mb-3">居住地</h3>
                <p class="mb-4">詳細</p>
                <button class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg" onclick="location.href='{{ route('owner.users-detail') }}' ">詳細を見る</button>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/206x206">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">名前</h2>
                <h3 class="text-gray-500 mb-3">居住地</h3>
                <p class="mb-4">詳細</p>
                <button class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg" onclick="location.href='{{ route('owner.users-detail') }}' ">詳細を見る</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

</x-app-layout>
