<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        //return 'Admin dashboard';
        return view('admin.dashboard');
    }
}
