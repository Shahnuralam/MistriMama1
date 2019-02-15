<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function subcat() {
        return $this->hasMany('App\Models\sub_category', 'c_id', 'id');
    }
}
