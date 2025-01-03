<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model 
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 
        'country_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [

    ];
}
