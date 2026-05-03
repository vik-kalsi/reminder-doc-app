<x-layout>

    <x-slot:title>
        Edit Document
    </x-slot>


    <h1 class="font-bold text-4xl">Edit a Document</h1>


    <div class="mt-4">
        <form action="{{ route('update_document_submission', $documentToEdit->id) }}" method="post">
            @csrf
            @method('PUT')

            @error('document')
                <p>{{ $message }}</p>
            @enderror


            <div class="grid border-2 p-2 w-85">
                <label>Edit Document Name</label>
                <input class="border-2 p-1 w-[320px]" type="text" name="documentName" value="{{ $documentToEdit->name }}">

                <label class="mt-4">Edit Expiry Date</label>
                <input class="border-2 p-1 w-[320px]" type="date" name="expiry_date" value="{{ $documentToEdit->expiry_date }}">

                <button class="border-2 p-1 cursor-pointer mt-6 w-37.5" type="submit">Edit Document</button>
            </div>

        </form>
    </div>


</x-layout>