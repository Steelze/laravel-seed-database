<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function manager()
    {
        return $this->belongsTo('App\Employee', 'manager_id');
    }
}
