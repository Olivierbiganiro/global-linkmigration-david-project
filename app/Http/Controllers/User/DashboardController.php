<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Auth;
use PDO;

class DashboardController extends Controller
{
    public function index()
    {
        $userRole = Auth::user()->user_role;

        // dd($userRole);
        if ($userRole === UserRole::ADMIN->value) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    }
}
