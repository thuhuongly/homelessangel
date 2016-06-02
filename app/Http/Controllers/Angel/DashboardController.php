<?php namespace App\Http\Controllers\Angel;

use App\Http\Controllers\AngelController;
use App\Offer;

class DashboardController extends AngelController {

    public function __construct()
    {
        parent::__construct();
        view()->share('type', '');
    }

	public function index()
	{
        $title = "Dashboard";

        $services = Offer::get()
            ->map(function ($service) {
                return [
                    'id' => $service->id,
                    'type' => $service->type,
                    'category' => $service->category,
                    'description' => $service->description,
                    'amount' => $service->amount
                ];
            });
        return Datatables::of($services)
            ->add_column('actions', '<a href="{{{ url(\'angel/offer/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("angel/modal.edit") }}</a>
                    <a href="{{{ url(\'angel/offer/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("angel/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')

            ->make();
		return view('angel.dashboard.index',  compact('title','services'));
	}
}