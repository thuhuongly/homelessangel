<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transactions';

    protected $fillable = array( 'user_id', 'offer_id', 'amount', 'address', 'date_pick_up');
}
