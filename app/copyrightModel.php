<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class copyrightModel extends Model
{
     protected $primaryKew='id';
    protected $table='tbl_copyright';

    protected $fillable = ['copyright'];

    public $timestamps = false;
}
