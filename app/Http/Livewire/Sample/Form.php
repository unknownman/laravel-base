<?php

namespace App\Http\Livewire\Sample;

use App\Models\File;
use App\Models\Sample;
use Livewire\Component;

class Form extends Component
{
    public Sample $sample;
    public ?File $image = null;

    public $rules = [
        'sample.title' => 'required|string|min:6',
        'sample.description' => 'string',
    ];
    protected $messages = [
        'sample.title.required' => 'عنوان ضروری ست.',
    ];

    protected $listeners = ['fileUploaded' => 'setImage'];

    public function mount()
    {
        $this->sample = new Sample();
    }

    public function setImage(File $file)
    {
        $this->image = $file;
    }


    public function save()
    {
        $this->validate();

        if (isset($this->image))
            $this->sample->image_id = $this->image->id;
        $this->sample->save();
    }

    public function render()
    {
        return view('livewire.sample.form');
    }
}
