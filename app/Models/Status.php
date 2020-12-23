<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/** @mixin Builder */
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
