<?php

namespace App\Http\Livewire\Sample;

use App\Models\Sample;
use Livewire\Component;

class Datagrid extends Component
{
    public $samples;
    public function render()
    {
        $this->samples = Sample::all();
        return view('livewire.sample.datagrid');
    }
}
