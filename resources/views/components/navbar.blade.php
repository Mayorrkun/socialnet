@props(['categories'])

<nav class="flex flex-row w-full h-16 bg-gray-700" x-data="{categories:}" x-init="categories = JSON.parse('{{json_encode($categories)}}')">
    <div class="w-[15%] h-full flex flex-row">
        <div>

        </div>
        <div>

        </div>
    </div>

    <div class="w-[50%] h-full pl-10 ml-5 flex" >
        <form action="/search" method="POST" class="my-auto mr-auto h-[90%]">
            @csrf
            <div class="h-full flex ">
                 <select name="category" class="bg-gray-300 w-auto min-h-[70%] ml-auto my-auto rounded-l-md  text-black text-xs">
                    <option>All</option>
                    <template x-for="(category,index) in categories" :key="index">
                        <option :value="category" x-text="category" class=""></option>    
                    </template>
                 </select>
                <input type="text" class="w-[80%] min-h-[70%] my-auto">
                <button for="" type="submit" class="rounded-r-md w-[6.5%] min-h-[70%] my-auto bg-slate-500"><img src="/images/search.png" alt="search" srcset="" class="w-[50%] h-[50%] m-auto"></button>
            </div>
                </form>
        
    </div>
    <div class="w-[35%] min-h-90% my-auto ml-auto flex justify-evenly">
        {{-- 4 divs innit --}}
        <div class="w-[20%] flex  hover:border-white hover:border-2 hover:rounded-sm "></div>
        <div class="w-[20%] flex  hover:border-white hover:border-2 hover:rounded-sm "></div>
        <div class="w-[20%] flex  hover:border-white hover:border-2 hover:rounded-sm "></div>
        <div class="w-[20%] flex  hover:border-white hover:border-2 hover:rounded-sm p-1 border-2 border-transparent rounded-sm ">
            <a href="/cart"  class="flex flex-row ">

                <img src="images/cart.png" alt="cart" srcset="" class="mt-auto w-[80%] h-[80%]">

                <span class="font-bold text-orange-400 text-xl w-[20px] pt-2">0 </span>
            </a>
            <span class="font-bold text-md min-h-5 mt-auto text-white  ">
                Cart
            </span>
        </div>
        
    </div>

</nav>