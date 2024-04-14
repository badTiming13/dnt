@props([
'title',
'url'
])

<a href="{{$url}}" style="background: #3557a0; width:100%; border: 1px solid black;">
    <div class="aspect-square flex flex-col items-center justify-center">
        <h1 class="text-4xl">{{$title}}</h1>
    </div>
</a>