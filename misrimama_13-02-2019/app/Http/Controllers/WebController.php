<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s_p_service_cluster as SPSCL;

class WebController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function getHome() {
        $page_title = "Home Page";
        $serviceCategory = \App\ServiceCategory::orderBy('position_no')->get();
        $model = getPageData(1);

        return view('layouts.newfrontend', compact('serviceCategory','model','page_title'));
    }

    ////////////////////////////////////services///////////////////////////

    public function generator() {
        $model = \App\ServiceCategory::where('slug','generator')->first();
        return view('web.services.generator',compact('model'));
    }

    public function plumbing() {
        $model = \App\ServiceCategory::where('slug','plumbing')->first();
        return view('web.services.plumbing',compact('model'));
    }

    public function electrical() {
        $clusters = \DB::table('cluster')->get();
        $model = \App\ServiceCategory::where('slug','electrical')->first();
        return view('web.services.electrical', compact('clusters'));
    }

    public function ict() {
        $model = \App\ServiceCategory::where('slug','ict')->first();
        return view('web.services.ict',compact('model'));
    }

    public function cctv() {
        $model = \App\ServiceCategory::where('slug','cctv')->first();
        return view('web.services.cctv',compact('model'));
    }

    public function airConditional() {
        $model = \App\ServiceCategory::where('slug','air-conditional')->first();
        return view('web.services.airConditional',compact('model'));
    }

    ////////////////////////////////////company///////////////////////////
    public function about() {
        return view('web.company.aboutus');
    }

    public function career() {
        $model = getPageData(7);
        return view('web.company.career', compact('model'));
    }

    public function communityGuidelines() {
        $model = getPageData(4);
        return view('web.company.community', compact('model'));
    }

    public function terms() {
        $terms = getPageData(2);
        return view('web.company.terms', compact('terms'));
    }

    public function contact() {
        return view('web.company.contact');
    }

    public function privacy() {
        $model = getPageData(3);
        return view('web.company.privacy', compact('model'));
    }

    ////////////////////////////////////discover///////////////////////////
    public function howItWorks() {
        $model = getPageData(6);
        return view('web.discover.howItWorks', compact('model'));
    }

    public function earnMoney() {
        $model = getPageData(5);
        return view('web.discover.earnMoney', compact('model'));
    }

    public function faq() {


        $models = \App\Faq::get();
        return view('web.discover.faq', compact('models'));
    }

    public function shohokari() {
        return view('discover.shohokari');
    }

    public function serviceprovider() {
        $data['page_title'] = "Service Provider";

        return view('home.index', $data);
    }

}
