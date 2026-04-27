<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>



<body class="justify-center bg-[#171323] text-white">
    
    <div class="flex justify-between mt-4 mx-4">
        <div>
            <p class="font-bold"><a href="/">Reminder-Doc-App</a></p>
        </div>


        <div x-data="{ open: false }" x-cloak class="lg:hidden">
            <svg @click="open = ! open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"> <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" /></svg>
        
            <div x-show="open" class="lg:hidden">
                <ul class="z-10 grid justify-items-center space-y-8 py-5 font-bold text-2xl border-4 border-white bg-[#171323] min-w-full h-64 md:text-4xl md:h-80 absolute left-0">                    
                    @if(!auth()->user())
                        <li class="cursor-pointer"><a @click="open = ! open" href="/">Homepage</a></li>
                        <li class="cursor-pointer"><a @click="open = ! open" href="/login">Login</a></li>
                        <li class="cursor-pointer"><a @click="open = ! open" href="/register">Register</a></li>
                    @endif


                    @if(auth()->user())
                        <li class="px-2"><a class="hover:font-bold" href="/dashboard">Dashboard</a></li>
                        <li class="px-2"><a class="hover:font-bold" href="/deleteaccount">Delete Account</a></li>

                        <div>
                            <form action="{{ route('logout_user') }}" method="post">
                                @csrf
                                <button class="cursor-pointer px-2 hover:font-bold" type="submit">Logout</button>
                            </form>
                        </div>
                    @endif
                </ul>
            </div>

        </div>

    </div>
    

    <div class="p-4 mt-24">
        {{ $slot }}
    </div>
    
</body>
</html>