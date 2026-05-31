<x-layout>


    <x-slot:title>
        Dashboard
    </x-slot>


    <div class="grid justify-center">

        <div class="grid justify-center border-2 w-85 mt-6 py-3 md:border-4 md:w-2xl">
        
            <h1 class="font-bold md:text-6xl">Welcome: {{ auth()->user()->name }} </h1>
            
            <ul class="grid gap-3 my-3">
                <li class="px-2 underline underline-offset-2 md:text-4xl"><a class="hover:font-bold" href="/documentslist">Click to view Documents List</a></li>
                <li class="px-2 underline underline-offset-2 md:text-4xl"><a class="hover:font-bold" href="/expiringdocuments">Click to view Expiring Documents</a></li>
            </ul>

        </div>

    </div>
    
</x-layout>