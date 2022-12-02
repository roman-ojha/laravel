<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // function to add language data base on given id
    public function add_language($id)
    {
        // $id is the 'id' of Project Model
        // on a save project we will add multiple Language
        $project = Project::find($id);
        $language = new Language();
        $language->name = "Python";
        $project->language()->save($language);

        $language = new Language();
        $language->name = "Typescript";
        $project->language()->save($language);

        $language = new Language();
        $language->name = "PHP";
        $project->language()->save($language);
    }
}
