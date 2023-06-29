@extends('frontend.master')
@section('content')

<!-- Details Lightbox -->
<div class=" px-8 py-8 service ">
    <header class="ex-header bg-gray">
        <div class="container px-4 sm:px-8 xl:px-4">
            <h3 class="xl:ml-24">{{ $viewrecaps->title }}</h3>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Basic -->
    <div class="ex-basic-1">
        <div class="container px-4 sm:px-8">
            <img class="inline mt-12 mb-4 mx-auto" src="{{ asset('images/'.$viewrecaps->image) }}"
                alt="alternative" />
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container px-4 sm:px-8 xl:px-32">
            <p>
                {!! $viewrecaps->body !!}
            </p>
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->
</div>
@endsection
