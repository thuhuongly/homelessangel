<?php

namespace App\Http\Controllers;

use App\Homeless;
use App\Offer;

class HomelessController extends Controller {

    public function index()
    {
        $homeless = Homeless::paginate(5);
        $homeless->setPath('homeless/');

        return view('homeless.index', compact('homeless'));
    }

	public function show($id)
	{
        $homeless = Homeless::findOrFail($id);

		return view('homeless.view', compact('homeless'));
	}

}
