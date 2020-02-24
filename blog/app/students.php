<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class students extends Model
{
    //
    protected $table = 'students';
    public $primarykey = 'id';
    public $timestamps = true;
 
 public function user(){
 	return $this->belongsTo('App\user');
 }


}
