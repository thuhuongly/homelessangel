<?php

namespace App\Http\Controllers;

use App\Offer;

class OffersController extends Controller {

    public function index()
    {

        $query = \Request::get('search');
        print($query);
        $offers = Offer::where('category','like','%'.$query.'%')->where('amount', '>', 0)->orderBy('type')
            ->paginate(20);;

        return view('offer.index', compact('offers'));
    }

	public function show($id)
	{
		$offer = Offer::findOrFail($id);

		return view('offer.view', compact('offer'));
	}

}
