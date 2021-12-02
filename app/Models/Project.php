<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_project',
        'done_project',
        'Price',
        'method',
        'project_creator',
        'description',
        'status'
    ];
}
