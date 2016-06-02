<?php

namespace App\Http\Controllers;

use App\Offer;
use App\PhotoAlbum;
use DB;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$offers = Offer::get();
		return view('pages.home', compact('offers'));
	}

}