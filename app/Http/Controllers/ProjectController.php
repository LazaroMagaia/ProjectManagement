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
        $user = User::find(Auth::user()->id);
        $userId =$user->id;
        $project = $this->project->where("project_creator",$userId)->paginate();
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $project = $this->project->find($id);
        if(!$project)
        {
            return redirect()->back();
        }else
        {
            $project->update($data);//atraves da ralacao ele faz entre o plan e details
            return redirect()->route('project.home',[
                "projects"=>$project
            ]);
        }
    }
    public function destroy($id)
    {
        $project = $this->project->find($id);
        if(!$project)
        {
            return redirect()->back();
        }else
        {
            $project->delete();//atraves da ralacao ele faz entre o plan e details
            return redirect()->route('project.home');
        } 
    }
    public function show($id)
    {
        $project = $this->project->find($id);
        if(!$project)
        {
            return redirect()->back();
        }else
        {
            return view('admin.pages.project.show',[
                "project"=> $project
            ]);
        } 
    }
    public function success(Request $request,$id)
    {
        $data = $request->all();
        $project = $this->project->find($id);
        $status = $project->status;
        if($status == 1)
        {
            $data['status'] = false;
            $project->update($data);//troca o status para negativo
            return redirect()->route('project.home');
        }
        else 
        {
            $data['status'] = true;
            $project->update($data);//troca o status para positivo
            return redirect()->route('project.home');
        }
    }
}
