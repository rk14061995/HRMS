<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpRetRequest extends Model
{
    use HasFactory;
    protected $table="emp_ret_request";
    public function empdetails(){
        return $this->belongsTo('App\Models\User', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->select('id', 'name',  'dob','emp_id','status','do_joining','do_retirement','primary_mob');
    }
}
