<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postModel extends Model
{
    protected $primaryKew='id';
    protected $table='tbl_post';

    protected $fillable = [
        'cat', 'title', 'body','tag','author','updated_at','created_at'
    ];
    
}
