<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Action;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index')
        ->with('actions_count',Action::count())
        ->with('users_count',User::count())
        ->with('categories_count',Category::count());
    }
}
