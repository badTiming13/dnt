@props(['name', 'title'])
<div 
x-data="{show : false, name: '{{$name}}' }" 
x-show="show" 
x-on:open-modal.window="show = ($event.detail.name === name)" 
x-on:close-modal.window="show = false"
style="display: none;"
x-transition
    x-on:keydown.escape.window="show = false" class="fixed z-50 inset-0">

    {{-- Gray Background --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>

    {{-- Modal Body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl text-black" style="max-height: fit-content;">
        <div class="py-3 flex items-center justify-center">
            {{$title}}
        </div>
        <div>
            {{$body}}
        </div>
    </div>
</div>