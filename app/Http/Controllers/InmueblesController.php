<?php

namespace App\Http\Controllers;

use App\Inmuebles;
use Illuminate\Http\Request;

class InmueblesController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$inmmuebles=Inmuebles::all();

return view('inmmuebles.index',compact('inmmuebles'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('inmmuebles.create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request

* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$buscar=Inmuebles::where('idem',$request->idem)->get();
if (count($buscar)>0) {
dd('idem ya registrado');
return redirect()->back();
} else {
$inmueble=new Inmuebles();
$inmueble->idem=$request->idem;
$inmueble->tipo=$request->tipo;
$inmueble->status=$request->status;
$inmueble->save();
return redirect()->to('inmuebles');
}

}

/**
* Display the specified resource.
*
* @param \App\Inmuebles $inmuebles
* @return \Illuminate\Http\Response
*/
public function show(Inmuebles $inmuebles)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param \App\Inmuebles $inmuebles
* @return \Illuminate\Http\Response

*/
public function edit($id_inmueble)
{
$inmueble=Inmuebles::find($id_inmueble);

return view('inmuebles.edit',compact('inmueble'));
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Inmuebles $inmuebles
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id_inmueble)
{
$buscar=Inmuebles::where('idem',$request->idem)->where('id','<>',$id_inmueble)->get();
if (count($buscar)>0) {
dd('idem ya registrado');
return redirect()->back();
} else {
$inmueble=new Inmuebles();
$inmueble->idem=$request->idem;
$inmueble->tipo=$request->tipo;
$inmueble->status=$request->status;
$inmueble->save();
return redirect()->to('inmuebles');
}
}

/**
* Remove the specified resource from storage.
*
* @param \App\Inmuebles $inmuebles

* @return \Illuminate\Http\Response
*/
public function destroy(Inmuebles $inmuebles)
{
//
}
}