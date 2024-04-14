<x-app-layout>
    <x-slot name="header" class="flex">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Files') }}
            </h2>
        </div>

        <div class="" style="padding-inline: 2rem;">
            <a href="{{ route('pages.create') }}" class="text-white" style="padding-inline:1.5rem; padding-block: .7rem; background: #4e3391; border-radius: 1.7rem;">Upload</a>
        </div>
    </x-slot>



        @if ($files->isEmpty())
        <div class="text-white flex items-center justify-center min-h-[40vh]">
            <p class="text-xl">No files yet, upload your first one!</p>
        </div>
        @else
        <x-table :fields="$fields" :values="$values" :model="$model" />
        @endif

        <livewire:media-manager />
   

    

    @if (session()->has('status'))
    <script>
        window.onload = function() {
            alert("{{ session('status') }}");
        };
    </script>
    @endif
</x-app-layout>