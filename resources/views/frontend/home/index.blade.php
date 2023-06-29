@extends('frontend.master')
@section('content')
<!-- Header -->
@include('frontend/partials/headerpart')
<!-- end of header -->

<!-- Details 2 -->
<div class="">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div data-aos="fade-right" data-aos-duration="1000" class="lg:col-span-7">
            <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="{{ asset('frondend') }}/images/details-2.png" alt="alternative" />
            </div>
        </div> <!-- end of col -->
        <div data-aos="fade-left" data-aos-duration="1000" class="lg:col-span-5" id="features">
            <div class="xl:mt-12">
                <div class="mb-6">
                    <h2>ABOUT US !</h2>
                    <span>We are the ventures to promote you</span>
                </div>

                <div class="pb-4">
                    <p class="text-justify"><b class="text-bold">Geek Chat Community</b> is a blockchain social
                        media community for
                        investors, traders, and
                        crypto oriented people who are
                        interested to learn more about blockchain and cryptocurrency in general.Geek Chat
                        Community count around 50k+ social
                        media users in telegram, and twitter.

                        Geek Chat Community helps Investors in education and inspiration.</p>
                </div>

            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</div>
<!-- end of details 2 -->
<!-- Slider -->
@include('frontend/partials/upcommingama')
<!-- end of slider-1 -->

<!-- Features -->
<div id="features" class="cards-1 mt-16">
    <div  class="container text-center">
        <h2 class="text-3xl font-bold mb-8">Why Choose! <u class="text-blue-600">Us</u></h2>
    </div> <!-- end of container -->
    <div class="container px-2 sm:px-2 xl:px-2 ">
        <!-- Card -->
        <div data-aos="fade-right" data-aos-duration="1000" class="card border border-gray-200 shadow-md">
            <div class="card-image">
                <img src="{{ asset('frondend') }}/images/features-icon-1.svg" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title">Efficient Marketing</h5>

            </div>
        </div>

        <!-- Card -->
        <div data-aos="fade-down" data-aos-duration="1000" class="card border border-gray-200 shadow-md">
            <div class="card-image">
                <img src="{{ asset('frondend') }}/images/features-icon-2.svg" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title">Efficient Team</h5>
            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div data-aos="fade-left" data-aos-duration="1000" class="card border border-gray-200 shadow-md">
            <div class="card-image">
                <img src="{{ asset('frondend') }}/images/money.svg" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title">Investors</h5>

            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div data-aos="fade-right" data-aos-duration="1000" class="card border border-gray-200 shadow-md">
            <div class="card-image">
                <img src="{{ asset('frondend') }}/images/features-icon-4.svg" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title">Project Counselling</h5>

            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div data-aos="fade-up" data-aos-duration="1000" class="card border border-gray-200 shadow-md">
            <div class="card-image">
                <img src="{{ asset('frondend') }}/images/group.svg" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title">Large Community</h5>

            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div data-aos="fade-left" data-aos-duration="1000" class="card border border-gray-200 shadow-md">
            <div class="card-image">
                <img src="{{ asset('frondend') }}/images/support.svg" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title">Community Support</h5>

            </div>
        </div>
        <!-- end of card -->

    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of features -->


<!-- Details Lightbox -->
<div class=" px-8 py-24 service ">
    <div class="text-center py-6">
        <h2>FEATURED SERVICES</h2>
        <p><b>Lets take a look our featured services</b></p>
    </div>
    <div class="flex flex-col md:flex-row gap-8 w-10/12 mx-auto">
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div  class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-1.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl  font-bold text-gray-900 dark:text-white">AirDrop</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            </div>
        </div>
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div  class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-2.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl  font-bold text-gray-900 dark:text-white">AMA Promotion</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            </div>
        </div>
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"
            class="ms:w-4/6 w-full  max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 sm:hover:scale-90 sm:transform sm:duration-200">
            <div  class="flex flex-col items-center  py-16">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{ asset('frondend') }}/images/service-3.png"
                    alt="Bonnie image">
                <h5 class="mb-1 text-2xl text-gray-900 font-bold dark:text-white">Pin Post</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            </div>
        </div>

    </div>
    <div class="text-center py-1 mt-4">
        <a class="btn-solid-lg" href="{{ url('/service') }}"><i class="fab fa-apple"></i>See All Services
        </a>
    </div>
    <div class="container mx-auto w-10/12 mt-6">

        <p> Note: We can make custom services as your need! Contact: <a href="https://t.me/Nathan_Geek"><b>NATHAN(CEO
                    &
                    FOUNDER)</b></a> for custom
            services.</p>

    </div>

</div>
<!-- Statistics -->
<div class="counter">
    <div class="container px-4 sm:px-8">
        <div class="mb-24">
            <h2 class="text-3xl font-bold ">OUR BEST <b class="text-blue-600">COMMUNITY</b></h2>
            <p>"The greatness of a community is most accurately measured by the compassionate actions of its
                members."
            </p>
        </div>

        <!-- Counter -->
        <div id="counter">
            <div class="cell">
                <span class="counter-value number-count" data-count="1.5">0</span>
                <span class="counter-value number-count"> M+</span>
                <p class="counter-info">Social Media Users</p>
            </div>
            <div class="cell">
                <span class="counter-value number-count" data-count="16">0</span>
                <span class="counter-value number-count"> K+</span>
                <p class="counter-info">Private Investors</p>
            </div>
            <div class="cell">
                <span class="counter-value number-count" data-count="350">0</span>
                <span class="counter-value number-count"> +</span>
                <p class="counter-info">Projects Done</p>
            </div>

        </div>
        <!-- end of counter -->
        <div>
            <b>Note:</b><i> Crypto City Community Support has four more region supported community</i>
        </div>
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of statistics -->


<!-- Testimonials -->
@include('frontend/partials/projectdoneama')
<!-- end of testimonials -->


<!-- end of conclusion  team -->
@include('frontend/partials/team')
<!-- Container for demo purpose -->
@endsection