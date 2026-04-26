<x-layout>


    <x-slot:title>
        Registration page
    </x-slot>


    <div class="grid justify-center mt-4 font-bold">
        <h1 class="mb-4 text-2xl">Please register here</h1>


        <form class="grid gap-3 w-30" action="/register" method="post">
            @csrf

            @error('emailAlreadyExists')
                <p>{{ $message }}</p>
            @enderror

            @error('email')
            <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">

            @error('name')
            <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="text" name="name" placeholder="Name" value="{{ old('name') }}">

            @error('password')
            <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="password" name="password" placeholder="Password">

            @error('password_confirmation')
            <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="password" name="password_confirmation" placeholder="Confirm Password">

            <button class="border-2 p-1 cursor-pointer font-bold" type="submit">Register</button>
        </form>
    </div>


</x-layout>