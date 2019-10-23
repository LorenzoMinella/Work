<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;
use Crypt;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->paginate(5);
        return view('banners.index',compact('banners'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('banners.create');
    }
 

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'banner_url' => 'required',
            'link_url' => 'required',
        ]);

        DB::beginTransaction();

        $banner = new Banner;
        $banner->title = $request->title;
        $banner->link_url = $request->link_url;
        $banner->banner_url = "";
        $banner->save();

        if (!$banner) {
            DB::rollBack();
            return redirect()->route('banners.create')->with('alert-danger', 'Error Creando Banner');
        }

        $banner1 = Banner::find($banner->id);

        $filename = 'banners/'.$banner1->id.'_'.$request->banner_url->getClientOriginalName();

        Storage::disk('imagenes')->put($filename, File::get($request->banner_url));

        $route = 'imagenes/'.$filename;

        $banner1->banner_url = $route;

        $banner1->save();

        if (!$banner1) {
            DB::rollBack();
            return redirect()->route('banners.create')->with('alert-danger', 'Error Creando Banner');
        }

        DB::commit();

        return redirect()->route('banners.index')->with('message', 'Banner Creado Exitosamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);

        return view('banners.show',compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('banners.edit',compact('banner'));
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
            'title' => 'required',
            'link_url' => 'required',
        ]);

        $banner = Banner::find($request->id);

        if (Input::hasFile('banner_url')) {
            if (Input::file('banner_url')->isValid()) {

                Storage::disk('imagenes')->delete(substr($banner->banner_url, strpos($banner->banner_url, '/'), strlen($banner->banner_url)));

                DB::beginTransaction();

                $banner->title = $request->title;
                $banner->link_url = $request->link_url;

                $filename = 'banners/'.$banner->id.'_'.$request->banner_url->getClientOriginalName();

                Storage::disk('imagenes')->put($filename, File::get($request->banner_url));

                $route = 'imagenes/'.$filename;

                $banner->banner_url = $route;

                $banner->save();

                if (!$banner) {
                    DB::rollBack();
                    return redirect()->route('sliders.edit', ['id' => $id])->with('mensage', 'Error Modificando Banner');
                }

                DB::commit();
            }
        } else {

            $banner->title = $request->title;
            $banner->link_url = $request->link_url;
            $banner->save();
        }

        return redirect()->route('banners.index')->with('message', 'Banner Modificado Exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("banners")->where('id',$id)->delete();
        return redirect()->route('banners.index')
                        ->with('success','Banner Eliminado con Éxito');
    }
}