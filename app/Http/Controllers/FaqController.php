<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Permission;
use DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
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
            'question' => 'required',
            'content' => 'required',
        ]);

        $faq = new Faq();
        $faq->question = $request->input('question');
        $faq->content = $request->input('content');
        $faq->save();

        return redirect()->route('faqs.index')
                        ->with('success','Pregunta creada exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faqs.edit', compact('faq'));
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
            'question' => 'required',
            'content' => 'required',
        ]);


        $faq = Faq::find($id);
        $faq->question = $request->input('question');
        $faq->content = $request->input('content');
        $faq->update();

        return redirect()->route('faqs.index')
                        ->with('success','Pregunta Actualizada con Exito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("faqs")->where('id',$id)->delete();
        return redirect()->route('faqs.index')
                        ->with('success','Pregunta Eliminada con Éxito');
    }
}