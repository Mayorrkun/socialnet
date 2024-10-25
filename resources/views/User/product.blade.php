<x-layout>
    <x-navbar :categories="$categories" :user="$user" :items="$items">  </x-navbar>
    <nav class="w-full h-10 flex bg-gray-700">
        <div class="w-[40%]">
        </div>
    </nav>
    <main class="w-full flex pt-10 min-h-screen">
        
        <div class="w-[70%] min-h-full flex flex-row justify-between">
            <div class="w-[40%]">
                <img src="{{asset($product->img_path)}}" alt="img" class="">
            </div>
            
            
            <div class="w-[60%] flex flex-col">
                <span class="block">
                    {{$product->name}}
                </span>
    
                <p>
                    {{$product->description}}
                </p>
    
    
            </div>
    
    
        </div>
        <div class="w-[30%] flex min-h-full">
            <div class="w-[60%] h-full ml-auto mr-5 rounded-lg border-2 border-gray-300 shadow-sm flex flex-col ">
                @if ($product->discount > 0)
    
                <span class="h-10 block mt-3">
                   <span class="text-3xl font-bold text-black">${{$product->price - ($product->price * ($product->discount /100))}}</span>
                    <span class="line-through text-xl font-bold text-gray-500">${{$product->price}}</span>
                </span>

                @elseif ($product->discount === 0)
                <span class="h-10 mt-3 flex">
                    <span class="mx-auto text-3xl font-bold text-black">${{$product->price - ($product->price * ($product->discount /100))}}</span>
                 </span>
        
                @endif

                <form action="{{route('add-to-cart',$product->id)}}" name="product-form" method="POST" class="flex flex-col">
                    @csrf
                    @if ($product->stock === 0)
                    <span class="text-red-500 text-xl">OUT OF STOCK</span>
                    <button for="product-form" class="bg-gray-500"></button>

                    @elseif ($product->stock >= 1 && ($product->stock < 10))
                    <span class="text-green-500 text-xl">IN STOCK</span>
                    <span class="italics text-red-500 font-semibold text-md">{{$product->stock}} units left</span>
                    <button for="product-form" class="bg-yellow-500"> Add to Cart</button>

                    @elseif ($product->stock >=10)
                    <span class="text-green-500 text-xl">IN STOCK</span>
                    <button for="product-form" class="bg-yellow-500">Add to Cart</button>

                    @endif
                </form>
                
                
            </div>
    
        </div>
    </main>

   


</x-layout>