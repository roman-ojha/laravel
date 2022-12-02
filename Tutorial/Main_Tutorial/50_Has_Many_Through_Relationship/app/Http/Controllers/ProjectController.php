<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // function to add project
    public function add_project()
    {
        $project = new Project();
        $project->name = "ECommerce";
        $project->save();
    }
}
