@extends('layouts.app')
@section('content')
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
    @unless(count($products) == 0)

            @foreach($products as $product)

    

            @endforeach

                @else

                        <p> No Listings Found </p>

            @endunless
                </div>

@endsection