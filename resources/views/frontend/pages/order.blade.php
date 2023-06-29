@extends('frontend.master')
@section('content')

<!-- Details Lightbox -->
<div class=" px-8 py-24 service ">
    <div class="text-center py-6">
        <h2>FEATURED SERVICES</h2>
        <p><b>Lets take a look our featured services</b></p>
        @if ($message = Session::get('success'))
        <div class=" w-6/12 mx-auto p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>

    <div class="sm:w-6/12 w-full mx-auto">
        <form method="post" action="">
            @csrf
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project
                Name</label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <i class="fab fa-shirtsinbulk"></i>
                </span>
                <input type="text" name="name" id="website-admin"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Project Name">
            </div>
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telegram
                Link</label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <i class="fab fa-telegram-plane"></i>
                </span>
                <input type="text" name="telegram" id="website-admin"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Telegram Link">
            </div>
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Twitter
                Link</label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <i class="fab fa-twitter"></i>
                </span>
                <input type="text" name="twitter" id="website-admin"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Twitter Link">
            </div>
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">WebSite
                url
                Link</label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <i class="fab fa-wordpress"></i>
                </span>
                <input type="text" name="website" id="website-admin"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Website URL">
            </div>
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">AMA Date
            </label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <i class="fab fa-wpforms"></i>
                </span>
                <input type="date" name="ama_date" id="website-admin"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Input Date">
            </div>
            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yout
                Budget
            </label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    USD
                </span>
                <input type="number" name="price" id="website-admin"
                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Budget $">
            </div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                message</label>
            <textarea id="message" name="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Your message..."></textarea>
            <button type="submit"
                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
</div>
@endsection
