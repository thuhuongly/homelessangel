<?php

namespace App\Http\Controllers;

use App\Angel;

class AngelsController extends Controller {

    public function index()
    {
        $query = \Request::get('search');
        $angels = Angel::where('name','like','%'.$query.'%')->orderBy('name')
            ->paginate(20);;

        return view('angel.index', compact('angels'));
    }

	public function show($id)
	{
		$angel = Angel::findOrFail($id);

		return view('angel.view', compact('angel'));
	}
}
