<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',['as'=>'home','uses'=>'WebController@getHome']);
Route::post('add_esp','Service_provider@add_esp');
Route::post('add_fsp','Service_provider@add_fsp');
Route::post('add_mmt','Service_provider@add_mmt');

Route::get('SPF',['uses'=>'Service_provider@spf'])->name('spf-register');
Route::get('mmt',['uses'=>'Service_provider@mmt'])->name('mmt-register');
Route::get('fsp',['uses'=>'Service_provider@fsp'])->name('fsp-register');
Route::post('spf-validation',"ValidationController@spfValidation")->name('spf-validation');
Route::post('fsp-validation',"ValidationController@fspValidation")->name('fsp-validation');
Route::any('booking-login',"ValidationController@bookingLogin")->name('booking-login');
Route::get('searchthana',['uses'=>'Service_provider@searchthanazone']);
Route::get('searchsubcat',['uses'=>'Service_provider@searchtservicecat']);
Route::get('activate/provider/{id}',['uses'=>'Service_provider@activateaccount']);
Route::get('deactivate/provider/{id}',['uses'=>'Service_provider@deactivateaccount']);


Route::get('/service-booking','BookingController@book')->name('service-booking');
Route::any('/get-sub-catarory','BookingController@getSubCatarory')->name('get-sub-catarory');

Route::any('/booking/service-booking-popup','BookingController@bookServicePopup')->name('service-booking-popup');
Route::any('/booking-store','BookingController@bookingStore')->name('booking-store');

Route::group(['prefix' =>'panel', 'middleware' => ['auth']],function () {

    Route::get('/', function () {
        return view('admin.home');
    });
    Route::get('/category', 'Service_provider@category');
    Route::post('/addcat', 'Service_provider@addcategory');

    Route::get('/category/{id}/service', function () {
        return view('admin.cat.service');
    });
    Route::get('/service', function () {
        return view('admin.home');
    });
    Route::prefix('provider')->group(function () {
        Route::get('/', 'Service_provider@index');
        Route::get('/{id}', 'Service_provider@profile');
        Route::get('/{id}/edit_profile', 'Service_provider@edit_profile');
        Route::get('/{id}/business', 'Service_provider@business');
        Route::get('/{id}/comrads', 'Service_provider@comrads');
        Route::get('/{id}/add_comrads', 'Service_provider@add_comrads');
        Route::get('/{id}/service', 'Service_provider@service');
        Route::get('/{id}/add_service', 'Service_provider@add_service');
    });
    Route::prefix('/')->group(function () {

        Route::get('profile', 'Service_provider@p_profile');
        Route::get('edit_profile', 'Service_provider@p_edit_profile');
        Route::get('business', 'Service_provider@p_business');
        Route::get('comrads', 'Service_provider@p_comrads');
        Route::get('add_comrads', 'Service_provider@p_add_comrads');
        Route::post('store_commrads', 'Service_provider@store_c');
        Route::get('service', 'Service_provider@p_service');
        Route::get('add_service', 'Service_provider@p_add_service');
        Route::post('store_service', 'Service_provider@store_s');

    });
});

Route::get('steps', function () {
    return view('web.stepform');
});

Route::get('serviceprovider',['as'=>'home','uses'=>'WebController@serviceprovider']);

Route::get('addservice',['uses'=>'WebController@addservice']);

Route::post('addservice','WebController@saveservice');
Route::post('saveprovider','WebController@saveprovider');


Route::get('esp-providers',['uses'=>'WebController@espproviders']);
Route::get('services-list',['uses'=>'WebController@serviceslist']);
Route::get('providers',['uses'=>'WebController@providerslist']);
Route::get('service-edit/{id}',['uses'=>'WebController@serviceedit']);
Route::post('service-edit/{id}',['uses'=>'WebController@saveserviceedit']);
Route::get('service-delete/{id}',['uses'=>'WebController@servicedelete']);
Route::get('provider-delete/{id}',['uses'=>'WebController@providerdelete']);

Route::post('provider-approve','WebController@providerApprove')->name('provider.approve');




//Footer-Services//

Route::get('generator',['uses'=>'WebController@generator']);
Route::get('plumbing',['uses'=>'WebController@plumbing']);
Route::get('electrical',['uses'=>'WebController@electrical']);
Route::get('ict',['uses'=>'WebController@ict']);
Route::get('cctv',['uses'=>'WebController@cctv']);
Route::get('air-conditional',['uses'=>'WebController@airConditional']);

//Footer-Company//

Route::get('about',['uses'=>'WebController@about']);
Route::get('career',['uses'=>'WebController@career']);
Route::get('community-guidelines',['uses'=>'WebController@communityGuidelines']);
//to be done
Route::get('terms',['uses'=>'WebController@terms']);
Route::get('contact',['uses'=>'WebController@contact']);
Route::get('privacy',['uses'=>'WebController@privacy']);

//Footer-Discover//
Route::get('how-it-works',['uses'=>'WebController@howItWorks']);
Route::get('earn-money',['uses'=>'WebController@earnMoney']);
Route::get('faq',['uses'=>'WebController@faq']);
//to be done
Route::get('shohokari',['uses'=>'WebController@shohokari']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');










Auth::routes();
Route::get('/access', array('uses' => 'Admin\HomeController@index', 'middleware' => ['admin']))->name('admin');
Route::group(['prefix' => 'admin'], function() {
    Route::any('/login', 'Admin\HomeController@login')->name('adminLogin');
    Route::post('/login', 'Admin\HomeController@loginCheck')->name('adminLogin');
    Route::group(['middleware' => ['admin']], function() {

        Route::get("/change-password", 'Admin\UsersController@changePassword')->name('adminchangepassword');
        Route::post("/changepassword", 'Admin\UsersController@postChangePassword')->name('adminChangePasswordPost');
        Route::get('/profile', 'Admin\HomeController@showProfile')->name('profile');
        Route::get('/editprofile', 'Admin\HomeController@editProfile')->name('editprofile');
        Route::any('/profile-update/{any}', 'Admin\HomeController@updateProfile')->name('profile-update');
         
         
         
        
        Route::resource("page-category", "Admin\PageCategoryController");
         
         
         
        
        
        Route::resource('general-setting', 'Admin\GeneralSettingController');
        
        Route::resource('blogs', 'Admin\BlogsController');
        Route::any('/get_slug_from_blogtitle', 'Admin\BlogsController@getSlug')->name('get_slug_from_blogtitle');
        Route::resource('blog-category', 'Admin\BlogCategoryController');
        
        Route::resource("faq", "Admin\FaqController");
        Route::resource("testimonial", "Admin\TestimonialController");
        Route::resource("service-category", "Admin\ServiceCategoryController");
        Route::resource("service-sub-category", "Admin\ServiceSubCategoryController");
        Route::any("position-update", "Admin\ServiceCategoryController@positionUpdate")->name('position-update');
        
        Route::resource("cms", "Admin\CmsController");
        Route::resource("service-provider", "Admin\ServiceProviderController");
        //
        Route::resource("cms-attribute", "Admin\CmsAttributesController");
        Route::resource("booking", "Admin\BookingController");
    });
});


