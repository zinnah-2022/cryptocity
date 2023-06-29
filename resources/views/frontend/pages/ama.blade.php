@extends('frontend.master')
@section('content')

<!-- Details Lightbox -->
<div class=" px-8 py-24 service ">
    <div class="text-center py-6">
        <h2>AMA</h2>
        <p><b>Lets take a look our AMA</b></p>
    </div>

    <div class="w-8/12 mx-auto flex flex-col sm:flex-row gap-4">
        @foreach ($amas as $data )
        <div class="py-8 ms:px-6">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/'. $data->image) }}"  alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <h3 class="font-bold text-xl mb-2">{{$data->title}}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
@endsection
