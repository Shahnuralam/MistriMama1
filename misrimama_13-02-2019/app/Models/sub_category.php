<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{

	 protected $fillable = [
        "name", "c_id",'price','description'
    ];
    public function category() {
        return $this->belongsTo('App\Models\category', 'c_id', 'id');
    }
}
