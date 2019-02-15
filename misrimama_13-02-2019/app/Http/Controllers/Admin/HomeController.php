<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
#use App\Events;
use App\ViewsDetails;
use Illuminate\Support\Facades\DB;
use App\User;
use App\DrivingRequest;
use App\Vehicles;
use Carbon\Carbon;
use App\DrivingDetails;

class HomeController extends Controller {

    public function index() {
         $driverCount = 0;
        return view('admin.home.home', compact('driverCount'));
    }

    public function login() {
        if (Auth::check()) {
            return redirect(route('admin'));
        }
        return view('admin.home.login');
    }

    public function loginCheck(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect(route('admin'));
        } else {
            return redirect()->back()->withInput()->with(['error' => 'Enter valid username and password.']);
        }
    }

    public function showProfile() {
        $users = User::find(Auth::user()->id);
        if ($users) {

            return view('admin.home.profile', compact('users'));
        } else {
            abort(404, 'Page not found');
        }
    }

    public function editProfile() {
        $users = User::find(Auth::user()->id);
        return view('admin.home.editprofile', compact('users'));
    }

    public function updateProfile(Request $request) {
        $id = Auth::user()->id;
        $this->validate($request, [
            'name' => 'required|min:4|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric',
            'street' => 'required|min:5|max:255',
            'locality' => 'required|min:1|max:100',
            'town' => 'required|min:1|max:100',
            'postcode' => 'required',
        ]);

        $input = $request->all();
        $model = User::find(Auth::user()->id);
        $model->update($input);
        $request->session()->flash('success', 'Profile has been Successfull update!');
        return redirect(route('profile'));
    }

}
