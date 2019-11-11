<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Company;
use App\HomePage;
use App\Faq;
use App\FaqCategory;
use App\Post;
use App\Advertise;
use App\Form;
use App\Contact;
use App\Glosary;
use App\Question;
use App\Answer;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;
use Crypt;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $companies = Company::orderBy('id','DESC')->get();
        $homepages = HomePage::all()->first();
        return view('welcome', compact('banners', 'companies', 'homepages'));
    }

    public function homepage(Request $request)
    {
        $homepages = HomePage::all()->first();
        return view('pages.home', compact('homepages'));
    }

    public function companies_list(Request $request)
    {
        $homepages = HomePage::all()->first();
        $banners = Banner::orderBy('id','DESC')->first();
        $companies = Company::orderBy('id','ASC')->get();
        return view('company_list', compact('banners', 'companies', 'homepages'));
    }

    public function company(Request $request, $id)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $companies = Company::where('id','=', $id)->first();
        $homepages = HomePage::all()->first();
        return view('company', compact('banners', 'companies', 'homepages'));
    }

    public function homealarms(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $homepages = HomePage::all()->first();
        return view('alarmas_casa', compact('banners', 'homepages'));
    }

    public function business_alarms(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $homepages = HomePage::all()->first();
        return view('alarmas_negocio', compact('banners', 'homepages'));
    }

    public function advertise(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $homepages = HomePage::all()->first();
        return view('anunciate', compact('banners', 'homepages'));
    }
    public function faqs(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $faqs = Faq::all();
        $categories = FaqCategory::all();
        return view('faqs', compact('faqs', 'banners', 'categories'));
    }

    public function blog(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $posts = Post::orderBy('id','ASC')->get();
        return view('blog', compact('posts', 'banners'));

    }

    public function comparator(Request $request)
    {
        $form = Form::where([['status', '=', 1], ['long_short', '=', 1]])->first();
        $first_question = Question::where([['form_id', '=', $form->id], ['first_question', '=', 1]])->first();
        $answers = Answer::where('question_id', '=', $first_question->id)->get();

        return view('comparador', compact('form', 'first_question', 'answers'));
    }
    public function comparator_camino(Request $request, $id)
    {
        $form = Form::where([['status', '=', 1], ['long_short', '=', 1]])->first();
        $question = Question::where('id', '=', $id)->first();
        $answers = Answer::where('question_id', '=', $question->id)->get();

        return view('comparador_camino', compact('form', 'question', 'answers'));
    }

    public function store_comparator(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $form = Form::where([['status', '=', 1], ['long_short', '=', 1]])->first();
        $first_question = Question::where([['form_id', '=', $form->id], ['first_question', '=', 1]])->first();
        $answers = Answer::where('question_id', '=', $first_question->id)->get();
        dd($answers);
        return redirect()->route('homepage.index')->with('message', 'Home Page Editado Exitosamente.');
    }

    public function about_us(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        return view('about_us', compact('banners'));
    }

    public function policies(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        $posts = Post::orderBy('id','ASC')->get();
        return view('politica_privacidad', compact('banners'));
    }

    public function contact(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();
        return view('contacto', compact('banners'));

    }

    public function glosary(Request $request)
    {
        $companies = Company::orderBy('id','ASC')->get();
        $glosaries = Glosary::orderBy('name','ASC')->get();        
        $banners = Banner::orderBy('id','DESC')->first();
        $abc = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,23,25,26,27];
        return view('glosario', compact('banners', 'glosaries', 'companies', 'abc'));

    }

    public function home_store(Request $request)
    {

        $this->validate($request, [
            'description_home' => 'required',
            'select_alarm' => 'required',
            'desc_one' => 'required',
            'desc_two' => 'required',
            'desc_three' => 'required',
            'description_middle' => 'required',
            'card_one' => 'required',
            'card_two' => 'required',
            'card_three' => 'required',
            'card_four' => 'required',
            'card_five' => 'required',
            'card_six' => 'required',

        ]);

        DB::beginTransaction();

        $homepage = HomePage::all()->first();
        $homepage->description_home = $request->description_home;
        $homepage->select_alarm = $request->select_alarm;
        $homepage->desc_one = $request->desc_one;
        $homepage->desc_two = $request->desc_two;
        $homepage->desc_three = $request->desc_three;
        $homepage->description_middle = $request->description_middle;
        $homepage->card_one = $request->card_one;
        $homepage->card_two = $request->card_two;
        $homepage->card_three = $request->card_three;
        $homepage->card_four = $request->card_four;
        $homepage->card_five = $request->card_five;
        $homepage->card_six = $request->card_six;
        $homepage->save();

        if (!$homepage) {
            DB::rollBack();
            return redirect()->route('homepage.index')->with('alert-danger', 'Error Editando Home Page');
        }

        DB::commit();

        return redirect()->route('homepage.index')->with('message', 'Home Page Editado Exitosamente.');
    }

    public function advertise_store(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();

        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'company_name' => 'required',
            'company_email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'terms' => 'required',
        ]);

        DB::beginTransaction();

        $advertise = New Advertise();
        $advertise->name = $request->name;
        $advertise->lastname = $request->lastname;
        $advertise->company_name = $request->company_name;
        $advertise->company_email = $request->company_email;
        $advertise->phone = $request->phone;
        $advertise->message = $request->message;
        $advertise->terms = $request->terms;
        $advertise->save();

        if (!$advertise) {
            DB::rollBack();
            return redirect()->route('companies.advertise')->with('alert-danger', 'Error Editando Home Page');
        }

        DB::commit();

        return view('anunciate.done',compact('banners'));
    }


    public function contact_store(Request $request)
    {
        $banners = Banner::orderBy('id','DESC')->first();

        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'terms' => 'required',
        ]);

        DB::beginTransaction();

        $contact = New Contact();
        $contact->name = $request->name;
        $contact->lastname = $request->lastname;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->terms = $request->terms;
        $contact->save();

        if (!$contact) {
            DB::rollBack();
            return redirect()->route('companies.contact')->with('alert-danger', 'Error Editando Contácto');
        }

        DB::commit();

        return view('contacto.done',compact('banners'));
    }


}