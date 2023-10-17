@extends('layout')
@section('content')
<h1>Products</h1>

@unless(count($products) == 0)
@foreach($products as $product)
<h2>
    <a href="/listings/{{$product["id"]}}">{{$product['title']}}</a>
</h2>
<p>
    {{$product['description']}}
</p>

@endforeach

@else
<p>no product</p>

@endunless

@endsection