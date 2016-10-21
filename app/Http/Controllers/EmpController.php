<?php

namespace App\Http\Controllers;
use App\Emp;
use App\Http\Requests\Emprequest;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\Emperquest;

class EmpController extends MasterController
{
    var $model = "Emp";

    public function store(Request $request )
    {
        parent::store($request);
    }
}
