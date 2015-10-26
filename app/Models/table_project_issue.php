<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_project_issue extends Model
{
    //
  
    protected $table = 'table_project_issue';
    protected $primaryKey = 'project_issue_id';
    protected $fillable = ['project_issue_name', 'project_issue_description'];
}