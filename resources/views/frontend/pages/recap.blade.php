@extends('frontend.master')
@section('content')

<!-- Details Lightbox -->
<div class=" px-8 py-24 service ">
    <div class="text-center py-6">
        <h2>AMA Recaps!</h2>
        <p><b>Lets take a look our featured AMA Recaps</b></p>
    </div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <!--start here-->
                @foreach ($recaps as $data )
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="w-full">
                            <div class="w-full flex p-2">
                                <div class="p-2 ">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/Tcc_img%2Flogo.png?alt=media&token=5e5738c4-8ffd-44f9-b47a-57d07e0b7939"
                                        alt="author" class="w-10 h-10 rounded-full overflow-hidden" />
                                </div>
                                <div class="pl-2 pt-2 ">
                                    <p class="font-bold">Crypto City</p>
                                    <p class="text-xs">{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                            src="{{ asset('images/'. $data->image) }}" alt="blog cover" />

                        <div class="p-4">
                            <h2 class="tracking-widest text-xs title-font font-bold text-green-400 mb-1 uppercase ">Our
                                AMA Recaps</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $data->title }}</h1>
                            <div class="flex items-center flex-wrap ">
                                <a href="{{route('recap_show',$data->slug)}}" class="text-green-800  md:mb-2 lg:mb-0">
                                    <p class="inline-flex items-center">Read Blog
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!--End here-->
            </div>
        </div>
    </section>
    @endsection
