<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function category() {
        return $this->belongsTo('App\Models\category', 'booking_category');
    }

}
