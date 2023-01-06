<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use App\Models\EmployeeAttendanceModel;
use App\Models\EmpLeaveModel;
use App\Models\MedicalClaimModel;
use App\Models\Manager\Employeedetails;
use App\Models\RetirementRequestModel;
use App\Models\User;
use App\Models\EmpBankDetailsModel;
use App\Models\EmployeeSalary;
use App\Models\DependentDetails;
use App\Models\EmployeeCeaRequest;
use App\Models\PFAccount;
use App\Models\EmployeeSkill;
use App\Models\GovtFormModel;
use App\Models\LtcClaim;
use App\Models\GradeSalary;
use App\Models\EmployeeJobHistory;
use Illuminate\Support\Facades\Auth;

class AnnualBudgetReport extends Controller
{
    //
    public function index(){
        return view('employee/budget_rep');
    }
}
