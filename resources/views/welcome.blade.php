
<x-layout>
    <x-navbar :user="$user"  :categories="$categories">  </x-navbar>
    <main class="flex flex-col" x-data="{
        products: @json($products) ,
        init (){
            console.log(this.products);
        }
        }">
        <nav class="w-full h-10 flex bg-gray-700">
            <div class="w-[40%]">
            </div>
        </nav>

         {{-- @foreach ($products as $product)
         <div>

         </div>
             
         @endforeach --}}


    </main>


</x-layout>