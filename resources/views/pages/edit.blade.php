<x-app-layout>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
            /* Width of the scrollbar */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #6b7fb5;
            /* Color of the scrollbar handle */
            border-radius: 4px;
            /* Border radius of the scrollbar handle */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #6b7fb5;
            /* Color of the scrollbar handle on hover */
        }
    </style>
    <x-slot name="header" class="flex">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit') }} {{$page->title}}
            </h2>
        </div>
    </x-slot>

    @dump($components[0]['content'])
    <aside class="fixed overflow-y-auto h-full custom-scrollbar">
        <ul class="px-16 grid grid-cols-2 gap-10">
           @foreach ($components as $component)
               <li class="capitalize text-white">{{$component->name}}</li>
           @endforeach
        </ul>
    </aside>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center">
        <h1 class="text-white">
            Components
        </h1>
    </div>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white">
        @if ($page['content'] != "{}")
        <h1>You have some components</h1>
        @else
        <h1>Page is empty, drag in your first component.</h1>
        <div class="py-4">
            <button type="submit" style="padding-inline:1.5rem; padding-block: .7rem; background: #4e3391; border-radius: 1.7rem; width:fit-content; align-self: center;">Create</button>
        </div>
        @endif
    </div>

    @if (session()->has('status'))
    <script>
        window.onload = function() {
            alert("{{ session('status') }}");
        };
    </script>
    @endif
</x-app-layout>