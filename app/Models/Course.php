<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    protected $fillable = [
        'title',
        'force_reward',
        'role_id'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function heroes()
    {
        return $this->belongsToMany(Hero::class);
    }
}
