<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin/adminDashboard');
    }

    public function menu(): string
    {
        return view('admin/menu');
    }

    public function accounts(): string
    {
        return view('admin/accounts');
    }

    public function orders(): string
    {
        return view('admin/orders');
    }
}
