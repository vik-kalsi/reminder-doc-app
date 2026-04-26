<x-layout>


    <x-slot:title>
        Login page
    </x-slot>


    <div class="grid justify-center mt-4 font-bold">
        <h1 class="mb-4 text-2xl">Please login</h1>


        <form class="grid gap-3 w-30" action="/login" method="post">
            @csrf

            @if (session('registerSuccess'))
                <p>{{ session('registerSuccess') }}</p>
            @endif

            
            @error('incorrectCredenials')
                <p>{{ $message }}</p>
            @enderror

            @if (session('LogOutSuccess'))
                <p>{{ session('LogOutSuccess') }}</p>
            @endif


            @if (session('AccountDeletedSuccess'))
                <p>{{ session('AccountDeletedSuccess') }}</p>
            @endif

            <input class="border-2 p-1" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
            <input class="border-2 p-1" type="password" name="password" placeholder="Password">
            <button class="border-2 p-1 cursor-pointer font-bold" type="submit">Login</button>
        </form>


        <p class="mt-8 text-2xl underline underline-offset-2"> <a href="/register"> Create new account</a></p>

        
    </div>


</x-layout>