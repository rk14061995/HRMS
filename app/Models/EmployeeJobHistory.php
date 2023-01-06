<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeJobHistory extends Model
{
    use HasFactory;
    protected $table="emp_job_history";
    public function empdetails(){
        return $this->belongsTo('App\Models\User','emp_id','emp_id');
    }
    public function incharge(){
        return $this->belongsTo('App\Models\User','unit_incharge_id','emp_id');
    }
    
}
