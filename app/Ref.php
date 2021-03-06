<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ref extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'slug',

        'redirect',

        "last_visited_at"

    ];
    
    function getRouteKeyName()
    {
        
        return 'slug';
        
    }
    
}
