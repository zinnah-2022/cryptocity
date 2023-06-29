<div class="container py-24 px-6 mx-auto ">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center">
        <h2 class="text-3xl font-bold mb-32">Meet the <u class="text-blue-600">team</u></h2>

        <div data-aos="flip-up" data-aos-duration="1200" class="grid gap-x-6 lg:gap-x-12 md:grid-cols-3">
            @foreach ($teams as $data )
            <div class="mb-24 md:mb-0">
                <div class="rounded-lg shadow-lg h-full block bg-white">
                    <div class="flex justify-center">
                        <div class="flex justify-center" style="margin-top: -75px">
                            <img src="{{ asset('images/'.$data->image) }}" class="rounded-full mx-auto shadow-lg"
                                alt="" style="width: 150px" />
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="text-lg font-bold mb-4">{{ $data->name }}</h5>
                        <p class="mb-6">{{ $data->designation }}</p>
                        <ul class="list-inside flex mx-auto justify-center">
                            <a href="{{ $data->twitter }}" class="px-2 hover:scale-125 transform duration-150">
                                <span class=" text-blue-600 text-lg">
                                    <i class="fab fa-twitter"></i>
                                </span>
                            </a>
                            <a href="{{ $data->telegram }}" class="px-2 hover:scale-125 transform duration-150">
                                <span class=" text-blue-600">
                                    <i class="fab fa-telegram"></i>
                                </span>
                            </a>

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <!-- Section: Design Block -->

</div>
