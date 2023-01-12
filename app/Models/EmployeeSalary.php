<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    use HasFactory;
    protected $table="emp_salary_details";
    protected $fillable = [
        'emp_id','basic_pay','ta_da','hra', 'tpt', 'pers_pay', 'govt_perks','salary_status'
      ];
}
