<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_users_group extends Model
{
    //
  
    protected $table = 'table_users_group';
    protected $primaryKey = 'users_group_id';
    protected $fillable = ['users_group_name', 'users_group_description'];
}