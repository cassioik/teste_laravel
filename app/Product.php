<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use LogsActivity;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];

    //protected static $logAttributes = ['name', 'detail'];
    protected static $logFillable = true;
}
