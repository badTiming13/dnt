<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();

        $model = "templates";
    
        $fields = ['ID', 'Name', 'Blade file'];

        $values = $templates->map(function ($template) {
            return [
                $template->id,
                $template->name,
                $template->view_file,
            ];
        })->toArray();

        return view('templates.index', compact('templates', 'fields', 'values', 'model'));
    }

    public function show($name)
    {
        $template = Template::where('name', $name)->firstOrFail();

        return view('templates.show', compact('template'));
    }

    public function edit($id)
    {
        $template = Template::findOrFail($id);

        return view('templates.edit', compact('template'));
    }

    public function delete($id)
    {
        $template = Template::findOrFail($id);

        $template->delete();

        return redirect()->route('templates.index')->with('success', 'Template deleted successfully.');
    }

    public function create()
    {
        return view('templates.create');
    }
}
