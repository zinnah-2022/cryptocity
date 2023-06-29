@extends('frontend.master')
@section('content')

<!-- Details Lightbox -->
<div class=" px-8 py-24 service ">
    <div class="text-center py-6">
        <h2>FEATURED SERVICES</h2>
        <p><b>Lets take a look our featured services</b></p>
    </div>
    <div class="grid grid-cols-3 md:flex-row gap-8 w-10/12 mx-auto">
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-1.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl  font-bold text-gray-900 dark:text-white">AirDrop</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            </div>
        </div>
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-2.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl  font-bold text-gray-900 dark:text-white">AMA Promotion</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geek Chat</span>
            </div>
        </div>
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-3.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl text-gray-900 font-bold dark:text-white">Pin Post</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geek Chat</span>
            </div>
        </div>
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-1.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl text-gray-900 font-bold dark:text-white">Giveway</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geek Chat</span>
            </div>
        </div>
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-3.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl text-gray-900 font-bold dark:text-white">Partnership</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geek Chat</span>
            </div>
        </div>
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-2.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl text-gray-900 font-bold dark:text-white">IDO</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geek Chat</span>
            </div>
        </div>
        <div
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-2.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl text-gray-900 font-bold dark:text-white">Shilling </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geek Chat</span>
            </div>
        </div>


    </div>
</div>
@endsection