<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSkill extends Model
{
    use HasFactory;
    protected $table="emp_skill";
    public function empdetails(){
        return $this->belongsTo('App\Models\User','emp_id','emp_id');
    }
}
