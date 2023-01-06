<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpBankDetailsModel extends Model
{
    use HasFactory;
    protected $table="emp_bank_details";
    public function empdetails(){
        return $this->belongsTo('App\Models\User','emp_id','emp_id');
    }
}
