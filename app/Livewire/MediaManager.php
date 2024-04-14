<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class MediaManager extends Component
{
    use WithFileUploads;

    public $files = [];

    public function saveFiles()
    {
        foreach ($this->files as $file) {
            $fileType = '';
            if ($file) {
                $filePath = $file->store('uploads', 'public');
                switch (strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION))) {
                    case 'webp':
                        $fileType = 'webp';
                        break;
                    case 'mp4':
                        $fileType = 'video';
                        break;
                    // Add more cases for other file types as needed
                    default:
                        $fileType = 'other';
                        break;
                }

                // Save file data to the database
                File::create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $filePath,
                    'type' => $fileType,
                    'size' => $file->getSize(),
                ]);
            }
        }

        // Clear the file input after uploading
        $this->reset('files');

        // Optionally, you can display a success message or perform other actions after uploading files
        session()->flash('message', 'Files uploaded successfully.');
    }


    public function render()
    {
        return view('livewire.media-manager');
    }
}
