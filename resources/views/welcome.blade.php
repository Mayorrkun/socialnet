
<x-layout>
    <x-navbar :user="$user"  :categories="$categories">  </x-navbar>
    <main class="flex flex-col">
        <nav class="w-full h-10 flex bg-gray-700">
            <div class="w-[40%]">
            </div>
        </nav>
        @foreach ($products as $product)

        <div class="w-36 h-36 mr-3 mt-3
         rounded border border-gray-500">


        </div>
            
        @endforeach


    </main>


</x-layout>