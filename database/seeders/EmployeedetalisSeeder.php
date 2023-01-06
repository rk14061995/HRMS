<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manager\Employeedetails;
use Illuminate\Support\Facades\DB;

class EmployeedetalisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employeedetails;
        $employee->name = "Adity";
        $employee->designation = "PHP Developer";
        $employee->dob = "2022-11-21";
        $employee->location = "Noida Sector-51";
        $employee->address = "Delhi";
        $employee->grade = "A";
        $employee->status = "Single";
        $employee->depandend = "father";
        $employee->mobile = "9205663394";
        $employee->email = "aditya@gmail.com";
        $employee->basicpay = "780000";
        $employee->save();
 
    }
}
