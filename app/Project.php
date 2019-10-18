<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // more safe to use $fillable
    protected $fillable = [
        'title', 'description'
    ];

    // $guarded = [] is less safe.
    // protected $guarded = [];
}
