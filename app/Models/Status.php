<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = 'statuses';

    /**
     * @var array
     */
    protected $fillable = [
        'status'
    ];


}