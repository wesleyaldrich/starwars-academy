<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    
    public function heroes()
    {
        return $this->hasMany(Hero::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
