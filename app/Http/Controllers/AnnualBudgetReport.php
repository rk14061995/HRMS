<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetails;
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
        $data=TransactionDetails::where('status',1)->get();
        // print_r($data->toArray());
        $transation=array(
            'GRADE_PAY'=>0,
            'HRA'=>0,
            'LTC'=>0,
            'MEDICAL'=>0,
            'CEA'=>0,
            'DA'=>0,
            'TOTAL'=>0
        );
        $total=0;
        foreach($data as $d){
            $total+=$d->amount;
            switch($d->initiated_for){
                case 'GRADE_PAY': $transation['GRADE_PAY']+= $d->amount;break;
                case 'HRA': $transation['HRA']+= $d->amount;break;
                case 'LTC': $transation['LTC']+= $d->amount;break;
                case 'CEA': $transation['CEA']+= $d->amount;break;
                case 'MEDICAL': $transation['MEDICAL']+= $d->amount;break;
                case 'TA_DA': $transation['DA']+= $d->amount;break;
            }
        }
        $transation['TOTAL']=$total;
        // print_r($transation);die;
        return view('employee/budget_rep',compact('transation','total'));
    }
}
