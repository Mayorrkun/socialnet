@props(['categories', 'user','items'])

<nav class="flex flex-row w-full h-14 py-[1px] bg-gray-900" x-data="{categories:}" x-init="categories = JSON.parse('{{json_encode($categories)}}')">
    <div class="w-[15%] h-full flex flex-row">
        <a href="{{route('home')}}" class="w-[60%] h-auto my-auto text-lg font-bold text-white">
                LOGO HERE   

        </a>
        <div class="w-35% ml-auto text-sm">
            <span> deliver to: </span>


        </div>
    </div>

    <div class="w-[50%] h-full ml-5 flex" >
        <form action="/search" method="POST" class="my-auto mr-auto h-[90%]">
            @csrf
            <div class="h-full flex ">
                 <select name="category" class="bg-gray-300 w-auto min-h-[85%] ml-auto my-auto rounded-l-md  text-black text-xs">
                    <option>All</option>
                    <template x-for="(category,index) in categories" :key="index">
                        <option :value="category" x-text="category" class=""></option>    
                    </template>
                 </select>
                <input type="text" class="w-[90%] min-h-[85%] my-auto">
                <button for="" type="submit" class="rounded-r-md w-[6.5%] min-h-[85%] my-auto bg-slate-500"><img src="/images/search.png" alt="search" srcset="" class="w-[50%] h-[50%] m-auto"></button>
            </div>
                </form>
        
    </div>
    <div class="w-[40%] min-h-90% my-auto ml-auto flex justify-evenly">
        {{-- 4 divs innit --}}
        <div class="w-[20%] flex  hover:border-white hover:border hover:rounded--sm ">
        </div>
        <div x-data="{ isHovered: false }"  class="max-w-[30%] flex flex-col  max-h-full  hover:border-white hover:border hover:rounded--sm p-1 border border-transparent rounded-sm ">
            @auth
            <span class=" text-white font-semibold text-sm max-h-5 max-w-full" >Hello {{$user->first_name}} </span>
            <span @mouseenter="isHovered = true" 
             class=" text-white font-bold text-md max-h-6 max-w-full"
            >Account & Lists</span>        
            @endauth
            @guest
                <a href="{{route('login-page')}}" class=" text-white font-semibold text-sm max-h-5 max-w-full">
                    Hello, sign in
                </a>
                <span @mouseenter="isHovered = true" 
                  class=" text-white font-bold text-md max-h-6 max-w-full"
                >Account & Lists</span>
            @endguest
            <x-hidden-div x-show="isHovered" :user="$user" @mouseenter="isHovered = true" 
            @mouseleave="isHovered = false" > 
            </x-hidden-div> 
        </div>

        <div class="w-[20%] flex  hover:border-white hover:border hover:rounded--sm "></div>
        
        <a href="{{route('cart')}}" class="w-[20%] flex  hover:border-white hover:border hover:rounded--sm p-1 border border-transparent rounded-sm ">
            <span  class="flex flex-row ">

                <img src="images/cart.png" alt="cart" srcset="" class="mt-auto w-[80%] h-[80%]">

                @guest
                <span class="font-bold text-orange-400 text-xl w-[20px] pt-2">0 </span>        
                @endguest

                @auth
                <span class="font-bold text-orange-400 text-xl w-[20px] pt-2">{{$items}}</span> 
                @endauth

            </span>
            <span class="font-bold text-md min-h-5 mt-auto text-white  ">
                Cart
            </span>
        </a>
        
         </div>

</nav>