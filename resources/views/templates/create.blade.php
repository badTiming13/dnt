<x-app-layout>
    @if (session()->has('status'))
    <script>
        window.onload = function() {
            alert("{{ session('status') }}");
        };
    </script>
    @endif

    <div class="flex items-center justify-center" style="">
        <livewire:create-template />
    </div>

</x-app-layout>