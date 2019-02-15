<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service_providers extends Model
{
    public function user() {
        return $this->belongsTo('App\User', 'u_id', 'id');
    }
    public function comrads() {
    return $this->hasMany('App\Models\service_providers_comrads', 's_id', 'id');
}
    public function services() {
        return $this->hasMany('App\Models\service_providers_services', 's_id', 'id');
    }
    public function time() {
        return $this->hasMany('App\Models\s_p_service_time', 's_id', 'id');
    }
    public function zone() {
        return $this->hasMany('App\Models\s_p_service_zone', 's_id', 'id');
    }
    public function days() {
        return $this->hasMany('App\Models\s_p_service_days', 's_id', 'id');
    }
    public function division() {
        return $this->hasMany('App\Models\s_p_service_division', 's_id', 'id');
    }
    public function cluster() {
        return $this->hasMany('App\Models\s_p_service_cluster', 's_id', 'id');
    }
    public function cate() {
        return $this->hasMany('App\Models\s_p_service_cat', 's_id', 'id');
    }
}
