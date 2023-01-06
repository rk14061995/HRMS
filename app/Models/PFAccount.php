<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PFAccount extends Model
{
    use HasFactory;
    protected $table="emp_pf_account_details";
    public function empdetails(){
        return $this->belongsTo('App\Models\User','emp_id','emp_id');
    }
    public function nomineeDetails(){
        return $this->belongsTo('App\Models\DependentDetails','pf_nominee_id','id');
    }
}
