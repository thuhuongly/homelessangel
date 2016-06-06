<?php

namespace App\Http\Controllers\Angel;

use App\Http\Controllers\AdminController;
use App\Offer;
use App\Angel;
use App\User;
use App\OfferCategory;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Angel\OfferRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;

class OfferController extends AdminController {

    public function __construct()
    {
        view()->share('type', 'offer');
    }
     /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        // Show the page
        return view('angel.offer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('angel.offer.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(OfferRequest $request)
    {
        $offer = new Offer($request->except('picture'));
        $offer -> user_id = Auth::id();

        $picture = "";
        if(Input::hasFile('picture'))
        {
            $file = Input::file('picture');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $offer -> picture = $picture;
        $offer -> save();

        if(Input::hasFile('picture'))
        {
            $destinationPath = public_path() . '/images/offer/'.$offer->id.'/';
            Input::file('picture')->move($destinationPath, $picture);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Offer $offer)
    {
        return view('angel.offer.create_edit',compact('offer'));
    }

    /**
     * Accept request
     *
     * @param  int  $id
     * @return Response
     */
    public function accept($offer, $notification)
    {
        $current = $offer->amount - 1;
        $offer->amount = $current;

        $angel = Angel::where('user_id','=',Auth::id())->first();
        $totalGiven = $angel->totalGiving + 1;
        $angel->totalGiving =  $totalGiven;

        $angel->update();
        $offer->update();

        $notification->is_read = 1;
        $notification->update();

        return view('angel.offer.index', compact('offer'));
    }

    /**
     * Reject request
     *
     * @param  int  $id
     * @return Response
     */
    public function reject($offer, $notification)
    {
        $notification->is_read = 1;
        $notification->update();
        $user = User::find(Auth::id());
        $unreadNotifications = $user->notifications()->unread()->get();

        return view('user.notifications', compact('unreadNotifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(OfferRequest $request, Offer $offer)
    {
        $offer -> user_id = Auth::id();
        $picture = "";
        if(Input::hasFile('image'))
        {
            $file = Input::file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $offer -> picture = $picture;
        $offer -> update($request->except('image'));

        if(Input::hasFile('image'))
        {
            $destinationPath = public_path() . '/images/offer/'.$offer->id.'/';
            Input::file('image')->move($destinationPath, $picture);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Offer $offer)
    {
        return view('angel.offer.delete', compact('offer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
    }


    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $offers = Offer::where('user_id','=',Auth::id())->get()
            ->map(function ($offer) {
                return [
                    'id' => $offer->id,
                    'type' => $offer->type,
                    'category' => $offer->category,
                    'description' => $offer->description,
                    'amount' => $offer->amount
                ];
            });
        return Datatables::of($offers)
            ->add_column('actions', '<a href="{{{ url(\'angel/offer/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("angel/modal.edit") }}</a>
                    <a href="{{{ url(\'angel/offer/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("angel/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')

            ->make();
    }
}
