<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Technology;

class DashboardController extends Controller
{
    public function index(){
        $projects = Project::all();
        $categories = Category::all();
        $technologies = Technology::all();
        return view('admin.dashboard', compact('projects', 'categories', 'technologies'));
    }

}
