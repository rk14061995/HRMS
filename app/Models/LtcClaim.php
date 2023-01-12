<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtcClaim extends Model
{
    use HasFactory;
    protected $table="ltc_claim_reques";
    public function empdetails(){
        return $this->belongsTo('App\Models\User', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->select('id', 'name',  'dob','emp_id','status','do_retirement','primary_mob')->withDefault();
    }
    public function empdpnddetails(){
        return $this->belongsTo('App\Models\DependentDetails', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->select('id', 'dep_name',  'relation','emp_id','status','id_no')->withDefault();
    }
    public function emppfdetails(){
        return $this->hasOne('App\Models\PFAccount', 'emp_id', 'emp_id')->withDefault();
    }
    public function empbnkdetails(){
        return $this->hasOne('App\Models\EmpBankDetailsModel', 'emp_id', 'emp_id')->withDefault();
    }
    public function empunitdetails(){
        return $this->belongsTo('App\Models\EmployeeJobHistory', 'emp_id', 'emp_id')
                    ->where('status', 1)
                    ->where('unit_job_status', 1)
                    ->select('id', 'designation', 'unit_no', 'unit_name','unit_incharge_id','emp_id','unit_job_status','status')->withDefault();
    }
    public function empSalarydetails(){
        return $this->belongsTo('App\Models\EmployeeSalary', 'emp_id', 'emp_id')
                    // ->where('status', 1)
                    ->where('salary_status', 1)
                    ->select('id','emp_id','basic_pay','salary_status')->withDefault();
    }
    
    // public static function getJourneyData(){
    //     // return $this->tablewhere('status',1)->get();
    //     // return $users = DB::table('ltc_claim_journey_detail')->where('ltc_claim_journey_id',1)->get();
    // }
    // public function empdetails(){
    //     // return $this->hasOne('App\Models\Manager\Employeedetails', 'id', 'emp_id');
    //     return $this->belongsTo('App\Models\User', 'emp_id', 'emp_id')
    //                 ->where('status', 1)
    //                 ->select('id', 'name',  'emp_id','status');
    // }
    // public function empdetail(){
    //     // return $this->hasOne('App\Models\Manager\Employeedetails', 'id', 'emp_id');
    //     return $this->belongsTo('App\Models\User', 'emp_id', 'emp_id')
    //                 ->where('status', 1)
    //                 ->select('id', 'name', 'emp_id','status');
    // }
    
    public static function getJourneyData(){
        $claimReq=DB::table('ltc_claim_reques')->where('status',1)->where('claim_status',2)->get();
        $finalData=[];

        foreach($claimReq as $req){
            $finalData['empPfDetails']=DB::table('emp_pf_account_details')->where('emp_id',$req->emp_id)->first();
            $finalData['empDetails']=DB::table('users')->where('emp_id',$req->emp_id)->first();
            $finalData['dependent']=DB::table('emp_dependant_details')->where('emp_id',$req->emp_id)->get();
            $finalData['journeyDetail']=DB::table('ltc_claim_journey_detail')
                                            ->join('ltc_claim_journey_ticket_detail','ltc_claim_journey_ticket_detail.ltc_claim_journey_id','=','ltc_claim_journey_detail.id')
                                            ->where('ltc_claim_journey_detail.id',$req->id)
                                            ->get();
            $finalData['jobDetails']=DB::table('emp_job_history')
                                        ->where('emp_job_history.unit_job_status',1)
                                        ->where('emp_job_history.emp_id',$req->emp_id)
                                        ->join('unit_details','unit_details.unit_no','=','emp_job_history.unit_no')
                                        ->join('users','users.emp_id','=','emp_job_history.unit_incharge_id')
                                        ->select('emp_job_history.*','unit_details.*','users.name as incharge_name')
                                        ->first();
            $req->ltc=$finalData;

        }
        return $claimReq;
    }
    // public function 
}
