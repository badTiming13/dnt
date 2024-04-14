<form wire:submit="save" class="flex flex-col gap-4 py-6" style="width: 60%;">

    <div class="flex flex-col">
        <label for="name" class="text-white" style="font-size: 1.5rem;">Name</label>
        <input type="text" placeholder="Contact" wire:model="name">
    </div>

    <div class="flex flex-col">
        <label for="view_file" class="text-white" style="font-size: 1.5rem;">Blade file</label>
        <input type="text" placeholder="contact" wire:model="view_file">
    </div>


    <button type="submit" style="padding-inline:2rem; padding-block: 1rem; background: #4e3391; border-radius: 1.7rem; width:fit-content; align-self: center;">Save</button>
</form>