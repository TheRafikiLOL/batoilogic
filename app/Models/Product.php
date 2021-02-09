<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function provider()
    {
        return $this->hasOne('App\Models\Provider');
    }
    public function orderLines()
    {
        return $this->hasMany('App\Models\OrderLines');
    }
}
