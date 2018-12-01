<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class process_status extends Model
{
    public function water()
    {
        return $this->belongsTo('App\Models\Water','idWaters');
    }
    public function pump()
    {
        return $this->belongsTo('App\Models\Pump','idPumps');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\Status','idStatus');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','idUsers');
    }
}
// ,'idPumps', 'idProcess'