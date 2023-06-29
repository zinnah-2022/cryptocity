<nav class="navbar fixed-top">
    <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

        <!-- Image Logo -->
        <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
            href="{{ route('mainpage') }}">
            <img src="{{ asset('frondend') }}/images/logo.gif" alt="alternative" class="h-12" />
        </a>

        <button
            class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
            type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
            <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                <li>
                    <a class="nav-link page-scroll" href="{{ route('mainpage') }}">HOME <span
                            class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('ama') }}">AMA's</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('recap') }}">AMA RECAPS</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{ route('order') }}">ORDER FOR AMA</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#features">ABOUT US</a>
                </li>
            </ul>
        
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->