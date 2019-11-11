<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\FaqCategory;
use App\Permission;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;
use Crypt;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faqs = FaqCategory::all();
        return view('faqs.categories.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.categories.create');
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
            'category_name' => 'required',
            'category_icon' => 'required',
        ]);

        $faq = new FaqCategory();
        $faq->category_name = $request->input('category_name');
        $faq->category_icon = "";
        $faq->save();

        $faq1 = FaqCategory::find($faq->id);

        $filename = 'iconos/'.$faq1->id.'_'.$request->category_icon->getClientOriginalName();

        Storage::disk('imagenes')->put($filename, File::get($request->category_icon));

        $route = 'imagenes/'.$filename;

        $faq1->category_icon = $route;

        $faq1->save();


        return redirect()->route('faqs_categories.index')
                        ->with('success','Categoría creada exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = FaqCategory::find($id);

        return view('faqs.categories.edit', compact('faq'));
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
            'category_name' => 'required',
        ]);


        $faq = FaqCategory::find($id);

        if (Input::hasFile('category_icon')) {
            if (Input::file('category_icon')->isValid()) {

                Storage::disk('imagenes')->delete(substr($faq->category_icon, strpos($faq->category_icon, '/'), strlen($faq->category_icon)));

                DB::beginTransaction();

                $faq->category_name = $request->input('category_name');
                $faq->category_icon = $request->input('category_icon');

                $filename = 'iconos/'.$faq->id.'_'.$request->category_icon->getClientOriginalName();

                Storage::disk('imagenes')->put($filename, File::get($request->category_icon));

                $route = 'imagenes/'.$filename;

                $faq->category_icon = $route;

                $faq->save();

                if (!$faq) {
                    DB::rollBack();
                    return redirect()->route('faqs_categories.edit', ['id' => $id])->with('mensage', 'Error Modificando Categoría');
                }

                DB::commit();
            }
        } else {

                $faq->category_name = $request->input('category_name');
                $faq->category_icon = $request->input('category_icon');
                $faq->update();
        }


        return redirect()->route('faqs_categories.index')
                        ->with('success','Categoría Actualizada con Exito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("faqs_categories")->where('id',$id)->delete();
        return redirect()->route('faqs_categories.index')
                        ->with('success','Categoría Eliminada con Éxito');
    }
}