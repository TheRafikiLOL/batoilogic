<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->hasOne('App\Models\Customers');
    }
    public function dealers()
    {
        return $this->hasOne('App\Models\Dealers');
    }
}
