@extends('layouts.app')

@section('title')
    Create your account in DevStagram
@endsection


@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Image for the register">
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input for="name" type="text" name="name" placeholder="Tu Nombre"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    UserName
                </label>
                <input for="username" type="text" name="username" placeholder="Username"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input for="email" type="email" name="email" placeholder="Email para tu registro"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input for="password" type="password" name="password" placeholder="*******"
                    class="border p-3 w-full rounded-lg">
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input for="password_confirmation" name="password_confirmation" type="password" placeholder="*******"
                    class="border p-3 w-full rounded-lg">
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
             text-white rounded-lg w-full p-3">


        </div>
    </div>
@endsection