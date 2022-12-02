<?php

namespace App\Http\Controllers;

use App\Models\Deployment;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class DeploymentController extends Controller
{
    // function to add deployment data base on given id
    public function add_deployment($id)
    {
        // $id is the 'id' of Language Model

        $language = Language::find($id);

        $deployment = new Deployment();
        $deployment->work = 'pending';
        $language->deployment()->save($deployment);
    }

    // function to get deployment data based on Project id
    public function get_deployment($id)
    {
        // we will get that is the Deployment status of the Project
        // WithOut 'hasManyThrough':

        $project = Project::find($id);

        // because we will get multiple language we will use 'flatMap'
        $deployment = $project->language->flatMap->deployment;

        // Using 'hasManyThrough':
        $project = Project::find($id);
        $deployment = $project->deployment;
        return $deployment;
    }
}
