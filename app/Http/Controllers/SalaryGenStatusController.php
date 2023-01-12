<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaryGenStatus;
use App\Models\User;
use App\Models\TransactionDetails;
use App\Models\EmpBankDetailsModel;
use App\Models\EmployeeSalary;
use App\Models\EmpSalaryDeduction;
use App\Models\FinancialYear;
use App\Models\GeneratedSalary;

class SalaryGenStatusController extends Controller
{
    //
    function generateSalary(){
        $response['status'] = false;
        $response['message'] = 'Something went wrong';
        $currentFinancialYear=FinancialYear::where('current_status',1)->select('financial_year')->first();
        $employee = User::where('users.status', 1)
                        // ->where('attendace_date',)
                        ->join('emp_salary_deduction','emp_salary_deduction.emp_id','=','users.emp_id')
                        ->join('emp_salary_details','emp_salary_details.emp_id','=','users.emp_id')
                        // ->leftjoin('emp_attendance','emp_attendance.emp_id','=','users.emp_id')
                        ->select('users.emp_id','users.name','emp_salary_details.*','emp_salary_deduction.*')
                        ->get();

        $lastMonth=date('m-Y',strtotime('-1 months'));
        $temp=0;
        foreach($employee as $emp){
            $genStatus=array(
                "emp_id"=>$emp->emp_id,
                "for_month_year"=>$lastMonth,
                "financial_year"=>$currentFinancialYear->financial_year,
            );
            // print_r($genStatus);
            if(count(SalaryGenStatus::where($genStatus)->get())==0){
                if(SalaryGenStatus::insert($genStatus)){
                    // `emp_id`, `gen_sal_st_id`, ``, ``, ``, `da`, `hra`, `tpt`, `pers_pay`, `wa`, `misc`, 
                    // `eol_h`, `eol_d`, `gpf`, `gpf_ref`, `cgeis`, `cghs`, `f_adv`, `rent_rec`, `misc_ded`, `tax_ded`
                    // print_r($genStatus);
                    // echo "\r\n";
                    // print_r($emp->toArray());
                    $id=1;

                    //Transaction 
                    // enum('GPF', 'EOL', 'PERS_PAY', 'TPT', 'SALARY', 'LTC', 'CEA', 'MEDICAL', 'NPS', 'HRA', 'OVER_TIME', 'TA_DA', 'GRADE_PAY', 'TRANSPORT_ALLOWANCE')
                    TransactionDetails::insert(['financial_year'=>$currentFinancialYear->financial_year,'emp_id'=>$emp->emp_id,'amount'=>$emp->basic_pay,'paid_as'=>'SALARY','initiated_for'=>'GRADE_PAY']);
                    TransactionDetails::insert(['financial_year'=>$currentFinancialYear->financial_year,'emp_id'=>$emp->emp_id,'amount'=>$emp->hra,'paid_as'=>'SALARY','initiated_for'=>'HRA']);
                    TransactionDetails::insert(['financial_year'=>$currentFinancialYear->financial_year,'emp_id'=>$emp->emp_id,'amount'=>$emp->ta_da,'paid_as'=>'SALARY','initiated_for'=>'TA_DA']);
                    TransactionDetails::insert(['financial_year'=>$currentFinancialYear->financial_year,'emp_id'=>$emp->emp_id,'amount'=>$emp->tpt,'paid_as'=>'SALARY','initiated_for'=>'TPT']);
                    TransactionDetails::insert(['financial_year'=>$currentFinancialYear->financial_year,'emp_id'=>$emp->emp_id,'amount'=>$emp->pers_pay,'paid_as'=>'SALARY','initiated_for'=>'PERS_PAY']);
                    TransactionDetails::insert(['financial_year'=>$currentFinancialYear->financial_year,'emp_id'=>$emp->emp_id,'amount'=>$emp->gpf_ref,'paid_as'=>'SALARY','initiated_for'=>'GPF']);
                                        

                    $salaryArray=array(
                                        "emp_id"=>$emp->emp_id,
                                        "gen_sal_st_id"=>$id,
                                        "for_month_year"=>$lastMonth,
                                        "financial_year"=>$currentFinancialYear->financial_year,
                                        "basic_pay"=>$emp->basic_pay,
                                        "da"=>$emp->ta_da,
                                        "hra"=>$emp->hra,
                                        "tpt"=>$emp->tpt,
                                        "pers_pay"=>$emp->pers_pay,
                                        "wa"=>$emp->govt_perks,
                                        "misc"=>0,
                                        "eol_h"=>0,
                                        "eol_d"=>0,
                                        "gpf"=>0,
                                        "gpf_ref"=>$emp->gpf_ref,

                                        "cgeis"=>$emp->cgeis,
                                        "cghs"=>$emp->cghs,
                                        "f_adv"=>$emp->f_adv,
                                        "rent_rec"=>$emp->rent_rec,
                                        "misc_ded"=>$emp->misc,
                                        "tax_ded"=>$emp->tax_deduction,
                                    );
                    // print_r($salaryArray);
                    // ;
                    if(count(GeneratedSalary::where($salaryArray)->get())==0){
                        GeneratedSalary::insert($salaryArray);
                        $temp=1;
                    }
                }
            }else{
                // /echo 'Already Generated';
                $response['status'] = false;
                $response['message'] = 'Already Generated';
            }
            if($temp==1){
                $response['status'] = true;
                $response['message'] = 'Salary Generated';
            }
        }
       
        
        return ($response);
        // print_r($currentFinancialYear);
        // print_r($employee->toArray());die;
    }
}
