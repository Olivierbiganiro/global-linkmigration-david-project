<?php

namespace App\Livewire\User\User\Dashboard;

use Livewire\Component;

class UserDashboardLivewire extends Component
{
    public function render()
    {
        return view('livewire.user.user.dashboard.user-dashboard-livewire')->layout('layouts.app');
    }
}
