<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    private $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function index()
    {
        $project = $this->project->latest()->paginate();
        return view('admin.pages.project.index',[
            "projects"=>$project
        ]);
    } 
    public function create()
    {
        return view('admin.pages.project.create');
    }
    public function store(Request $request,User $user)
    {
        $data = $request->all();
        $user = User::find(Auth::user()->id);
        $data['project_creator'] = $user->id;
        $data['status'] = false;
        $this->project->create($data);
        return redirect()->route('project.home');
    }
    public function edit($id)
    {
        $project = $this->project->find($id);
        if(!$project)
        {
            return redirect()->back();
        }else
        {
            return view("admin.pages.project.edit",[
                'project'=>$project
            ]);
        }
    }
}
