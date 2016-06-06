<?php

namespace App\Http\Controllers;

use App\Angel;

class AngelsController extends Controller {

    public function index()
    {
        $angels = Angel::paginate(5);
        $angels->setPath('angels/');

        return view('angel.index', compact('angels'));
    }

	public function show($id)
	{
		$angel = Angel::findOrFail($id);

		return view('angel.view', compact('angel'));
	}

}
