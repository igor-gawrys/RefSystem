<?php

namespace App\Http\Controllers;

use App\Ref;
use Illuminate\Http\Request;

class RefsController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Ref  $ref
     * @return \Illuminate\Http\Response
     */

    public function show(Ref $ref)
    {
        
        return redirect()->to( $ref->redirect );

    }

}
