<x-layout>

    <x-slot:title>
        Documents List
    </x-slot>


    <h1 class="font-bold text-4xl">Documents List</h1>


    @if (session('documentAdded'))
        <p class="mb-6">{{ session('documentAdded') }}</p>
    @endif

    <div class="mt-4">
        @foreach ($documents as $document)
            <ul class="grid justify-center">
                <li class="border-4 my-6 p-3 w-xs">
                    <div>
                        <p>Document Name: {{ $document->name }}</p>
                        <p>Expiry Date: {{ $document->expiry_date }}</p>
                    </div>

                    <div class="flex gap-x-3">
                        <form action="" method="get">
                            @csrf

                            <button class="mt-6 border-2 p-1 cursor-pointer hover:bg-blue-700" type="submit">Edit Document</button>
                        </form>


                        <form action="" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="mt-6 border-2 p-1 cursor-pointer hover:bg-red-900" type="submit">Delete Document</button>
                        </form>
                    </div>
                </li>
            </ul>
        @endforeach

    </div>


</x-layout>