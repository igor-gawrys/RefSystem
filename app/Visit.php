<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'ref_id'

    ];

    public function ref() {

        return $this->hasOne( 'App\Ref', 'id', 'ref_id' );

    }
}
