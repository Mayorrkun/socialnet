<x-layout>
    <main class="min-w-full min-h-[80%] shadow-md mt-5 mb-14">
        <div class="h-10 flex">
            <a href="{{route('home')}}" class="font-bold text-gray-900 text-2xl mx-auto ">LOGO HERE</a>
        </div>
        <form action="/register" method="POST" class="shadow-md w-[25%] mx-auto mt-5 border-[1.5px] border-gray-200 rounded-lg flex-col flex ">
            @csrf
            <span class="text-3xl w-[80%] mx-auto mt-5 block ">Sign In</span>
            <div class= " w-full flex flex-col mt-4">
            <x-label>First Name </x-label>
            <x-input name="first_name"  aria-placeholder="First Name" />
            <x-error name='first_name'></x-error>
            </div>
            <div class="w-full flex flex-col mt-4">
                <x-label>Last Name</x-label>
                <x-input name="last_name" aria-placeholder="Last Name" />
                <x-error name="last_name"></x-error>
                </div>
            <div class= " w-full flex flex-col mt-4">
                <x-label>Email</x-label>
                <x-input name="email" type="email" />
                <x-error name="email"></x-error>
                </div>
                <div class="w-full flex flex-col mt-4">
                    <x-label>Password</x-label>
                    <x-input name="password" type="password" />
                    <x-error name="password"></x-error>
                    </div>
                <div class="w-full flex flex-col mt-4">
                    <x-label> Confirm Password</x-label>
                    <x-input name="password_confirmation" type="password" />
                    <x-error name="password_confirmation"></x-error>
                    </div>

           

            <button type="submit" for="" class="w-[80%] mx-auto h-8 bg-yellow-400 text-white font-bold mb-10 mt-5 rounded-md">Submit</button>
            
            <p class="w-[80%] mx-auto text-xs mb-10">
                By continuing that means you must have agreed to our <a class="text-blue-600" href="#">terms of use and service.</a> 
               
            </p>
            <a class="pb-4 w-[80%] mx-auto mb-10 block text-blue-600 text-sm border-b border-b-gray-300"> For more info</a>
            
        </form> 
      <div class="w-full mb-10 flex">
        <button class=" h-8 text-sm w-[25%] mx-auto mt-5 border-[1.5px] border-gray-200 rounded-lg" onclick="location.href='/login-page' ">
            <span class="my-auto">Sign into your Account</span> 
        </button>
      </div>
        
    </main>
</x-layout>