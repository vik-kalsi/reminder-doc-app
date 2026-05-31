<x-layout>

    <x-slot:title>
        Add Documents
    </x-slot>


    <div class="grid justify-center md:mb-16">
        <h1 class="font-bold text-4xl md:text-6xl">Add a Document</h1>
    </div>


    <div class="mt-4 grid justify-center">
        <form action="/adddocuments" method="post">
            @csrf

            @error('document')
                <p class="md:text-3xl mb-3">{{ $message }}</p>
            @enderror


            <div class="grid justify-center border-2 p-2 w-85 md:w-xl md:border-4">
                <label class="md:text-4xl">Add Document Name</label>
                <input class="border-2 p-1 w-[320px] md:text-4xl md:w-md" type="text" name="document" placeholder="Add Document Name Here">

                <label class="mt-4 md:text-4xl">Expiry Date</label>
                <input class="border-2 p-1 w-[320px] md:text-4xl md:w-md" type="date" name="expiry_date">

                <button class="border-2 p-1 cursor-pointer mt-6 w-37.5 md:text-4xl md:w-xs" type="submit">Add Document</button>
            </div>

        </form>
    </div>


</x-layout>