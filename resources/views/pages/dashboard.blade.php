<x-layout>


    <x-slot:title>
        Dashboard
    </x-slot>


    <div class="grid justify-center">

        <h1 class="font-bold">Welcome: {{ auth()->user()->name }} </h1>

        <div class="grid justify-center border-2 w-85 mt-6 py-3">
        
            <h1 class="font-bold text-2xl">Documents Summary</h1>

            <div class="mt-3">
                <p>Total Documents: </p>
                <p>Expiring Soon: </p>
                <p>Expired: </p>
            </div>

        </div>

    </div>
    
</x-layout>