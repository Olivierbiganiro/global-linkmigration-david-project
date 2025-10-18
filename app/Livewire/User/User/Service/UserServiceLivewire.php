<?php

namespace App\Livewire\User\User\Service;

use App\Models\Service;
use Livewire\Component;

class UserServiceLivewire extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::where('status', true)->get();
    }

    public function render()
    {
        return view('livewire.user.user.service.user-service-livewire')->layout('layouts.app');
    }
}
