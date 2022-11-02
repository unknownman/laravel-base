<?php

namespace App\Http\Livewire\File;

use App\Models\File;
use App\Services\FileService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $file;
    public $uploadedFile = false;
    public $rule = 'required';
    protected $rules = [
        'file' => 'required'
    ];

    public function mount($rule)
    {
        $this->rule =
            $rule;
    }

    public function update()
    {
        $this->validate()->reset();
    }

    public function upload($path = 'files', $collection = 'other')
    {
        $this->validate([
            'file' => $this->rule
        ]);

        $store = $this->file->storeAs($path, $this->file->hashName(), 'public');
        $this->uploadedFile = new File();

        $this->uploadedFile->name = $this->file->hashName();
        $this->uploadedFile->alt = NULL;
        $this->uploadedFile->title = NULL;
        $this->uploadedFile->file_name = $this->file->getClientOriginalName();
        $this->uploadedFile->mime_type = $this->file->getClientMimeType();
        $this->uploadedFile->path = $path . DIRECTORY_SEPARATOR . $this->file->hashName();
        $this->uploadedFile->disk = 'public';
        $this->uploadedFile->file_hash = hash_file(
            config('app.uploads.hash'),
            storage_path(
                path: "app/public/" . $path . DIRECTORY_SEPARATOR . $this->file->hashName(),
            ),
        );
        $this->uploadedFile->collection = $collection;
        $this->uploadedFile->size = $this->file->getSize();
        $this->uploadedFile->save();
        $this->emit('fileUploaded', $this->uploadedFile->id);
        session()->flash('message', 'File upload successfully.');
    }

    public function render()
    {
        return view('livewire.file.upload');
    }
}
