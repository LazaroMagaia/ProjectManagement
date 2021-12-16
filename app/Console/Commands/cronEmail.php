<?php

namespace App\Console\Commands;

use App\Mail\Remeber;
use App\Models\Project;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notification email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $projects = DB::table('projects')
        ->where('done_project',now()->format('Y-m-d'))
        ->where('status',false)
        ->orderBy("id")->get();

        $data =[];

        foreach($projects as $project)
        {
            $data[$project->id] = $projects->toArray();
        }

        foreach ($data as $projectId => $value) {
            $this->sendEmailToUser($projectId,$value); 
        }
    }
    public function sendEmailToUser($projectId,$value)
    {
        $project = Project::find($projectId);
        $user = User::find($project->project_creator);
        Mail::to($user)->send(new Remeber($value,$user));
        
    }
}
