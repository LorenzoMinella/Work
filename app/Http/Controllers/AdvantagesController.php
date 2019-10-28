<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\Advantage;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;
use Crypt;

class AdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $id_company = $id;
        $advantages = Advantage::where('company_id','=', $id)->get();
        return view('companies.advantages.index',compact('advantages', 'id_company'));
    }


    public function create(Request $request, $id)
    {
        $id_company = $id;
        return view('companies.advantages.create', compact('id_company'));
    }
 

    public function store(Request $request)
    {


        $this->validate($request, [
            'content' => 'required',
            'company_id' => 'required',
            'advatage_disadvantage' => 'required',
        ]);

        DB::beginTransaction();

        $advantages = new Advantage;
        $advantages->content = $request->content;
        $advantages->company_id = $request->company_id;
        $advantages->advatage_disadvantage = $request->advatage_disadvantage;

        $advantages->save();

        if (!$advantages) {
            DB::rollBack();
            return redirect()->route('advantages.create', $request->company_id)->with('alert-danger', 'Error Creando Ventaja/Desventaja');
        }

        DB::commit();

        return redirect()->route('advantages.index', $request->company_id)->with('success', 'Ventaja/Desventaja Creada Exitosamente.');
    }

 
    public function edit($id)
    {
        $advantages = Advantage::find($id);
        return view('companies.advantages.edit',compact('advantages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'required',
            'company_id' => 'required',
            'advatage_disadvantage' => 'required',
        ]);



        $advantages = Advantage::find($id);
        $advantages->content = $request->content;
        $advantages->company_id = $request->company_id;
        $advantages->advatage_disadvantage = $request->advatage_disadvantage;

        $advantages->update();


        return redirect()->route('advantages.index', $request->company_id)->with('success', 'Ventaja/Desventaja Modificada Exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        DB::table("advantages")->where('id',$id)->delete();
        return redirect()->route('advantages.index', $request->company_id)
                        ->with('success','Ventaja/Desventaja Eliminada con Éxito');
    }
}