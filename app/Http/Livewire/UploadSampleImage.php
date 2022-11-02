<?php

namespace App\Http\Livewire;

use App\Services\FileService;
use Livewire\WithFileUploads;
use Livewire\Component;

class UploadSampleImage extends Component
{
    use WithFileUploads;

    public $file;
    public $uploadedFile = "salam";


    protected function rules()
    {
        return [
            'file' => 'required|image|max:6000', // 1MB Max
        ];
    }

    public function upload()
    {
        $data = $this->validate();
        dd($data);

        // $return = [];
        // foreach ($this->files as $file) {
        //     $file->validate([
        //         'files.*' => 'image|max:6000', // 1MB Max
        //     ]);
        //     $return[] = FileService::upload($file, 'sample/image', 'sample');
        // }
        // dd($return);
        // return
        //     $return;
    }

    public function render()
    {
        return view('livewire.upload-sample-image');
    }
}
