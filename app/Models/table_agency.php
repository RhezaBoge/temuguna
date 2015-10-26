<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_agency extends Model
{
    //
    protected $table = 'table_agency';
    protected $primaryKey = 'agency_id';
	protected $fillable = ['agency_name', 'agency_description', 'external_link'];
}
