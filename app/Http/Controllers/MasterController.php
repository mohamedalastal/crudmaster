<?php

namespace App\Http\Controllers;
use App\Emp;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\Emperquest;

class MasterController extends Controller
{

    var $model = null;

    public function __construct(Request $request){
        if(!$this->model){
            $this->model = $request->segment(1);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = $this->model;

        $modelname = 'App\\'.ucfirst($model);
        $data = $modelname::get();

        $type = "index";
        return $this->renderView($model, $type, $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->model;
        $modelname = 'App\\'.ucfirst($model);
        $data =new $modelname;
        $type = "form";
        return $this->renderView($model, $type, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $model = $this->model;
        $modelname = 'App\\'.ucfirst($model);
        $input = $request->all();
        $data = new $modelname($input);
        $data->save();
        return redirect()->route('index',$model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp =  Emp::find($id);
        return view('emp.show',compact('emp'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $model = $this->model;
        $modelname = 'App\\'.ucfirst($model);
        $data =$modelname::find($id);
        return view($model.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $model = $this->model;
        $modelname = 'App\\'.ucfirst($model);
        $input = $request->all();
        $data = $modelname::find($id);
        $data->fill($input);
        $data->save();

        return redirect()->route(strtolower($model).'.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = $this->model;
        $modelname = 'App\\'.ucfirst($model);
        $modelname::destroy($id);
        return redirect()->route(strtolower($model).'.index');
    }

    /**
     * @param $model
     * @param $type
     * @param $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function renderView($model, $type, $data)
    {
        if (!\View::exists("$model.$type")) {
            return view("default.$type", compact('data'));
        } else {
            return view("$model.$type", compact('data'));
        }
    }


}
