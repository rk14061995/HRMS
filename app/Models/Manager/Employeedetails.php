<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeedetails extends Model
{
    use HasFactory;
    protected $table = "employeedetalis";
    protected $primarykey = "id";
        // protected $fillable = [
        //     'name', 'designation','dob','location','address','grade','status','depandend','mobile','email','basicpay'
        // ];
    
}
