@extends('layouts.app')

@section('title')
    Login in DevStagram
@endsection


@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/login.jpg')}}" alt="Image for the login">
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{route('login')}}">
                @csrf

                @if (session('status'))
                <p class= "bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('status')}}</p>
                @endif
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input for="email" type="email" name="email" placeholder="Email para tu registro"
                    class="border p-3 w-full rounded-lg" value="{{old('email')}}">
                    @error('email')
                    <p class= "bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input for="password" type="password" name="password" placeholder="*******"
                    class="border p-3 w-full rounded-lg">
                    @error('password')
                    <p class= "bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                <div class="mb-4 mt-3">
                    <input type="checkbox" name="remember"> <label class=" uppercase text-gray-500 font-bold"> Stay logged in  </label>
                </div>
            </div>

            <input type="submit" value="Iniciar Sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
             text-white rounded-lg w-full p-3">

            </form>
        </div>
    </div>
@endsection
