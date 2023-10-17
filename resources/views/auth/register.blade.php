@extends('layouts.app')

@section('content')
<div>
    <div>
    <form action="{{ route('register') }}" method="POST">
        <div>
            <label for="name" class="sr-only">name</label>
            <input type="text" name="name" id="name" class="bg-gray-100 border-2 w-full" value="">
        </div>
        <div>
            <label for="password" class="sr-only">password</label>
            <input type="text" name="password" id="password" class="bg-gray-100 border-2 w-full" value="">
        </div>
           <div>
            <label for="password_confirmation" class="sr-only">Password again</label>
            <input type="text" name="password_confirmation" id="password" class="bg-gray-100 border-2 w-full" value="">
        </div>
    </form></div></div>
 @endsection
