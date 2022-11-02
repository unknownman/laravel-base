<?php

namespace App\Http\Livewire\Autocomplete;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $email = "";
    public $user = null;
    public $user_id = null;

    public $result = [];

    public function updatingEmail()
    {
        $this->result = ModelsUser::where('email', 'like', '%' . $this->email . '%')->get()->toArray();
    }

    public function mount($user = null)
    {
        if (isset($user)) {
            $this->user = ModelsUser::find($user['id']);
            $this->user_id = $this->user['id'];
        }
    }

    public function select($item)
    {
        $this->user = ModelsUser::find($item);
        $this->user_id = $this->user->id;
        $this->email = "";
        $this->emit('user-select');
    }

    public function remove()
    {
        $this->user = null;
        $this->user_id = null;
        $this->reset(['user', 'user_id']);
        $this->emit('clear-user');
    }

    public function render()
    {
        return view('livewire.autocomplete.user');
    }
}
