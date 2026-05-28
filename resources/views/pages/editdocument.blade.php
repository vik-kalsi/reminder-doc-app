<x-layout>

    <x-slot:title>
        Edit Document
    </x-slot>


    <div class="grid justify-center">
        <h1 class="font-bold text-4xl md:text-6xl">Edit a Document</h1>
    </div>


    <div class="mt-4 grid justify-center">
        <form action="{{ route('update_document_submission', $documentToEdit->id) }}" method="post">
            @csrf
            @method('PUT')

            @error('document')
                <p>{{ $message }}</p>
            @enderror


            <div class="grid border-2 p-2 w-85 md:w-lg md:mt-8">
                <label class="md:text-4xl">Edit Document Name</label>
                <input class="border-2 p-1 w-[320px] md:text-4xl" type="text" name="documentName" value="{{ $documentToEdit->name }}">

                <label class="mt-4 md:text-4xl">Edit Expiry Date</label>
                <input class="border-2 p-1 w-[320px] md:text-4xl" type="date" name="expiry_date" value="{{ $documentToEdit->expiry_date }}">

                <button class="border-2 p-1 cursor-pointer mt-6 w-37.5 md:w-[320px] md:text-4xl" type="submit">Edit Document</button>
            </div>

        </form>
    </div>


</x-layout>