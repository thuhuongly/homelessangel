<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeless extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'homeless';

    protected $fillable = array( 'user_id', 'nickname', 'date_of_birth', 'location', 'picture', 'homeless_years');
}