<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitDetail extends Model
{
    use HasFactory;
    protected $table="unit_details";
    public function empdetails(){
        // return $this->hasOne('App\Models\Manager\Employeedetails', 'id', 'emp_id');
        return $this->belongsTo('App\Models\User', 'unit_incharge_id', 'emp_id')
                    ->where('status', 1)
                    ->select('id', 'name', 'emp_id','status')->withDefault();
    }
}
