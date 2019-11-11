<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use App\Permission;
use App\Question;
use App\Answer;
use DB;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request, $id, $form_id)
    {
        $answers = Answer::where('question_id','=', $id)->get();

        if(count($answers) != 0){
            $question = Question::find($id);
            $question->asigned = 1;
            $question->save();
        }

        $questions = Question::where([
                    ['id','!=', $id],
                    ['form_id','=', $form_id],
                    ['asigned', '=', 0]
                    ])->pluck('title', 'id');
        return view('preguntas.respuestas.index', compact('answers', 'id', 'form_id', 'questions'));
    }


    public function index_corto(Request $request, $id, $form_id)
    {

        $answers = Answer::where('question_id','=', $id)->get();
        $answer = Answer::where('question_id','=', $id)->first();

        return view('preguntas.respuestas.index_corto', compact('answers', 'id', 'form_id', 'answer'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $questions = Question::all();
        return view('preguntas.respuestas.create', compact('id', 'questions'));
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
            'question_id' => 'required',
            'next_question' => 'required',
        ]);

        $answer = new Answer();
        $answer->content = $request->input('content');
        $answer->question_id = $request->input('question_id');
        $answer->next_question = $request->input('next_question');
        $answer->answer_type = $request->input('answer_type');

        $answer->save();

        return redirect()->route('answers.index', [$request->question_id, $request->form_id])
                        ->with('success','Respuesta creada exitosamente');
    }

    public function store_corto(Request $request)
    {

        $answer = new Answer();
        $answer->content = $request->input('content');
        $answer->question_id = $request->input('question_id');
 
        $answer->save();

        return redirect()->route('answers_short.index', [$request->question_id, $request->form_id])
                        ->with('success','Respuesta creada exitosamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id_question, $form_id, $id_answer)
    {   
        $answer = Answer::find($id_answer);
        $answers = Answer::where('question_id','=', $id_question)->get();
        $id = $answer->question_id;

        $questions = Question::pluck('title', 'id');

        $question = Question::where([
                    ['id','=', $id_question],
                    ])->first();

        return view('preguntas.respuestas.edit', compact('answer', 'id', 'questions', 'answers', 'form_id', 'question'));
    }

    public function edit_corto(Request $request, $id_question, $form_id, $id_answer)
    {   
        $answer = Answer::find($id_answer);
        $answers = Answer::where('question_id','=', $id_question)->get();
        $id = $answer->question_id;
        $questions = Question::pluck('title', 'id');

        $question = Question::where([
                    ['id','=', $id_question],
                    ])->first();

        return view('preguntas.respuestas.edit_corto', compact('answer', 'id', 'questions', 'answers', 'form_id', 'question'));
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
            'answer_type' => 'required',
            'question_id' => 'required',
            'next_question' => 'required',
        ]);


        $answer = Answer::find($id);
        $answer->content = $request->input('content');
        $answer->question_id = $request->input('question_id');
        $answer->next_question = $request->input('next_question');
        $answer->answer_type = $request->input('answer_type');
        $answer->update();

        return redirect()->route('answers.index', [$request->question_id, $request->form_id])
                        ->with('success','Respuesta modificada exitosamente');
    }


    public function update_corto(Request $request, $id)
    {
        $answer = Answer::find($id);
        $answer->content = $request->input('content');
        $answer->question_id = $request->input('question_id');
        $answer->next_question = $request->input('next_question');
        $answer->answer_type = $request->input('answer_type');
        $answer->update();

        return redirect()->route('answers_short.index', [$request->question_id, $request->form_id])
                        ->with('success','Respuesta modificada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        DB::table("answers")->where('id',$id)->delete();
        return redirect()->route('answers.index', [$request->question_id, $request->form_id])
                        ->with('success','Respuesta Eliminada con Éxito');
    }

    public function destroy_corto(Request $request, $id)
    {
        DB::table("answers")->where('id',$id)->delete();
        return redirect()->route('answers_short.index', [$request->question_id, $request->form_id])
                        ->with('success','Respuesta Eliminada con Éxito');
    }

}