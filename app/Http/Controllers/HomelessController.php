<?php

namespace App\Http\Controllers;

use App\Homeless;
use App\Offer;

class HomelessController extends Controller {

    public function index()
    {
        $query = \Request::get('search');
        $homeless = Homeless::where('nickname','like','%'.$query.'%')->orderBy('nickname')
            ->paginate(20);;

        return view('homeless.index', compact('homeless'));
    }

	public function show($id)
	{
        $homeless = Homeless::findOrFail($id);

		return view('homeless.view', compact('homeless'));
	}

}
