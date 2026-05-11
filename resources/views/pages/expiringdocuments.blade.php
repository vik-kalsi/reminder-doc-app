<x-layout>

    <x-slot:title>
        Expiring Document
    </x-slot>


    <h1 class="font-bold text-4xl">Expiring or Expired Documents</h1>


    <div class="mt-4">

        <p>These are the documents that have already expired or will expire within 30 days</p>

        @foreach ($documents as $document)
            <ul class="grid justify-center">
                <li class="border-4 my-4 p-3 w-xs">
                    <div>
                        <p>Document Name: {{ $document->name }}</p>
                        <p>Expiry Date: {{ $document->expiry_date }}</p>
                    </div>
                </li>
            </ul>
        @endforeach
        
    </div>


</x-layout>