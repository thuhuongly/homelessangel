<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angel extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'angels';

    protected $fillable = array( 'user_id', 'name', 'address', 'profession', 'date_of_birth', 'anonymous', 'picture');
}
