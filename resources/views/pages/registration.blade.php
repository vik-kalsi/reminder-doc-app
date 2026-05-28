<x-layout>


    <x-slot:title>
        Registration page
    </x-slot>


    <div class="grid justify-center mt-4 font-bold">
        <h1 class="mb-4 text-2xl md:text-6xl">Please register here</h1>


        <form class="grid gap-3 w-30 md:gap-6 md:w-130 md:h-67.5 md:p-6" action="/register" method="post">
            @csrf

            @error('emailAlreadyExists')
                <p class="md:text-3xl">{{ $message }}</p>
            @enderror

            @error('email')
            <p class="md:text-3xl">{{ $message }}</p>
            @enderror
            <input class="border-2 p-1 md:text-3xl md:p-3" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">

            @error('name')
            <p class="md:text-3xl">{{ $message }}</p>
            @enderror
            <input class="border-2 p-1 md:text-3xl md:p-3" type="text" name="name" placeholder="Name" value="{{ old('name') }}">

            @error('password')
            <p class="md:text-3xl">{{ $message }}</p>
            @enderror
            <input class="border-2 p-1 md:text-3xl md:p-3" type="password" name="password" placeholder="Password">

            @error('password_confirmation')
            <p class="md:text-3xl">{{ $message }}</p>
            @enderror
            <input class="border-2 p-1 md:text-3xl md:p-3" type="password" name="password_confirmation" placeholder="Confirm Password">

            <button class="border-2 p-1 cursor-pointer font-bold md:text-3xl md:p-3" type="submit">Register</button>
        </form>
    </div>


</x-layout>