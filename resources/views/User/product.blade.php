<x-layout>
    <x-navbar :categories="$categories" :user="$user">  </x-navbar>

    <main class="w-[70%] min-h-full flex">
        <img src="{{asset($product->img_path)}}" alt="img" class="">
        
        <div>

        </div>


    </main>


</x-layout>