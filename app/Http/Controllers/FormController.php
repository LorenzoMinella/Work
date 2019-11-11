<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Permission;
use App\Question;
use App\Answer;
use App\Form;
use DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $forms = Form::all();
        return view('formulario.index', compact('forms'));
    }


    public function forms_questions_answers(Request $request , $id)
    {
        $question = DB::table('questions')
            ->leftjoin('questions_forms', 'questions.id', '=', 'questions_forms.question_id')
            ->leftjoin('forms', 'questions_forms.forms_id', '=', 'forms.id')
            ->where('forms.id', '=', $id)
            ->where('questions_forms.asigned', '=', 0)
            ->select('questions.*')
            ->orderby(DB::raw('RAND()'))
            ->latest()
            ->first();

//        $questions = Question::pluck('title', 'id');
        $questions = DB::table('questions')
            ->leftjoin('questions_forms', 'questions.id', '=', 'questions_forms.question_id')
            ->leftjoin('forms', 'questions_forms.forms_id', '=', 'forms.id')
            ->where('forms.id', '=', $id)
            ->where('questions_forms.asigned', '=', 0)
            ->where('questions.id', '!=', $question->id)
            ->select('questions.*')
            ->pluck('title', 'id');



        $answers = Answer::where('question_id', '=', $question->id)->get();



        return view('formulario.camino.create', compact('question', 'answers', 'questions', 'id'));
    }


    public function way(Request $request , $id)
    {

        $form = Form::find($id);
        $questions = Question::where('form_id', '=', $id)->get();



//        $questions = Question::pluck('title', 'id');
/*
        $questions = DB::table('questions')
            ->leftjoin('questions_forms', 'questions.id', '=', 'questions_forms.question_id')
            ->leftjoin('forms', 'questions_forms.forms_id', '=', 'forms.id')
            ->where('forms.id', '=', $id)
            ->where('questions_forms.asigned', '=', 0)
            ->where('questions.id', '!=', $question->id)
            ->select('questions.*')
            ->pluck('title', 'id');
*/


        //$answers = Answer::where('question_id', '=', $question->id)->get();



        return view('formulario.camino.index', compact('id', 'form', 'questions'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $questions = Question::pluck('title', 'id');
        return view('formulario.create', compact('questions'));
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
            'long_short' => 'required',
        ]);

        $form = new Form();
        $form->name = $request->input('name');
        $form->long_short = $request->input('long_short');
        $form->status = 0;
        $form->have_first_question = 0;
        $form->have_last_question = 0;
        $form->save();

        if($request->long_short == 0){
            return redirect()->route('questions_short.index', $form->id);
        }

        if($request->long_short == 1){
            return redirect()->route('questions.index', $form->id);
        }


        return redirect()->route('forms.index')
                        ->with('success','Formulario creado exitosamente');
    }



    public function store_camino(Request $request)
    {

        $questions = DB::table('questions')
            ->leftjoin('questions_forms', 'questions.id', '=', 'questions_forms.question_id')
            ->leftjoin('forms', 'questions_forms.forms_id', '=', 'forms.id')
            ->where('forms.id', '=', $request->form_id)
            ->where('questions_forms.asigned', '=', 0)
            ->where('questions.id', '=', $request->question_id)
            ->select('questions_forms.*')
            ->update(['asigned' => 1]);

        return redirect()->route('forms_questions_answers.index', $request->form_id);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $form = Form::find($id);
        $id = $form->id;
        $questions = Question::pluck('title', 'id');
        return view('formulario.edit', compact('form', 'id', 'questions'));
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
            'long_short' => 'required',
        ]);


        $form = Form::find($id);
        $form->name = $request->input('name');
        $form->long_short = $request->input('long_short');
        $form->update();

        if($request->long_short == 0){
            DB::insert('insert into questions_forms (forms_id, question_id) values (?, ?)', [$form->id, $form->question_id]);
        return redirect()->route('forms.index')
                        ->with('success','Formulario creado exitosamente');
        }

        if($request->long_short == 1){
            return redirect()->route('questions.index', $form->id);
        }

        return redirect()->route('forms.index')
                        ->with('success','Formulario Editado exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        DB::table("forms")->where('id',$id)->delete();
        return redirect()->route('forms.index')
                        ->with('success','Formulario Eliminado con Éxito');
    }

    public function modificaEstado($id)
    {
        $form = Form::findOrfail($id);

        if ($form->status == '0') {
            $form->status = '1';
            $form->save();
        }
        else{
            $form->status = '0';
            $form->save();           
        }

        return redirect()->route('forms.index')->with('success', 'Estado Formulario Cambiado Exitosamente');
    }

}