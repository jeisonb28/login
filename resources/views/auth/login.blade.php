@extends('layouts.app')

@section('titel', 'login')
@section('content')
  
<div class="block mx-auto my-12 p-8 bg-white w-full sm:w-2/3 md:w-1/3 border border-gray-200 rounded-lg shadow-lg">

  <!-- Logo -->
  <div class="flex justify-center mb-4">
      <img src="{{ asset('Img/undraw_font_re_efri.svg') }}" alt="Logo" class="h-16 w-auto md:h-20 md:w-auto">
  </div>

  <h1 class="text-2xl md:text-3xl text-center font-bold">Login</h1>

  <form class="mt-4" method="POST" action="{{ route('login.index') }}">
      @csrf 
     
     <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-base md:text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
     <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-base md:text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">

     @error('message')
    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
        * Error
    </p>
    @enderror

    <button type="submit" class="rounded-md bg-indigo-500 w-full text-base md:text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Ingresar</button>
  </form>
      
</div>    
@endsection
