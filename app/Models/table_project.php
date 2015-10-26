<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_project extends Model
{
    //
    protected $table = 'table_project';
    protected $primaryKey = 'project_id';
	protected $fillable = ['project_title', 
							'project_headline', 
							'project_description', 
							'project_value', 
							'agency_id', 
							'project_category_id', 
							'project_issue_id', 
							'image_file', 
							'supporting_file', 
							'external_link', 
							'status'];
}
