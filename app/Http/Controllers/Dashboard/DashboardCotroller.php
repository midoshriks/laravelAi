<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardCotroller extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
}
