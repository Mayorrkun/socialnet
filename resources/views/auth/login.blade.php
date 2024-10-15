<x-layout>
    <main class="min-w-full min-h-[80%] shadow-md mt-5">
        <div class="h-10 flex">
            <span class="font-bold text-gray-900 text-2xl mx-auto ">LOGO HERE</span>
        </div>
        <form action="/login" method="POST" class="shadow-md w-[25%] mx-auto mt-5 border-[1.5px] border-gray-200 rounded-lg flex-col flex ">
            @csrf
            <span class="text-3xl w-[80%] mx-auto mt-5 block ">Sign In</span>
            <div class= " w-full flex flex-col mt-4">
            <x-label>Email or Username </x-label>
            <x-input type="email" name="email" />
            <x-error name="email"></x-error>
            </div>
            <div class="w-full flex flex-col mt-4">
                <x-label>Password</x-label>
                <x-input type="password" name="password" />
                <x-error name="password"></x-error>
                </div>

           

            <button type="submit" for="" class="w-[80%] mx-auto h-8 bg-yellow-400 text-white font-bold mb-10 mt-5 rounded-md">Login</button>
            
            <p class="w-[80%] mx-auto text-xs mb-3">
                By continuing that means you must have agreed to our <a class="text-blue-600" href="#">terms of use and service.</a> 
               
            </p>
            <a class="pb-4 w-[80%] mx-auto mb-10 block text-blue-600 text-sm border-b border-b-gray-300"> For more info</a>
        </form>
        <div class="w-full flex mb-8">
            <button class=" h-8 text-sm w-[25%] mx-auto mt-5 border-[1.5px] border-gray-200 rounded-lg" onclick="location.href='/register-page' ">
                <span class="my-auto">Create your Account</span> 
            </button>

        </div>

      
    </main>
</x-layout>