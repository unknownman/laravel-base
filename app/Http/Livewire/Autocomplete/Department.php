<?php

namespace App\Http\Livewire\Autocomplete;

use App\Models\Department as Model;
use Livewire\Component;

class Department extends Component
{
    public $title = "";
    public $department = null;
    public $department_id = null;

    public $result = [];

    public function updatingTitle()
    {
        $this->result = Model::where('title', 'like', '%' . $this->title . '%')->get()->toArray();
    }

    public function mount($department_id = null)
    {
        if (isset($department_id) && abs($department_id)) {
            $this->department_id = $department_id;
            $this->department = Model::find($department_id);
        }
    }

    public function select($item)
    {
        $this->department = Model::find($item);
        $this->department_id = $this->department->id;
        $this->title = "";
        $this->emit('select-department', $this->department);
    }

    public function remove()
    {
        $this->department = null;
        $this->department_id = null;
        $this->reset(['department', 'department_id']);
        $this->emit('clear-department');
    }

    public function render()
    {
        return view('livewire.autocomplete.department');
    }
}
