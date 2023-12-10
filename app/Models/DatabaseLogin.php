<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatabaseLogin extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'password',
        'role'
    ];

}
