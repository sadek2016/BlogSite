<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialModel extends Model
{
     protected $primaryKew='id';
    protected $table='tbl_social';

    protected $fillable = [
        'facebook', 'twitter', 'linkedin','googleplus'
    ];

    public $timestamps = false;
}
