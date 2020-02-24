<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //
    protected $fillable = ['name','department_id','student_identification','sex','grade','year'];
}
