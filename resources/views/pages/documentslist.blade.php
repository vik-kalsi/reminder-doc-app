<x-layout>

    <x-slot:title>
        Documents List
    </x-slot>


    <div class="grid md:justify-center">
        <h1 class="font-bold text-4xl md:text-6xl">Documents List</h1>
    
        @if (session('documentAdded'))
            <p class="mb-6 md:text-3xl">{{ session('documentAdded') }}</p>
        @endif

        @if (session('documentDeletedSuccess'))
            <p class="mb-6 md:text-3xl">{{ session('documentDeletedSuccess') }}</p>
        @endif

        @if (session('documentEditSuccess'))
            <p class="mb-6 md:text-3xl">{{ session('documentEditSuccess') }}</p>
        @endif

    </div>



    <div class="mt-4">
        @foreach ($documents as $document)
            <ul class="grid justify-center">
                <li class="border-4 my-6 p-3 w-xs md:w-lg">
                    <div class="md:text-4xl">
                        <p>Document Name: {{ $document->name }}</p>
                        <p>Expiry Date: {{ $document->expiry_date }}</p>
                    </div>

                    <div class="flex gap-x-3">
                        <form action="{{ route('documentopen.edit', $document->id) }}" method="get">
                            @csrf

                            <button class="mt-6 border-2 p-1 cursor-pointer hover:bg-blue-700 md:text-4xl" type="submit">Edit Document</button>
                        </form>


                        <form action="{{ route('documents.destroy', $document->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="mt-6 border-2 p-1 cursor-pointer hover:bg-red-900 md:text-4xl" type="submit">Delete Document</button>
                        </form>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>


</x-layout>