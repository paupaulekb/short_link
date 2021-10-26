<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shorturl extends Model
{
    protected $table = 'shorturl';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'oldurl',
        'shorturl',
    ];
}
