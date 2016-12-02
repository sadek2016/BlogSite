<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    protected $primaryKew='id';
    protected $table='tbl_contact';

    protected $fillable = [
        'fname', 'lname', 'email','message','status','updated_at','created_at'
    ];
}
