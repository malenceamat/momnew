<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_roles extends Model
{
    protected $table = 'role_user';

    protected $fillable = ['users_id','roles_id'];
}
