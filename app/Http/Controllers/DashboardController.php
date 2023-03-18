<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $todo = TodoItem::count();
        return view('dashboard', compact('todo'));
    }
}
