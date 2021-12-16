<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private $prject;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function index()
    {
        $user = User::find(Auth::user()->id);
        $userId =$user->id;
        $projectsOFF = count($this->project->where('status',false)
        ->where('project_creator',$userId)->get());
        $projectsON = count($this->project->where('status',true)
        ->where('project_creator',$userId)->get());
        return view('admin.pages.index',[
            "projectsON"=>$projectsON,
            "projectsOFF"=>$projectsOFF
        ]);
    }
}
