<x-app-layout>
    <x-slot name="header" class="flex">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit') }} {{$page->title}}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white">
        @if ($page['content'] != "{}")
        <h1>You have some components</h1>
        @else
        <h1>Page is empty, Create first component.</h1>
        <div class="py-4">
            <button id="saveBtn" type="button" style="padding-inline:1.5rem; padding-block: .7rem; background: #4e3391; border-radius: 1.7rem; width:fit-content; align-self: center;">Save</button>
        </div>
        @endif
        
        <x-custom-modal name="test" title="Test">
            <x-slot:body>
                <span class="p-5">Body tag test</span>
            </x-slot:body>
        </x-custom-modal>

        <button x-data x-on:click="$dispatch('open-modal', {name: 'test'})" class="px-3 py-1 bg-teal-500 text-white rounded">
            Open Modal
        </button>
        


    </div>

    <div>

    </div>

    @if (session()->has('status'))
    <script>
        window.onload = function() {
            alert("{{ session('status') }}");
        };
    </script>
    @endif
</x-app-layout>