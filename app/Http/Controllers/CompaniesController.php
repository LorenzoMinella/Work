<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;
use Crypt;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companies = Company::orderBy('id','DESC')->get();
        return view('companies.index',compact('companies'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('companies.create');
    }
 

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'link_image' => 'required',
            'phone' => 'required',
            'url_web',
            'nivel_seguridad',
            'tecnologia',
            'diferencia',
            'precio',
            'contratar',
            'instalacion',
            'direccion',
            'permanencia',
            'baja',
            'facturacion',
        ]);

        DB::beginTransaction();

        $companies = new Company;
        $companies->name = $request->name;
        $companies->description = $request->description;
        $companies->link_image = "";
        $companies->phone = $request->phone;
        $companies->url_web = $request->url_web;
        $companies->nivel_seguridad = $request->nivel_seguridad;
        $companies->tecnologia = $request->tecnologia;
        $companies->diferencia = $request->diferencia;
        $companies->precio = $request->precio;
        $companies->contratar = $request->contratar;
        $companies->instalacion = $request->instalacion;
        $companies->direccion = $request->direccion;
        $companies->permanencia = $request->permanencia;
        $companies->baja = $request->baja;
        $companies->facturacion = $request->facturacion;

        $companies->save();

        if (!$companies) {
            DB::rollBack();
            return redirect()->route('companies.create')->with('alert-danger', 'Error Creando Compañia');
        }

        $companies1 = Company::find($companies->id);

        $filename = 'companies/'.$companies1->id.'_'.$request->link_image->getClientOriginalName();

        Storage::disk('imagenes')->put($filename, File::get($request->link_image));

        $route = 'imagenes/'.$filename;

        $companies1->link_image = $route;

        $companies1->save();

        if (!$companies1) {
            DB::rollBack();
            return redirect()->route('companies.create')->with('alert-danger', 'Error Creando Compañia');
        }

        DB::commit();

        return redirect()->route('companies.index')->with('message', 'Compañia Creada Exitosamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);

        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit',compact('company'));
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
            'name' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'url_web',
            'nivel_seguridad',
            'tecnologia',
            'diferencia',
            'precio',
            'contratar',
            'instalacion',
            'direccion',
            'permanencia',
            'baja',
            'facturacion',
        ]);

        $companies = Company::find($request->id);

        if (Input::hasFile('link_image')) {
            if (Input::file('link_image')->isValid()) {

                Storage::disk('imagenes')->delete(substr($companies->link_image, strpos($companies->link_image, '/'), strlen($companies->link_image)));

                DB::beginTransaction();

                $companies->name = $request->name;
                $companies->description = $request->description;
                $companies->phone = $request->phone;
                $companies->url_web = $request->url_web;
                $companies->nivel_seguridad = $request->nivel_seguridad;
                $companies->tecnologia = $request->tecnologia;
                $companies->diferencia = $request->diferencia;
                $companies->precio = $request->precio;
                $companies->contratar = $request->contratar;
                $companies->instalacion = $request->instalacion;
                $companies->direccion = $request->direccion;
                $companies->permanencia = $request->permanencia;
                $companies->baja = $request->baja;
                $companies->facturacion = $request->facturacion;

                $filename = 'companies/'.$companies->id.'_'.$request->link_image->getClientOriginalName();

                Storage::disk('imagenes')->put($filename, File::get($request->link_image));

                $route = 'imagenes/'.$filename;

                $companies->link_image = $route;

                $companies->save();

                if (!$companies) {
                    DB::rollBack();
                    return redirect()->route('companies.edit', ['id' => $id])->with('message', 'Error Modificando Compañia');
                }

                DB::commit();
            }
        } else {

                $companies->name = $request->name;
                $companies->description = $request->description;
                $companies->phone = $request->phone;
                $companies->url_web = $request->url_web;
                $companies->nivel_seguridad = $request->nivel_seguridad;
                $companies->tecnologia = $request->tecnologia;
                $companies->diferencia = $request->diferencia;
                $companies->precio = $request->precio;
                $companies->contratar = $request->contratar;
                $companies->instalacion = $request->instalacion;
                $companies->direccion = $request->direccion;
                $companies->permanencia = $request->permanencia;
                $companies->baja = $request->baja;
                $companies->facturacion = $request->facturacion;
                $companies->save();
        }

        return redirect()->route('companies.index')->with('message', 'Compañia Modificada Exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("companies")->where('id',$id)->delete();
        return redirect()->route('companies.index')
                        ->with('success','Compañia Eliminada con Éxito');
    }
}