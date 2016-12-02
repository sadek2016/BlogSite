<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentModel extends Model
{
    protected $primaryKew='com_id';
    protected $table='tbl_comment';

    protected $fillable = [
        'single_comment', 'name', 'email','comment','updated_at','created_at'
    ];
}
