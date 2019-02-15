<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service_providers_services extends Model
{
    public function scategory() {
        return $this->belongsTo('App\Models\sub_category', 'sc_id', 'id');
    }}
