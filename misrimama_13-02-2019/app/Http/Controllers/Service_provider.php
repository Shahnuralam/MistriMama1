<?php

namespace App\Http\Controllers;

use App\Models\category as Cat;
use App\Models\complains;
use App\Models\sub_category as S_Cat;
use App\User as User;
use App\Models\user_roles as UR;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;
use App\Models\service_providers as SP;
use App\Models\service_providers_comrads as SPC;
use App\Models\service_providers_services as SPS;
use App\Models\s_p_service_cat as SPSC;
use App\Models\s_p_service_cluster as SPSCL;
use App\Models\s_p_service_days as SPSD;
use App\Models\s_p_service_division as SPSDiv;
use App\Models\s_p_service_time as SPST;
use App\Models\s_p_service_zone as SPSZ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use DB;

class Service_provider extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function __construct()
      {
      $this->middleware('auth');
      } */
    public function index() {
        $providers = SP::all();
        return view('admin.provider.view', compact('providers'));
    }

    public function profile($id) {

        $p = SP::find($id);
        return view('admin.provider.profile', compact('p'));
    }

    public function p_profile() {
//return Auth::user()->sp->id;
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        }

        return view('admin.provider.profile', compact('p'));
    }

    public function edit_profile($id) {
        $p = SP::find($id);
        return view('admin.provider.edit_profile', compact('p'));
    }

    public function activateaccount($id) {
        $u = User::find($id);
        $u->status = '1';
        $success = $u->save();
        if ($success) {
            return redirect()->back()->with('success', 'User Activated ...');
        } else {
            return redirect()->back()->with('success', 'User Not Activated, Please Try Again...');
        }
    }

    public function deactivateaccount($id) {
        $u = User::find($id);
        $u->status = '2';
        $success = $u->save();
        if ($success) {
            return redirect()->back()->with('success', 'User De-Activated ...');
        } else {
            return redirect()->back()->with('success', 'User Not De-Activated, Please Try Again...');
        }
    }

    public function p_edit_profile() {
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        } return view('admin.provider.edit_profile', compact('p'));
    }

    public function business($id) {
        $p = SP::find($id);
        return view('admin.provider.business', compact('p'));
    }

    public function comrads($id) {
        $p = SP::find($id);
        return view('admin.provider.comrads', compact('p'));
    }

    public function p_business() {

        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        }
        return view('admin.provider.business', compact('p'));
    }

    public function p_comrads() {
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        }
        return view('admin.provider.comrads', compact('p'));
    }

    public function add_comrads($id) {
        $p = SP::find($id);
        return view('admin.provider.add_comrads', compact('p'));
    }

    public function p_add_comrads() {
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        } return view('admin.provider.add_comrads', compact('p'));
    }

    public function p_service() {
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        }
        return view('admin.provider.service', compact('p'));
    }

    public function service($id) {
        $p = SP::find($id);
        return view('admin.provider.service', compact('p'));
    }

    public function add_service($id) {
        $cat = Cat::all();
        $p = SP::find($id);
        return view('admin.provider.add_service', compact('p', 'cat'));
    }

    public function p_add_service() {
        $cat = Cat::all();
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        } return view('admin.provider.add_service', compact('p', 'cat'));
    }

    public function category() {
        $cat = Cat::all();
        $scat = S_Cat::all();
        return view('admin.cat.category', compact('cat', 'scat'));
    }

    public function addcategory(Request $r) {
        $c = new S_Cat();
        $c->c_id = $r->service;
        $c->name = $r->name;
        $c->price = $r->price;
        $success = $c->save();
        if ($success) {
            return redirect()->back()->with('success', 'Category Added ...');
        } else {
            return redirect()->back()->with('success', 'Category Not Added, Please Try Again...');
        }
    }

    public function searchthanazone(Request $request) {
        //  $request->id;

        $id = $request->id;
        $echo = "";
        foreach (DB::table('zones')->whereIn('clusterid', $id)->get() as $zone) {

            $echo .= '<option value="' . $zone->id . '" selected>' . $zone->name . '</option>';
        }

        return $echo;
    }

    public function searchtservicecat(Request $request) {
        //  $request->id;

        $id = $request->id;
        $echo = "";
        $cat = \App\ServiceCategory::whereIn('id', $id)->with('subCategory')->get();
        
       
        return view('web.signup.selectsubcategory', compact('cat'));
        
    }

     public function searchtservicecat_old_hasib(Request $request) {
        //  $request->id;

        $id = $request->id;
        $echo = "";
        $cat = Cat::whereIn('id', $id)->get();
        //  return $cat;
        foreach ($cat as $cat) {
            $echo .= '<optgroup label="' . $cat->name . '">';
            foreach ($cat->subcat as $c) {
                $echo .= '<option value="' . $c->id . '" selected>' . $c->name . '</option>';
            }
            $echo .= '<optgroup />';
        }


        return $echo;
    }

    public function spf() {
        $clusters = DB::table('cluster')->get();
        $cat = Cat::all();
        $models = \App\ServiceCategory::with('subCategory')->get();
    
     
        return view('web.signup.esp', compact('clusters', 'cat' ));
    }

    public function fsp() {
        $clusters = DB::table('cluster')->get();
        $cat = Cat::all();
        $models = \App\ServiceCategory::with('subCategory')->get();
    
     
        return view('web.signup.fsp', compact('clusters', 'cat' ));
    }
    public function mmt() {
        $clusters = DB::table('cluster')->get();
        $cat = Cat::all();
        $models = \App\ServiceCategory::with('subCategory')->get();
    
     
        return view('web.signup.mmt', compact('clusters', 'cat' ));
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

    public function store_s(Request $r) {
        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        }
        $sps = new SPS();

        $sps->s_id = $p->id;
        $sps->sc_id = $r->sc_id;
        $sps->s_price = $r->s_price;
        $sps->s_comm = $r->s_comm;
        $sps->s_desp = $r->s_desp;
        $success = $sps->save();
        if ($success) {
            return redirect()->back()->with('success', 'Service Added ...');
        } else {
            return redirect()->back()->with('success', 'Service Not Added, Please Try Again...');
        }
    }

    public function store_c(Request $r) {
        $destinationPath = 'uploads/SP/';

        if (Auth::user()->hasRole('provider')) {
            $p = SP::find(Auth::user()->sp->id);
        }
        $spc = new SPC();
        $spc->s_id = $p->id;
        $spc->c_name = $r->c_name;
        $spc->c_phone_no = $r->c_phone_no;
        $spc->c_alt_phone_no = $r->c_alt_phone_no;

        $spc->c_card = $r->c_card;
        $nid = $r->file('c_nid');
        $extension = $nid->getClientOriginalExtension();
        $nidN = time() . '.' . $extension;
        $tin_cer = $nid->move($destinationPath, $nid);
        $spc->c_nid = $nidN;

        $passport = $r->file('c_passport');
        $extension = $passport->getClientOriginalExtension();
        $passportN = time() . '.' . $extension;
        $tin_cer = $passport->move($destinationPath, $passport);
        $spc->c_passport = $passportN;


        $success = $spc->save();
        if ($success) {
            return redirect()->back()->with('success', 'Commrad Added ...');
        } else {
            return redirect()->back()->with('success', 'Commrad Not Added, Please Try Again...');
        }
    }

    public function add_esp(Request $r) {

        $validatedData = $r->validate([
            'l_email' => 'required|email|unique:users,email,'
        ]);


/*         echo "<pre>";
        print_r($r->all());
         die();*/
        try {
            DB::beginTransaction();
            $user = new User();
            $user->name = $r->name;
            $user->email = $r->l_email;
            $user->password = Hash::make($r->pwd);
            $user->status = '2';

            $user->save();
            $ur = new UR();
            $ur->user_id = $user->id;
            $ur->roles_id = 3;
            $ur->save();
//return "asdf";

            $destinationPath = public_path('uploads/SP/');
            $sp = new SP();
            $sp->u_id = $user->id;
            $sp->name = $r->name;
            $sp->type = 0;
            $sp->phone_no = $r->phone_no;
            $sp->alt_ph = $r->alt_ph;
            $sp->email = $r->email;
            $sp->mailing_add = $r->mailing_add;
            $sp->smart_card = $r->smart_card;
            if($r->hasFile('nic_front')){
                $nic_front = $r->file('nic_front');
                $extension = $nic_front->getClientOriginalExtension();
                $fileNamenf = time() . '_1.' . $extension;
                $nic_front = $nic_front->move($destinationPath, $fileNamenf);
                $sp->nic_front = $fileNamenf;
            }
            if($r->hasFile('nic_back')){
                $nic_back = $r->file('nic_back');
                $extension = $nic_back->getClientOriginalExtension();
                $fileNamenb = time() . '_2.' . $extension;
                $nic_back = $nic_back->move($destinationPath, $fileNamenb);
                $sp->nic_back = $fileNamenb;
            }
            if($r->hasFile('passport')){
                $passport = $r->file('passport');
                $extension = $passport->getClientOriginalExtension();
                $fileNamenp = time() . '_3.' . $extension;
                $passport = $passport->move($destinationPath, $fileNamenp);
                $sp->passport = $fileNamenp;
            }
            if($r->hasFile('tin_cer')){
                $tin_cer = $r->file('tin_cer');
                $extension = $tin_cer->getClientOriginalExtension();
                $fileNametc = time() . '_4.' . $extension;
                $tin_cer = $tin_cer->move($destinationPath, $fileNametc);
                $sp->tin_cer = $fileNametc;
            }
            
            
            
            
            $sp->mobile_banking = $r->mobile_banking;
            $sp->mfs_account = $r->mfs_account;
            $sp->mfs_spname = $r->mfs_spname;
            $sp->cat = $r->cat;
            $sp->save();


            $nidf = $r->file('c_nid');
            $c_passportf = $r->file('c_passport');
            $c_nic_front = $r->file('c_nic_front');
            $c_nic_back = $r->file('c_nic_back');
            if ($r->c_name[0] != null) {
                for ($i = 0; $i < count($r->c_name); $i++) {
                    $spc = new SPC();
                    $spc->s_id = $sp->id;
                    $spc->c_name = $r->c_name[$i];
                    $spc->c_phone_no = $r->c_phone_no[$i];
                    $spc->c_alt_phone_no = $r->c_alt_phone_no[$i];
                    $spc->c_card = $r->c_card[$i];

                   
                    
                    if($r->hasFile($c_nic_front[$i])){
                        $c_nic_frontFile = $r->file($c_nic_front[$i]);
                        $extension = $c_nic_front[$i]->getClientOriginalExtension();
                        $c_nic_frontName = time() . '.' . $extension;
                        $c_nic_front[$i]->move(($destinationPath), $c_nic_frontFile);
                        $spc->c_nic_front = $c_nic_frontName;

                    }
                    if($r->hasFile($c_nic_front[$i])){
                        $c_nic_backFile = $r->file($c_nic_front[$i]);
                        $extension = $c_nic_back[$i]->getClientOriginalExtension();
                        $c_nic_frontName = time() . '.' . $extension;
                        $c_nic_back[$i]->move(($destinationPath), $c_nic_backFile);
                        $spc->c_nic_back = $c_nic_frontName;
                    }
                    if($r->hasFile($c_passportf[$i])){
                        $passport = $r->file($c_passportf[$i]);
                        $extension = $c_passportf[$i]->getClientOriginalExtension();
                        $passport = time() . '.' . $extension;
                        $tin_cer = $c_passportf[$i]->move($destinationPath, $passport);
                        $spc->c_passport = $passport;
                        $spc->save();
                    }
                }
            }

            for ($i = 0; $i < count($r->s_category); $i++) {
                $sub_categoryId = $r->s_category[$i];
                $subCategoryModel  = \App\Models\sub_category::where('id',$sub_categoryId)->first();
                if($subCategoryModel){
                    $sps = new SPS();
                    $sps->s_id = $sp->id;
                    $sps->sc_id = $subCategoryModel->id;
                    $sps->s_price = $r->s_price[$i];
                    $sps->s_comm = $r->s_comm[$i];
                    $sps->s_desp = $r->s_desp[$i];
                    $sps->save();
                }
            }
             
            if ($r->has('friday')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Friday';
                $spsd->save();
                // for($i=0;$i<count($r->ftime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->friday_stime;
                $spst->end_time = $r->friday_etime;
                $spst->save();
                // }
            }
            if ($r->has('sat')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Saturday';
                $spsd->save();
                //for($i=0;$i<count($r->stime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->saturday_stime;
                $spst->end_time = $r->saturday_etime;
                $spst->save();
                // }
            }
            if ($r->has('sunday')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Sunday';
                $spsd->save();
                //  for($i=0;$i<count($r->sutime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->sunday_stime;
                $spst->end_time = $r->sunday_etime;
                $spst->save();
                // }
            }
            if ($r->has('mon')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Monday';
                $spsd->save();
                // for($i=0;$i<count($r->mtime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->monday_stime;
                $spst->end_time = $r->monday_etime;
                $spst->save();
                // }
            }
            if ($r->has('tues')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Tuesday';
                $spsd->save();
                // for($i=0;$i<count($r->ttime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->tuseday_stime;
                $spst->end_time = $r->tuseday_etime;
                $spst->save();
                // }
            }
            if ($r->has('wed')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Wednesday';
                $spsd->save();
                //for($i=0;$i<count($r->wtime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->wednesday_stime;
                $spst->end_time = $r->wednesday_etime;
                $spst->save();
                //}
            }
            if ($r->has('thur')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Thursday';
                $spsd->save();
                //  for($i=0;$i<count($r->thutime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->thursday_stime;
                $spst->end_time = $r->thursday_etime;
                $spst->save();
                //  }
            }


            for ($i = 0; $i < count($r->division); $i++) {
                $spsdiv = new SPSDiv();

                $spsdiv->s_id = $sp->id;
                $spsdiv->division = $r->division[$i];
                $spsdiv->save();
            }

            for ($i = 0; $i < count($r->zone); $i++) {
                $spsz = new SPSZ();

                $spsz->s_id = $sp->id;
                $spsz->zone = $r->zone[$i];
                $spsz->save();
            }

            for ($i = 0; $i < count($r->cluster); $i++) {
                $spscl = new SPSCL();

                $spscl->s_id = $sp->id;
                $spscl->cluster = $r->cluster[$i];
                $spscl->save();
            }

            for ($i = 0; $i < count($r->cats); $i++) {
                $spsc = new SPSC();

                $spsc->s_id = $sp->id;
                $spsc->cats = $r->cats[$i];
                $spsc->save();
            }
            DB::commit();
            return redirect()->back()->with('success', 'Your Request has been Sumbitted, wait for Apporval, You can now login to system ...');
        } catch (Exception $e) {
            DB::rollBack();

            $r->session()->flash('error', 'Oops something went wrong try again !');
            return redirect()->back()->withInput();
        }
    }

    public function add_fsp(Request $r) {
       try {
            DB::beginTransaction(); 
        $user = new User();
        $user->name = $r->name;
        $user->email = $r->l_email;
        $user->password = Hash::make($r->pwd);
        $user->status = '2';

        $user->save();
        $ur = new UR();
        $ur->user_id = $user->id;
        $ur->roles_id = 3;
        $ur->save();
//return "asdf";

        $destinationPath = 'uploads/SP/';
        $sp = new SP();
        $sp->u_id = $user->id;
        $sp->name = $r->name;
        $sp->type = 1;
        $sp->phone_no = $r->phone_no;
        $sp->alt_ph = $r->alt_ph;
        $sp->email = $r->email;
        $sp->mailing_add = $r->mailing_add;
        $sp->smart_card = $r->smart_card;

        if($r->hasFile('nic_front')){
            $nic_front = $r->file('nic_front');
            $extension = $nic_front->getClientOriginalExtension();
            $fileNamenf = time() . '_1.' . $extension;
            $nic_front = $nic_front->move($destinationPath, $fileNamenf);
            $sp->nic_front = $fileNamenf;
        }
        if($r->hasFile('nic_back')){
            $nic_back = $r->file('nic_back');
            $extension = $nic_back->getClientOriginalExtension();
            $fileNamenb = time() . '_2.' . $extension;
            $nic_back = $nic_back->move($destinationPath, $fileNamenb);
            $sp->nic_back = $fileNamenb;
        }
        if($r->hasFile('passport')){
            $passport = $r->file('passport');
            $extension = $passport->getClientOriginalExtension();
            $fileNamenp = time() . '_3.' . $extension;
            $passport = $passport->move($destinationPath, $fileNamenp);
            $sp->passport = $fileNamenp;
        }
        if( $r->hasFile('tin_cer')){
            $tin_cer = $r->file('tin_cer');
            $extension = $tin_cer->getClientOriginalExtension();
            $fileNametc = time() . '_4.' . $extension;
            $tin_cer = $tin_cer->move($destinationPath, $fileNametc);
            $sp->tin_cer = $fileNametc;
        }
        
        
        
        
        $sp->mobile_banking = $r->mobile_banking;
        $sp->mfs_account = $r->mfs_account;
        $sp->mfs_spname = $r->mfs_spname;
        $sp->cat = $r->cat;
        $sp->save();


        $nidf = $r->file('c_nid');
        $c_passportf = $r->file('c_passport');


//        for ($i = 0; $i < count($r->sc_id); $i++) {
//
//            $sps = new SPS();
//
//            $sps->s_id = $sp->id;
//            $sps->sc_id = $r->sc_id[$i];
//            $sps->s_price = $r->s_price[$i];
//            $sps->s_comm = $r->s_comm[$i];
//            $sps->s_desp = $r->s_desp[$i];
//            $sps->save();
//        }
        
        for ($i = 0; $i < count($r->s_category); $i++) {
            $sub_categoryId = $r->s_category[$i];
            $subCategoryModel  = \App\Models\sub_category::where('id',$sub_categoryId)->first();
            if($subCategoryModel){
                $sps = new SPS();
                $sps->s_id = $sp->id;
                $sps->sc_id = $subCategoryModel->id;
                $sps->s_price = $r->s_price[$i];
                $sps->s_comm = $r->s_comm[$i];
                $sps->s_desp = $r->s_desp[$i];
                $sps->save();
            }
        }

        if ($r->has('friday')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Friday';
                $spsd->save();
                // for($i=0;$i<count($r->ftime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->friday_stime;
                $spst->end_time = $r->friday_etime;
                $spst->save();
                // }
            }
            if ($r->has('sat')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Saturday';
                $spsd->save();
                //for($i=0;$i<count($r->stime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->saturday_stime;
                $spst->end_time = $r->saturday_etime;
                $spst->save();
                // }
            }
            if ($r->has('sunday')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Sunday';
                $spsd->save();
                //  for($i=0;$i<count($r->sutime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->sunday_stime;
                $spst->end_time = $r->sunday_etime;
                $spst->save();
                // }
            }
            if ($r->has('mon')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Monday';
                $spsd->save();
                // for($i=0;$i<count($r->mtime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->monday_stime;
                $spst->end_time = $r->monday_etime;
                $spst->save();
                // }
            }
            if ($r->has('tues')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Tuesday';
                $spsd->save();
                // for($i=0;$i<count($r->ttime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->tuseday_stime;
                $spst->end_time = $r->tuseday_etime;
                $spst->save();
                // }
            }
            if ($r->has('wed')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Wednesday';
                $spsd->save();
                //for($i=0;$i<count($r->wtime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->wednesday_stime;
                $spst->end_time = $r->wednesday_etime;
                $spst->save();
                //}
            }
            if ($r->has('thur')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Thursday';
                $spsd->save();
                //  for($i=0;$i<count($r->thutime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->thursday_stime;
                $spst->end_time = $r->thursday_etime;
                $spst->save();
                //  }
            }

        for ($i = 0; $i < count($r->division); $i++) {
            $spsdiv = new SPSDiv();

            $spsdiv->s_id = $sp->id;
            $spsdiv->division = $r->division[$i];
            $spsdiv->save();
        }

        for ($i = 0; $i < count($r->zone); $i++) {
            $spsz = new SPSZ();

            $spsz->s_id = $sp->id;
            $spsz->zone = $r->zone[$i];
            $spsz->save();
        }

        for ($i = 0; $i < count($r->cluster); $i++) {
            $spscl = new SPSCL();

            $spscl->s_id = $sp->id;
            $spscl->cluster = $r->cluster[$i];
            $spscl->save();
        }

        for ($i = 0; $i < count($r->cats); $i++) {
            $spsc = new SPSC();

            $spsc->s_id = $sp->id;
            $spsc->cats = $r->cats[$i];
            $spsc->save();
        }

            DB::commit();
            return redirect()->back()->with('success', 'Your Request has been Sumbitted, wait for Apporval, You can now login to system ...');
        } catch (Exception $e) {
            DB::rollBack();

            $r->session()->flash('error', 'Oops something went wrong try again !');
            return redirect()->back()->withInput();
        }
    }



    public function add_mmt(Request $r) {
       try {
            DB::beginTransaction(); 
        $user = new User();
        $user->name = $r->name;
        $user->email = $r->l_email;
        $user->password = Hash::make($r->pwd);
        $user->status = '2';

        $user->save();
        $ur = new UR();
        $ur->user_id = $user->id;
        $ur->roles_id = 4;
        $ur->save();
//return "asdf";

        $destinationPath = 'uploads/SP/';
        $sp = new SP();
        $sp->u_id = $user->id;
        $sp->name = $r->name;
        $sp->type = 4;    // For MMT
        $sp->phone_no = $r->phone_no;
        $sp->alt_ph = $r->alt_ph;
        $sp->email = $r->email;
        $sp->mailing_add = $r->mailing_add;
        $sp->smart_card = $r->smart_card;

        if($r->hasFile('nic_front')){
            $nic_front = $r->file('nic_front');
            $extension = $nic_front->getClientOriginalExtension();
            $fileNamenf = time() . '_1.' . $extension;
            $nic_front = $nic_front->move($destinationPath, $fileNamenf);
            $sp->nic_front = $fileNamenf;
        }
        if($r->hasFile('nic_back')){
            $nic_back = $r->file('nic_back');
            $extension = $nic_back->getClientOriginalExtension();
            $fileNamenb = time() . '_2.' . $extension;
            $nic_back = $nic_back->move($destinationPath, $fileNamenb);
            $sp->nic_back = $fileNamenb;
        }
        if($r->hasFile('passport')){
            $passport = $r->file('passport');
            $extension = $passport->getClientOriginalExtension();
            $fileNamenp = time() . '_3.' . $extension;
            $passport = $passport->move($destinationPath, $fileNamenp);
            $sp->passport = $fileNamenp;
        }
        if( $r->hasFile('tin_cer')){
            $tin_cer = $r->file('tin_cer');
            $extension = $tin_cer->getClientOriginalExtension();
            $fileNametc = time() . '_4.' . $extension;
            $tin_cer = $tin_cer->move($destinationPath, $fileNametc);
            $sp->tin_cer = $fileNametc;
        }
        
        
        
        
        $sp->mobile_banking = $r->mobile_banking;
        $sp->mfs_account = $r->mfs_account;
        $sp->mfs_spname = $r->mfs_spname;
        $sp->cat = $r->cat;
        $sp->save();


        $nidf = $r->file('c_nid');
        $c_passportf = $r->file('c_passport');


//        for ($i = 0; $i < count($r->sc_id); $i++) {
//
//            $sps = new SPS();
//
//            $sps->s_id = $sp->id;
//            $sps->sc_id = $r->sc_id[$i];
//            $sps->s_price = $r->s_price[$i];
//            $sps->s_comm = $r->s_comm[$i];
//            $sps->s_desp = $r->s_desp[$i];
//            $sps->save();
//        }
        if($r->s_category){
            for ($i = 0; $i < count($r->s_category); $i++) {
                $sub_categoryId = $r->s_category[$i];
                $subCategoryModel  = \App\Models\sub_category::where('id',$sub_categoryId)->first();
                if($subCategoryModel){
                    $sps = new SPS();
                    $sps->s_id = $sp->id;
                    $sps->sc_id = $subCategoryModel->id;
                    $sps->s_price = $r->s_price[$i];
                    $sps->s_comm = $r->s_comm[$i];
                    $sps->s_desp = $r->s_desp[$i];
                    $sps->save();
                }
            }
        }

        if ($r->has('friday')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Friday';
                $spsd->save();
                // for($i=0;$i<count($r->ftime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->friday_stime;
                $spst->end_time = $r->friday_etime;
                $spst->save();
                // }
            }
            if ($r->has('sat')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Saturday';
                $spsd->save();
                //for($i=0;$i<count($r->stime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->saturday_stime;
                $spst->end_time = $r->saturday_etime;
                $spst->save();
                // }
            }
            if ($r->has('sunday')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Sunday';
                $spsd->save();
                //  for($i=0;$i<count($r->sutime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->sunday_stime;
                $spst->end_time = $r->sunday_etime;
                $spst->save();
                // }
            }
            if ($r->has('mon')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Monday';
                $spsd->save();
                // for($i=0;$i<count($r->mtime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->monday_stime;
                $spst->end_time = $r->monday_etime;
                $spst->save();
                // }
            }
            if ($r->has('tues')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Tuesday';
                $spsd->save();
                // for($i=0;$i<count($r->ttime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->tuseday_stime;
                $spst->end_time = $r->tuseday_etime;
                $spst->save();
                // }
            }
            if ($r->has('wed')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Wednesday';
                $spsd->save();
                //for($i=0;$i<count($r->wtime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->wednesday_stime;
                $spst->end_time = $r->wednesday_etime;
                $spst->save();
                //}
            }
            if ($r->has('thur')) {
                $spsd = new SPSD();
                $spsd->s_id = $sp->id;
                $spsd->days = 'Thursday';
                $spsd->save();
                //  for($i=0;$i<count($r->thutime);$i++) {
                $spst = new SPST();

                $spst->s_id = $sp->id;
                $spst->d_id = $spsd->id;
                $spst->time = $r->thursday_stime;
                $spst->end_time = $r->thursday_etime;
                $spst->save();
                //  }
            }

        for ($i = 0; $i < count($r->division); $i++) {
            $spsdiv = new SPSDiv();

            $spsdiv->s_id = $sp->id;
            $spsdiv->division = $r->division[$i];
            $spsdiv->save();
        }

        for ($i = 0; $i < count($r->zone); $i++) {
            $spsz = new SPSZ();

            $spsz->s_id = $sp->id;
            $spsz->zone = $r->zone[$i];
            $spsz->save();
        }

        for ($i = 0; $i < count($r->cluster); $i++) {
            $spscl = new SPSCL();

            $spscl->s_id = $sp->id;
            $spscl->cluster = $r->cluster[$i];
            $spscl->save();
        }

        for ($i = 0; $i < count($r->cats); $i++) {
            $spsc = new SPSC();

            $spsc->s_id = $sp->id;
            $spsc->cats = $r->cats[$i];
            $spsc->save();
        }

            DB::commit();
            return redirect()->back()->with('success', 'Your Request has been Sumbitted, wait for Apporval, You can now login to system ...');
        } catch (Exception $e) {
            DB::rollBack();

            $r->session()->flash('error', 'Oops something went wrong try again !');
            return redirect()->back()->withInput();
        }
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

}
