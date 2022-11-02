<?php

namespace App\Http\Livewire\Admin\Department;

use Livewire\Component;

use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
    public Department $department;
    public ?Department $parent = null;
    public ?User $user = null;


    public $rules = [
        'department.title' => 'required|string|min:6',
        'department.description' => 'string',
        'department.department_id' => 'nullable|integer',
        'department.user_id' => 'nullable|integer',
    ];
    protected $messages = [
        'department.required' => 'عنوان ضروری ست.',
    ];

    protected $listeners = [
        'clear-department' => 'clearParent',
        'clear-user' => 'clearUser',
        'select-department' => "updatingParent",
        'select-user' => "updatingUser",
    ];

    public function clearParent()
    {
        $this->reset('parent');
        $this->department['department_id'] = null;
    }
    public function clearUser()
    {
        $this->reset('user');
        $this->department['user_id'] = null;
    }

    public function mount($department = null)
    {
        if (isset($department) && $department['id']) {
            $this->department =
                Department::find($department->id);
        } else
            $this->department = new Department();
        if (isset($department) && $department['department_id'])
            $this->parent = Department::find($department['department_id']);
        if (isset($department) &&  $department['user_id'])
            $this->user = User::find($department['user_id']);
    }




    public function updatingParent($parent = null)
    {

        $this->department['department_id'] = isset($parent) && isset($parent['id']) ? $parent['id'] : null;
    }
    public function updatingUser($user)
    {
        $this->department['user_id'] = isset($user) && $user['id'] ? $user['id'] : null;
    }

    public function save()
    {
        $this->validate();

        if (isset($this->parent))
            $this->department->department_id = $this->parent->id;
        if (isset($this->user))
            $this->department->user_id = $this->user->id;
        else  $this->department->user_id = Auth::id();
        if ($this->department->save()) {
            session()->flash('success', 'Department successfully added.');
        }
        return redirect()->route('admin.departments.index');
    }

    public function render()
    {
        return view('livewire.admin.department.form');
    }
}
