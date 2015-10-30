<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_media_manager extends Model
{
    //
    protected $table = 'table_media_manager';
    protected $primaryKey = 'media_manager_id';
	protected $fillable = ['media_manager_type', 'media_manager_filename'];
}
