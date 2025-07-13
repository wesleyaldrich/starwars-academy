<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'role_id',
        'force_reward'
    ];
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function heroes()
    {
        return $this->belongsToMany(Hero::class);
    }
}
