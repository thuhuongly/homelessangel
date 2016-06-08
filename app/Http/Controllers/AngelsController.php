<?php

namespace App\Http\Controllers;

use App\Angel;
use App\Offer;

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
        $offers = Offer::where('user_id','=',$angel->user_id)->get();
		return view('angel.view', compact('angel', 'offers'));
	}
}
