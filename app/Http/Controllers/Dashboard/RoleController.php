<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('dashboard.roles.index');
    }

    public function create()
    {
        return view('dashboard.roles.create');
    }
}
