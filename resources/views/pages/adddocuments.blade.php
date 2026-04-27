<x-layout>

    <x-slot:title>
        Add Documents
    </x-slot>


    <h1 class="font-bold text-4xl">Add a Document</h1>


    <div class="mt-4">
        <form action="/adddocuments" method="post">
            @csrf

            @error('document')
                <p>{{ $message }}</p>
            @enderror


            <div class="grid border-2 p-2 w-85">
                <label>Add Document Name</label>
                <input class="border-2 p-1 w-[320px]" type="text" name="document" placeholder="Add Document Name Here">

                <label class="mt-4">Expiry Date</label>
                <input class="border-2 p-1 w-[320px]" type="date" name="expiry_date">

                <button class="border-2 p-1 cursor-pointer mt-6 w-37.5" type="submit">Add Document</button>
            </div>

        </form>
    </div>


</x-layout>