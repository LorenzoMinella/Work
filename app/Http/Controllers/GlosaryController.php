<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use App\Glosary;
use DB;

class GlosaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $glosaries = Glosary::all();
        return view('glosario.index',compact('glosaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('glosario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
        ]);

        $glosary = new Glosary();
        $glosary->name = $request->input('name');
        $glosary->content = $request->input('content');
        $glosary->save();

        return redirect()->route('glosaries.index')
                        ->with('success','Palabra creada exitosamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")
            ->where("permission_role.role_id",$id)
            ->get();

        return view('roles.show',compact('role','rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $glosary = Glosary::find($id);
 
        return view('glosario.edit',compact('glosary'));
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
            'content' => 'required',
        ]);


        $glosary = Glosary::find($id);
        $glosary->name = $request->input('name');
        $glosary->content = $request->input('content');
        $glosary->update();

        return redirect()->route('glosaries.index')
                        ->with('success','Palabra Actualizada con Exito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("glosaries")->where('id',$id)->delete();
        return redirect()->route('glosaries.index')
                        ->with('success','Palabra Eliminada con Éxito');
    }
}