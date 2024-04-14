<?php

namespace App\Livewire;

use App\Models\Template;
use Livewire\Component;

class CreateTemplate extends Component
{
    public $name = '';

    public $view_file = '';

    public $templates;

    public function mount()
    {
        $this->templates = Template::all();
    }

    public function save()
    {
        Template::create(
            $this->only(['name', 'view_file'])
        );

        session()->flash('status', 'Template successfully created.');
 
        return $this->redirect('/templates');
    }

    public function render()
    {
        return view('livewire.create-template');
    }
}
