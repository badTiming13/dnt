<div>
    <!-- File Upload Form -->
    <form wire:submit.prevent="saveFiles" enctype="multipart/form-data">
        @csrf
        <input type="file" name="files[]" multiple wire:model="files">
        <button type="submit">Upload</button>
    </form>
    
    @if (session()->has('message'))
    <script>
        window.onload = function() {
            alert("{{ session('message') }}");
        };
    </script>
    @endif
   
</div>
