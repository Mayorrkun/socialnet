@props(["user"])

@auth
<div {{
    $attributes->merge([
        'class' => 'bg-white w-[20%] z-70 absolute flex flex-col mt-11',
        'style' => 'display:none'
    ])
}}>
    <span class="text-md text-yellow-600 w-[40%] mx-auto">
        {{$user->first_name}} {{$user->last_name}}
    </span>
    <div>

    </div> 
@endauth

@guest
<div {{
    $attributes->merge([
        'class' => 'bg-white w-[20%] z-50 absolute flex flex-col mt-11',
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