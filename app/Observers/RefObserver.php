<?php

namespace App\Observers;

use App\Ref;

use App\Visit;

class RefObserver
{
    /**
     * Handle the ref "created" event.
     *
     * @param  \App\Ref  $ref
     * @return void
     */
    public function created(Ref $ref)
    {
        //
    }

    /**
     * Handle the ref "updated" event.
     *
     * @param  \App\Ref  $ref
     * @return void
     */
    public function updated(Ref $ref)
    {
        

    }

    public function retrieved( Ref $ref ) {


        $ref->update([ 

           "last_visited_at" => now()

        ]);

        Visit::create( [ 

            "ref_id" => $ref->id

        ] );

    }
    
    /**
     * Handle the ref "deleted" event.
     *
     * @param  \App\Ref  $ref
     * @return void
     */
    public function deleted(Ref $ref)
    {
        //
    }

    /**
     * Handle the ref "restored" event.
     *
     * @param  \App\Ref  $ref
     * @return void
     */
    public function restored(Ref $ref)
    {
        //
    }

    /**
     * Handle the ref "force deleted" event.
     *
     * @param  \App\Ref  $ref
     * @return void
     */
    public function forceDeleted(Ref $ref)
    {
        //
    }
}
