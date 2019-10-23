<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = DB::table('users')
            ->leftjoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->leftjoin('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('users.id', '!=', Auth::user()->id)
            ->select('users.*', 'roles.display_name')
            ->get();

        return view('usuarios.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name', 'id');
        return view('usuarios.create',compact('roles'));
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
            'email' => 'required|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6',
            'roles' => 'required',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (!empty($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        $user->attachRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','Usuario creado exitosamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('users')
            ->leftjoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->leftjoin('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('users.id', '=', $id)
            ->select('users.name', 'users.email', 'roles.display_name', 'roles.id as rol')
            ->first();

        $roles = Role::pluck('display_name', 'id');

        return view('usuarios.show',compact('users', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::table('users')
            ->leftjoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->leftjoin('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('users.id', '=', $id)
            ->select('users.*', 'roles.id as rol')
            ->first();

        $roles = Role::pluck('display_name', 'id');

        return view('usuarios.edit',compact('users', 'roles'));
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
            'email' => 'required',
            'name' => 'required',
            'roles' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (!empty($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->update();
        DB::table('role_user')->where('user_id',$id)->delete();
        $user->attachRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','Usuario Actualizado con Éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("users")->where('id',$id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Usuario Eliminado con Éxito');
    }
}