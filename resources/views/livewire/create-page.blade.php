<form wire:submit="save" class="flex flex-col gap-4 py-6" style="width: 60%;">

    <div class="flex flex-col">
        <label for="title" class="text-white" style="font-size: 1.5rem;">Title</label>
        <input type="text" placeholder="Homepage" wire:model="title" class="rounded-md">
    </div>

    <div class="flex flex-col">
        <label for="slug" class="text-white" style="font-size: 1.5rem;">Page url</label>
        <input type="text" placeholder="home" wire:model="slug" class="rounded-md">
    </div>

    <div class="flex flex-col">
        <label for="slug" class="text-white" style="font-size: 1.5rem;">Template</label>
        <select wire:model="template" class="border rounded-md">
            <option value="">Select a Template</option>
            @foreach ($templates as $template)
            <option value="{{ $template->id }}">{{ $template->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="text-white" style="padding-inline:2rem; padding-block: 1rem; background: #4e3391; border-radius: 1.7rem; width:fit-content; align-self: center;">Save</button>
</form>