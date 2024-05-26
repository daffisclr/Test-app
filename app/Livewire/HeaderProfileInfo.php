<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HeaderProfileInfo extends Component
{
    public $user;
    public $alumni;

    public $listeners = [
        'updateHeaderInfo' => 'refresh'
    ];

    public function mount()
    {
        if (Auth::guard('user')->check()) {
            $this->user = User::findOrFail(auth()->id());
        }
    }

    public function render()
    {
        return view('livewire.header-profile-info');
    }
}
