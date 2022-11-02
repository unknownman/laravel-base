<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Department;
use Livewire\Component;

class Datagrid extends Component
{
    public $departments;
    protected $listeners = ['refreshComponent' => '$refresh'];


    public function edit($v)
    {
        return redirect()->route('admin.departments.edit', ["department" => $v['id']]);
    }

    public function remove($id)
    {
        $department = Department::find($id);
        $department->delete();
        $this->emitSelf('refreshComponent');
    }

    public function search()
    {
    }

    public function changePage()
    {
    }

    public function render()
    {
        $this->departments = Department::all();
        return view('livewire.admin.department.datagrid');
    }
}
