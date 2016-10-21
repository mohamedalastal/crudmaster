<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    protected $table = 'emps';
    protected $fillable = ['name','address','mobile'];

}
