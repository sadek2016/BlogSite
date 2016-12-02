<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pageModel extends Model
{
     protected $primaryKew='id';
    protected $table='tbl_page';

    protected $fillable = ['name', 'body' ];
    public $timestamps = false;
}
