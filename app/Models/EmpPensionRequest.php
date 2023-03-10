<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpPensionRequest extends Model
{
    use HasFactory;
    protected $table="emp_pension_request";
    public function empdetails(){
        return $this->belongsTo('App\Models\User', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->select('id', 'name',  'dob','emp_id','status','do_joining','do_retirement','primary_mob');
    }
    
    public function empdpnddetails(){
        return $this->hasMany('App\Models\DependentDetails', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->select('id', 'dep_name',  'relation','emp_id','status','id_no');
    }
    public function emppfdetails(){
        return $this->hasOne('App\Models\PFAccount', 'emp_id', 'emp_id');
    }
    public function empbnkdetails(){
        return $this->hasOne('App\Models\EmpBankDetailsModel', 'emp_id', 'emp_id');
    }
    public function empunitdetails(){
        return $this->belongsTo('App\Models\EmployeeJobHistory', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->where('unit_job_status', 1)
                    ->select('id', 'designation', 'unit_no', 'unit_name','unit_incharge_id','emp_id','unit_job_status','status');
    }
    public function empSalarydetails(){
        return $this->belongsTo('App\Models\EmployeeSalary', 'emp_id', 'emp_id')
                    // ->where('status', 1)
                    ->where('salary_status', 1)
                    ->select('id','emp_id','basic_pay','salary_status');
    }
}
