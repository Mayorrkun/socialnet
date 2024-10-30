@props(["user"])

@auth
<div {{
    $attributes->merge([
        'class' => 'bg-white w-[20%] z-50 absolute flex flex-col mt-14 rounded-sm ',
        'style' => 'display:none'
    ])
}}>
    <span class="text-lg text-yellow-400 w-full mx-auto font-bold text-center">
        {{$user->first_name}} {{$user->last_name}}
    </span>

    
    <button onclick="window.location.href = '{{route('logout')}}' " class="w-[80%] mx-auto h-8 bg-yellow-400 text-white font-bold mb-10 mt-5 rounded-md">Logout</button>
            

    </div> 
@endauth

@guest
<div {{
    $attributes->merge([
        'class' => 'bg-white w-[20%] z-50 absolute flex flex-col mt-14',
        'style' => 'display:none'
    ])
}}>
    <a href="{{route('login-page')}}" class="text-xl text-yellow-600 w-[40%] mx-auto">
       Sign In
    </a>
    <div class="">

    </div>
</div> 
    
@endguest