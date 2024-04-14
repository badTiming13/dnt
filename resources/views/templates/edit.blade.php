<x-app-layout>
    <x-slot name="header" class="flex">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit template') }}
            </h2>
        </div>
    </x-slot>

    <section class="bg-white" style="padding: 3rem; border: 1px dashed white; min-height: 80vh;">
        @include('main')
    </section>

    @if (session()->has('status'))
    <script>
        window.onload = function() {
            alert("{{ session('status') }}");
        };
    </script>
    @endif
</x-app-layout>