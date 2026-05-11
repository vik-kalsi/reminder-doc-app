<x-layout>


    <x-slot:title>
        Dashboard
    </x-slot>


    <div class="grid justify-center">

        <div class="grid justify-center border-2 w-85 mt-6 py-3">
        
            <h1 class="font-bold">Welcome: {{ auth()->user()->name }} </h1>            

        </div>

    </div>
    
</x-layout>