@props(['name'])

@error($name)
    <div class="text-xs font-bold italic text-red-600 ml-10">
        {{$message}}
    </div>
    
@enderror