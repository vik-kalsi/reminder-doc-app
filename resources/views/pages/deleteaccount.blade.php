<x-layout>


    <x-slot:title>
        Delete Account
    </x-slot>


    <div class="grid justify-center mt-4 font-bold">

        <h1 class="font-bold text-4xl">Delete Account Page</h1>


        <h1 class="mt-2"> Delete Account for: {{ auth()->user()->name }} </h1>

        <div class="mt-4">
            <form action="{{ route('account.delete', auth()->user()->id) }}" method="post">
                @csrf
                @method('DELETE')

                <button class="cursor-pointer border-2 p-1 hover:bg-red-900" type="submit">Delete Account</button>
            </form>
        </div>


    </div>

    
</x-layout>