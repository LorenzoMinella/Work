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

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id)
    {
        $questions = Question::where('form_id', '=', $id)->get();
        $form = Form::where('id', '=', $id)->first();
        return view('preguntas.index', compact('questions', 'id', 'form'));
    }

    public function index_corto(Request $request , $id)
    {
        $questions = Question::where('form_id', '=', $id)->get();
        $form = Form::where('id', '=', $id)->first();

        $bandera = 0;

        if(count($questions) == 1){
            $bandera = 1;
        }


        return view('preguntas.index_corto', compact('questions', 'id', 'form', 'bandera'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preguntas.create');
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
            'title' => 'required',
        ]);

        $question = new Question();
        $question->title = $request->input('title');
        $question->form_id = $request->input('form_id');
        $question->first_question = 0;
        $question->last_question = 0;
        if($request->first_question == 1){
            $question->first_question = $request->input('first_question');
            $question->save();
        }
        if($request->last_question == 1){
            $question->last_question = $request->input('last_question');
            $question->save();
        }
        $question->form_id = $request->input('form_id');
        $question->asigned = 0;
        $question->save();


        $form = Form::find($request->form_id);
        if($request->first_question == 1){
            $form->have_first_question = $request->input('first_question');
            $form->update();
        }
        if($request->last_question == 1){
            $form->have_last_question = $request->input('last_question');
            $form->update();
        }


        return redirect()->route('questions_short.index', $request->form_id)
                        ->with('success','Pregunta creada exitosamente');
    }

    public function store_short(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
        ]);

        $question = new Question();
        $question->title = $request->input('title');
        $question->form_id = $request->input('form_id');
        $question->answer_type_short = $request->input('answer_type');

        $question->save();

        if($request->answer_type == 0){
            return redirect()->route('answers_short.index', [$question->id, $request->form_id])
                            ->with('success','Pregunta creada exitosamente');
        }

        return redirect()->route('questions_short.index', $request->form_id)
                        ->with('success','Pregunta creada exitosamente');
    }


    public function edit(Request $request , $id_question, $id_form)
    {
        $form = Form::find($request->id_form);
        $question = Question::find($id_question);
        $questions = Question::where([['form_id', '=', $id_form], ['id', '!=', $id_question]])->get();

        return view('preguntas.edit', compact('question','questions', 'id_question', 'id_form', 'form'));
    }


    public function edit_corto(Request $request , $id_question, $id_form)
    {
        $form = Form::find($request->id_form);
        $question = Question::find($id_question);
        $questions = Question::where([['form_id', '=', $id_form], ['id', '!=', $id_question]])->get();

        return view('preguntas.edit_corto', compact('question','questions', 'id_question', 'id_form', 'form'));
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
        ]);


        $question = Question::find($id);
        $question->title = $request->input('title');
        $question->form_id = $request->input('form_id');
        $question->update();

        return redirect()->route('questions.index', $request->form_id)
                        ->with('success','Pregunta Actualizada exitosamente');
    }

    public function update_corto(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);


        $question = Question::find($id);
        $question->title = $request->input('title');
        $question->form_id = $request->input('form_id');
        $question->update();

        return redirect()->route('questions_short.index', $request->form_id)
                        ->with('success','Pregunta Actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        DB::table("questions")->where('id',$id)->delete();
        return redirect()->route('questions.index', $request->form_id)
                        ->with('success','Pregunta Eliminada con Éxito');
    }

    public function destroy_short(Request $request, $id)
    {
        DB::table("questions")->where('id',$id)->delete();
        return redirect()->route('questions_short.index', $request->form_id)
                        ->with('success','Pregunta Eliminada con Éxito');
    }

}