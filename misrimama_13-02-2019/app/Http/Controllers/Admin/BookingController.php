<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;

class BookingController extends Controller {

    public function index(Request $request) {
        $models = Booking::with(['users','category'])->paginate(20);
        return view('admin.booking.index', compact('models'));
    }

}
