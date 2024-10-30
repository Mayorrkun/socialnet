<x-layout>
    <x-navbar :user="$user" :categories="$categories" :items="$items">  </x-navbar>
<main class="flex flex-row justify-between">
    @if ($cartItems->isEmpty())
        <div class="text-3xl font-bold font-sans ">
            Your Cart is empty
        </div>

    @else
    <div class="min-w-[65%] mr-auto ml-5">
        @foreach ($cartItems as $cartItem)
    <div class="flex h-20 my-3 min-w-full bg-gray-100 shadow-md">
       <div class="w-[40%] h-full flex">
       <img src=" {{$cartItem->product->img_path}} " class="mr-auto ml-0 h-full w-28" alt="try again">
       <span class="w-56 text-xl font-bold ml-3 mr-auto py-5 ">{{$cartItem->product->name}}</span>
       </div>

       <div class="w-[40%] h-full flex ml-auto justify-between">
           <div class="w-[25%] flex justify-between ml-36">
               <button onclick="window.location.href= '{{route('increase', $cartItem->product->id)}}' "  class="ml-2 w-6 h-6 text-3xl bg-yellow-500 text-white font-bold my-auto"><svg class="w-[80%] h-[80%] mx-auto my-auto" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 1H6V6L1 6V10H6V15H10V10H15V6L10 6V1Z" fill="#ffffff"></path> </g></svg> </button>
               <button onclick="window.location.href= '{{route('decrease', $cartItem->product->id)}}' " class="mr-2 w-6 h-6 text-3xl bg-yellow-500 text-white font-bold my-auto"><svg class="w-[80%] h-[80%] mx-auto my-auto" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1 10L1 6L15 6V10L1 10Z" fill="#ffffff"></path> </g></svg></button>
           </div>
           
            <button onclick="window.location.href= '{{route('remove-from-cart', $cartItem->product->id)}}' " class="rounded-md ml-auto mr-4 bg-yellow-500 text-white font-bold w-20 h-10 my-auto">Remove</button>
       </div>
       
      
   </div>
@endforeach

   </div>

   
   <div class="min-w-[30%] ml-auto flex mt-10"  >
    <div class="w-[95%] mx-auto bg-gray-100 rounded-md flex flex-col px-3 pb-5">
        <div class="text-black font-bold flex flex-row justify-between mt-5">
            <span class="mr-auto ml-2 max-w-[30%]">Product</span>
            <span class="max-w-[30%]">Quantity</span>
            <span class="ml-auto mr-5 max-w-[30%]">Price</span>
        </div>
           @php

                $total = 0;
            @endphp
            @foreach ($cartItems as $cartItem)
            @php
                $total += ($cartItem->price* $cartItem->quantity);
            @endphp
            <div class="flex flex-row font-semibold">
            <span class="mr-auto ml-2 max-w-[30%] overflow-hidden max-h-10 pt-5">{{$cartItem->product->name}}</span>
            <span class="max-w-[30%] max-h-10 pt-5"> {{$cartItem->quantity}} </span>
            <span class="ml-auto mr-5 max-w-[10%] max-h-10 pt-5">${{$cartItem->price * $cartItem->quantity}}</span>
            </div>
            @endforeach

            <div class="text-2xl font-bold mt-10 pl-1 flex flex-row">
                <span class="mr-auto">Total:</span>    <span class=" ml-auto mr-5">${{$total}}</span>
                   </div>

            
        

    </div>
</div>
    @endif
    


</main>

</x-layout>