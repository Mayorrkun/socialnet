
<x-layout>
    <x-navbar :user="$user"  :categories="$categories" :items="$items">  </x-navbar> 
    <nav class="w-full h-10 flex bg-gray-700">
            <div class="w-[40%]">
            </div>
        </nav>
    <main class="flex flex-col">
        <span class="text-md text-gray-600 font-semibold block">consoles</span>
       <div class="flex flex-row">
        @foreach ($products as $product)

        <a href="{{route('product-page',$product->id)}}" class="w-52 h-56 mr-3 mt-3 overflow-hidden flex flex-col">
            <div class="max-h-36 min-h-36 mx-auto">
                <img src="{{asset($product->img_path)}}" alt="img" class="h-full w-full ">
            </div>
         
        @if ($product->discount == 0)
        <span class="block text-xl font-semibold">${{$product->price}}</span>
        <span class="line-through block text-md text-gray-600 h-[24px]"></span>
        <span> {{$product->name}} </span>

        @elseif ($product->discount > 0)
        <span class="block text-xl font-semibold">${{($product->price)- ($product->price*$product->discount)/100}}</span>
        <span class="line-through block text-md text-gray-600">${{$product->price}}</span>
        <span> {{$product->name}} </span>
            
        @endif
        </a>
            
        @endforeach
       </div>
        
    </main>


</x-layout>