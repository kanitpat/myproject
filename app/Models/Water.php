<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    public function process()
    {
        return $this->hasMany('App\Models\process_status');
    }
}
