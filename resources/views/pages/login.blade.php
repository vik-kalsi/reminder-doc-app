<x-layout>


    <x-slot:title>
        Login page
    </x-slot>


    <div class="grid justify-center mt-4 font-bold">
        <h1 class="mb-4 text-2xl md:text-6xl">Please login</h1>


        <form class="grid gap-3 w-30 md:gap-6 md:w-130 md:h-67.5 md:p-6" action="/login" method="post">
            @csrf

            @if (session('registerSuccess'))
                <p class="md:text-3xl">{{ session('registerSuccess') }}</p>
            @endif

            
            @error('incorrectCredenials')
                <p class="md:text-3xl">{{ $message }}</p>
            @enderror

            @if (session('LogOutSuccess'))
                <p class="md:text-3xl">{{ session('LogOutSuccess') }}</p>
            @endif


            @if (session('AccountDeletedSuccess'))
                <p class="md:text-3xl">{{ session('AccountDeletedSuccess') }}</p>
            @endif

            <input class="border-2 p-1 md:text-3xl" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
            <input class="border-2 p-1 md:text-3xl" type="password" name="password" placeholder="Password">
            <button class="border-2 p-1 cursor-pointer font-bold md:text-3xl" type="submit">Login</button>
        </form>


        <p class="mt-8 text-2xl underline underline-offset-2 md:text-5xl"> <a href="/register"> Create new account</a></p>

        
    </div>


</x-layout>