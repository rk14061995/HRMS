<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAttendanceModel extends Model
{
    use HasFactory;
    protected $table = "emp_attendance";
    protected $primarykey = "id";
    // protected $fillable = [
    //     'name', 'designation','dob','location','address','grade','status','depandend','mobile','email','basicpay'
    // ];
    public function empdetails(){
        // return $this->hasOne('App\Models\Manager\Employeedetails', 'id', 'emp_id');
        return $this->belongsTo('App\Models\User', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->select('emp_id', 'name as empName', 'status');
    }
    

}
