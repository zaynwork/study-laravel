<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    //
    public function __invoke()
    {
        return view('features');
    }
}
