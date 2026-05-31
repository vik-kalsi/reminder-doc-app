<x-layout>

    <x-slot:title>
        Expiring Document
    </x-slot>


    <div class="grid justify-center">
        <h1 class="font-bold text-4xl md:text-5xl">Expiring or Expired Documents</h1>
    </div>


    <div class="mt-4 grid justify-center">

        <p class="mb-6 md:text-3xl">These are the documents that have already expired or will expire within 30 days</p>

        @foreach ($documents as $document)
            <ul class="grid justify-center">
                <li class="border-4 my-4 p-3 w-xs md:w-lg">
                    <div class="grid gap-1">
                        <p class="md:text-4xl">Document Name: {{ $document->name }}</p>
                        <p class="md:text-4xl">Expiry Date: {{ $document->expiry_date }}</p>
                    </div>
                </li>
            </ul>
        @endforeach
        
    </div>


</x-layout>