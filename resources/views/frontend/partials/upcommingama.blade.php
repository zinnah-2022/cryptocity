<div class="slider-1 py-32 bg-gray">
    <div class="container px-4 sm:px-8">
        <div class="mb-12 text-center">
            <h2 class="lg:max-w-xl lg:mx-auto">OUR UPCOMING AMA'S!</h2>
            <p>Be the first to hear about the latest trends in management, leadership, project management and so
                much more</p>
        </div>


        <!-- Card Slider -->
        <div class="slider-container">
            <div class="swiper-container card-slider">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    @foreach ($AmaImage as $img )
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="car" src="{{ asset('images/'. $img->image) }}" width="100%" height="100%"
                                alt="alternative" />
                        </div>
                    </div>
                    @endforeach
                    <!-- end of swiper-slide -->
                    <!-- end of slide -->
                </div> <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->

            </div> <!-- end of swiper-container -->
        </div> <!-- end of slider-container -->
        <!-- end of card slider -->

    </div> <!-- end of container -->
</div>
