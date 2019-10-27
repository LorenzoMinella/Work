<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Company;
use App\HomePage;
use App\Faq;
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
        $faqs = Faq::all();
        return view('faqs', compact('faqs'));
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


}