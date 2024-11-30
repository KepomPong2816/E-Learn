<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'md_auth';
    protected $primaryKey = 'USER_CODE';    
    public $timestamps = false;
}
