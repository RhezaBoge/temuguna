<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_users_detail extends Model
{
    //
  
    protected $table = 'table_users_detail';
    protected $primaryKey = 'users_detail_id';
    protected $fillable = ['users_detail_name', 'users_id','users_telp', 'users_group_id'];
}