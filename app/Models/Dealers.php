<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealers extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Orders');
    }
}
