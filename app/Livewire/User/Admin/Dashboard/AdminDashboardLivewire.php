<?php

namespace App\Livewire\User\Admin\Dashboard;

use Livewire\Component;

class AdminDashboardLivewire extends Component
{
    public function render()
    {
        return view('livewire.user.admin.dashboard.admin-dashboard-livewire')->layout('layouts.app');
    }
}
