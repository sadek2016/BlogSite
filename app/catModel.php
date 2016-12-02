<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catModel extends Model
{
    
    protected $primaryKew='id';
    protected $table='tbl_category';

   protected $fillable=array('category');
   public $timestamps = false;
}
