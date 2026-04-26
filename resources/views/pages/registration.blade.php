<x-layout>


    <x-slot:title>
        Registration page
    </x-slot>


    <div class="grid justify-center mt-4 font-bold">
        <h1 class="mb-4 text-2xl">Please register here</h1>


        <form class="grid gap-3 w-30" action="/register" method="post">
            @csrf
            <input class="border-2 p-1" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">

            <input class="border-2 p-1" type="text" name="name" placeholder="Name" value="{{ old('name') }}">

            <input class="border-2 p-1" type="password" name="password" placeholder="Password">

            <input class="border-2 p-1" type="password" name="password_confirmation" placeholder="Confirm Password">

            <button class="border-2 p-1 cursor-pointer font-bold" type="submit">Register</button>

        </form>
    </div>


</x-layout>