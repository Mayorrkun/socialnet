<x-layout>
    <x-navbar :user="$user" :categories="$categories" :items="$items">  </x-navbar>
<main>
    @foreach ($carts as $cart)
   <div class="block">
    {{$cart->title}}
    </div> 
        
    @endforeach

</main>

</x-layout>