<?php namespace App\Http\Controllers;

class AngelController extends Controller {

    /**
     * Initializer.
     *
     * @return \AngelController
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('angel');
    }

}