<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Offer;
use App\User;
use App\Http\Requests\Homeless\TransactionRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;

class TransactionController extends Controller{

    public function __construct()
    {
        view()->share('type', 'transaction');
    }

     /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        // Show the page
        return view('homeless.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($offer)
    {
        return view('homeless.transaction.create_edit', compact('offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TransactionRequest $request)
    {
        $input = $request->input();
        $transaction = new Transaction($input);
        $transaction -> user_id = Auth::id();
        $transaction -> save();

        $offer = Offer::findOrFail($request->input('offer_id'));
        //send notification
        $homeless = User::findOrFail(Auth::id());
        $nickname = $homeless->name;
        $angel = User::findOrFail($offer->user_id);
        $angel->newNotification()
            ->withType('Offer')
            ->withSubject('Your offer has been requested.')
            ->withBody($nickname.' has requested items from your offer!')
            ->regarding($offer)
            ->deliver();

        // Show the page
        return view('homeless.transaction.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Transaction $transaction)
    {
        return view('transaction.create_edit',compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $transaction -> user_id = Auth::id();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Transaction $transaction)
    {
        return view('homeless.transaction.delete', compact('transaction'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
    }


    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $transactions = Transaction::get()
            ->map(function ($transaction) {
                $offer = Offer::findOrFail($transaction->offer_id);
                return [
                    'id' => $transaction->id,
                    'offer' => $offer->type,
                    'address' => $transaction->address
                ];
            });
        return Datatables::of($transactions)
            ->add_column('actions', '<a href="{{{ url(\'homeless/transaction/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("angel/modal.edit") }}</a>
                    <a href="{{{ url(\'homeless/transaction/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("angel/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')

            ->make();
    }
}
