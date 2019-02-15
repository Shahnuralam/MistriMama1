<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Auth;
class BookingController extends Controller {

    public function bookServicePopup(Request $request) {
        /*pr($request->all());
        die();*/
        updateCategoryPrice();
        $category   = $request->category;
        $area       = $request->area;
        if ($category) {
            
            $models = \App\ServiceCategory::with('subCategory')->where('id', $category)->first();
        } else {
            $models = false;
        }
        $categoryModel = \App\ServiceCategory::pluck('name','id');

        return view('web.booking.popup', compact('models','categoryModel','category','area'));
    }

    public function bookingStore(Request $request) {
       
        $model = new Booking();
        $model->user_id =   Auth::user()->id;
        $model->booking_date = $request->date;
        $model->booking_time = $request->time;
        $model->booking_category = $request->parent_category;
        
        $sCat = [];
        foreach($request->servicename as $key=> $servicename){
            if($servicename > 0){
                $sCat[] = $key;
            }
        }
        
        
        $model->booking_sub_cat = json_encode($sCat);
        if($model->save()){
            return response()->json([
                'status'=>1,
                'message' => 'Success.'
                ]);
        }else{
            return response()->json([
                'status'=>0,
                'message' => 'Error.'
                ]);
        }
    }
    function getSubCatarory(Request $request){
        $category   = $request->category;
      
        if ($category) {
            $models = \App\ServiceCategory::with('subCategory')->where('id', $category)->first();
        } else {
            $models = false;
        }
        $categoryModel = \App\ServiceCategory::pluck('name','id');

        return view('web.booking.subcategory', compact('models','categoryModel','category','area'));
    }

}
