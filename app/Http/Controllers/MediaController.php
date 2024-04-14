<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {

        $files = File::all();
        $fields = ['ID', 'Name', 'Type', 'Size'];
        $model = "files";

        $values = $files->map(function ($file) {
            $fileSizeMB = round($file->size / 1024 / 1024, 2);
            return [
                $file->id,
                $file->name,
                $file->type,
                $fileSizeMB . 'MB',
            ];
        })->toArray();

        return view('media.index', compact('files', 'fields', 'values', 'model'));
    }

    public function delete($id)
    {

        $file = File::findOrFail($id);

        Storage::disk('public')->delete($file->path);

        $file->delete();

        return redirect()->route('media.index')->with('success', 'File deleted successfully.');
    }
}
