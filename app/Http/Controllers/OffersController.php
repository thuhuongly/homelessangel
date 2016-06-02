<?php

namespace App\Http\Controllers;

use App\Offer;

class OffersController extends Controller {

    public function index()
    {
        $offers = Offer::paginate(5);
        $offers->setPath('offers/');

        return view('offer.index', compact('offers'));
    }

	public function show($id)
	{
		$offer = Offer::findOrFail($id);

		return view('offer.view', compact('offer'));
	}

}
