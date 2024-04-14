<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Template;
use Livewire\Component;

class CreatePage extends Component
{
    public $title = '';

    public $slug = '';

    public $content = '';

    public $template = '';
    public $templates;

    public function mount()
    {
        $this->templates = Template::all();
    }
    public function save()
    {
        $template = Template::findOrFail($this->template);
        $content = $this->content ? $this->content : '{}';
        Page::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $content,
            'template_id' => $template->id, 
        ]);
        
        session()->flash('status', 'Page successfully created.');

        return $this->redirect('/pages');
    }

    public function render()
    {
        return view('livewire.create-page');
    }
}
