<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Component;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        $fields = ['ID', 'Title', 'URL'];
        $model = "pages";
        $values = $pages->map(function ($page) {
            return [
                $page->id,
                $page->title,
                $page->slug,
            ];
        })->toArray();

        return view('pages.index', compact('pages', 'fields', 'values', 'model'));
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('page'));
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);

        $components = Component::all();

        return view('pages.edit', compact('page', 'components'));
    }

    public function delete($id)
    {
        $page = Page::findOrFail($id);

        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }

    public function create()
    {
        return view('pages.create');
    }
}
