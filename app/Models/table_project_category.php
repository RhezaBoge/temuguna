<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_project_category extends Model
{
    //
    
    protected $table = 'table_project_category';
    protected $primaryKey = 'project_category_id';
	protected $fillable = ['project_category_name', 'project_category_description'];
}
