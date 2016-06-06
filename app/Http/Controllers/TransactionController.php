<?php

namespace App\Http\Controllers;

use App\Transaction;
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
        return view('transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($offerId)
    {
        return view('homeless.transaction.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TransactionRequest $request)
    {
        $transaction = new Transaction($request);
        $transaction -> user_id = Auth::id();

        $transaction -> save();
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
        return view('transaction.delete', compact('transaction'));
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
                return [
                    'id' => $transaction->id,
                    'type' => $transaction->type,
                    'category' => $transaction->category,
                    'description' => $transaction->description,
                    'amount' => $transaction->amount
                ];
            });
        return Datatables::of($transactions)
            ->add_column('actions', '<a href="{{{ url(\'transaction/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("angel/modal.edit") }}</a>
                    <a href="{{{ url(\'transaction/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("angel/modal.delete") }}</a>
                    <input type="hidden" name="row" value="{{$id}}" id="row">')
            ->remove_column('id')

            ->make();
    }
}
