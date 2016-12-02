<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class websiteModel extends Model
{
    protected $primaryKey='id';
   	protected $table='tbl_website';
   	protected $fillable=['title','slogan'];
   	public $timestamps = false;
}
