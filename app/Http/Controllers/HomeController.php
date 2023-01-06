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
use App\Models\UnitDetail;
use App\Models\EmpRetRequest;
use App\Models\EmpPensionRequest;
use App\Models\EmployeeJobHistory;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->middleware('auth');
   }
   public function attendanceCheck()
   {
      $condition = array('emp_id' => Auth::user()->id, 'attendance_date' => date('d-m-Y'));
      $res = EmployeeAttendanceModel::where($condition)->get();
      // if(count($res)>0){
      //    Session::put('mark_attend',true);
      // }
      return $res;
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
      $attendanceTable='emp_attendance';
      $data = EmployeeAttendanceModel::where('status', 1)
         ->with('empdetails')
         ->orderBy('id', 'Desc')
         ->get();
      $dataOut = EmployeeAttendanceModel::where('status', 1)
         ->with('empdetails')
         ->where('attendance_date', date('Y-m-d'))
         ->where('attendance_time_out', null)
         ->orderBy('id', 'Desc')
         ->get();
      // print_r($dataOut->toArray());die;
      $Employees = User::where('status', 1)->get();
      return view('employee.index', compact('Employees', 'data', 'dataOut','attendanceTable'));
   }

   public function status()
   {
      return view("employee.EmpolyeeStatus");
   }

   public function attendance()
   {
      $Employees = Employeedetails::where('status', 1)->get();
      return view("employee.Attendance", compact('Employees'));
   }

   public function medical()
   {
      return view("employee.medicalsheet");
   }

   public function leave()
   {

      return view("employee.leaveapproal");
   }

   public function regulancer()
   {
      return view("employee.AttendanceRegulancer");
   }

   public function contact()
   {
      return view("employee.contact");
   }

   public function portfolio()
   {
      return view("employee.portfolio");
   }

   public function applyforleave()
   {
      return view("employee.Applyforleave");
   }

   public function store(Request $request)
   {
      $post = new Employeedetails;
      $post->name = $request->get('name');
      $post->designation = $request->get('designation');
      $post->dob = $request->get('dob');
      $post->location = $request->get('location');
      $post->address = $request->get('address');
      $post->grade = $request->get('grade');
      $post->status = $request->get('status');
      $post->depandend = $request->get('depandend');
      $post->mobile = $request->get('mobile');
      $post->email = $request->get('email');
      $post->basicpay = $request->get('basicpay');
      $post->save();
      echo "Data Insert Sucessfully";
      return redirect(route('maddemp'));
   }
   public function list_attendance(Request $req)
   {
      //
      $condition = [];
      if (Auth::user()->role_as != 0) {
         $condition['emp_id'] = Auth::user()->id;
      } else {
         $condition = [];
      }
      $attendanceTable='emp_attendance';
      $data = EmployeeAttendanceModel::where('status', 1)
         ->where($condition)
         ->with('empdetails')
         ->orderBy('id', 'Desc')
         ->get();
      $dataOut = EmployeeAttendanceModel::where('status', 1)
         ->with('empdetails')
         ->where('attendance_date', date('Y-m-d'))
         ->where('attendance_time_out', null)
         ->orderBy('id', 'Desc')
         ->get();
      $Employees = User::where('status', 1)->get();
      // print_r($dataOut->toArray());die;  
      return view('employee/emp_attendance', compact('data', 'Employees','dataOut','attendanceTable'));
   }
   public function list_leave(Request $req)
   {

      $data = EmployeeAttendanceModel::where('status', 1)->get();
      return view('employee/emp_leave', compact('data'));
   }
   public function apply_leave(Request $req)
   {

      $data = User::where('status', 1)->get();
      return view('employee/emp_leaveapply', compact('data'));
   }
   public function apply_empret(Request $req)
   {

      $data = RetirementRequestModel::where('status', 1)->get();
      return view('employee/emp_retirement', compact('data'));
   }
   public function cal_empretamount(Request $req)
   {

      $data = RetirementRequestModel::where('status', 1)->get();
      return view('employee/emp_retirementcal', compact('data'));
   }
   public function formUpload(Request $req)
   {  
      $Employees = User::where('status', 1)->get();
      $data = MedicalClaimModel::where('status', 1)
         ->with('empdetails')
         ->get();
      $forms=GovtFormModel::where('status',1)->get();
      // return view('employee/dummy1', compact('data','Employees','forms'));
      return view('employee/formUpload', compact('data','Employees','forms'));
   }
   public function formDataFill(Request $req,$id)
   {  
      $Employees = User::where('status', 1)->get();
      $data = MedicalClaimModel::where('status', 1)
         ->with('empdetails')
         ->get();
      $form=GovtFormModel::where('id',$id)->where('status',1)->first();
      return view('employee/dummy1', compact('data','Employees','form'));
      // return view('employee/formUpload', compact('data','Employees','forms'));
   }
   
   
 

   public function apply_empmedclaim(Request $req)
   {


      $Employees = User::where('status', 1)->get();
      $data = MedicalClaimModel::where('status', 1)
         ->with('empdetails')
         ->get();
         // print_r($data->toArray());die;
      return view('employee/emp_medicalclaim', compact('data', 'Employees'));
   }
   public function unitDetailPage(Request $req)
   {


      $Employees = User::where('status', 1)->get();
      $data = UnitDetail::where('status', 1)
         ->first();
         // print_r($data->toArray());die;
      return view('employee/unit_detailing', compact('data', 'Employees'));
   }
   public function pensionCreation(Request $req){
      $Employees = User::where('status', 1)->get();
      $data = UnitDetail::where('status', 1)
         ->first();

      $retReq=EmpRetRequest::where('status',1)->with('empdetails')->get();
      $pensionReq=EmpPensionRequest::where('status',1)->with('empdetails')->get();
         // print_r($retReq->toArray());die;
      return view('employee/pension_creation', compact('data', 'Employees','retReq','pensionReq'));
   }
   
   function showRegularPensionForm(Request $req,$id=null){
      $Employees = User::where('status', 1)->get();
      $data=[];
      if($id!=""){
         // echo 'good to go';
         $data = EmpPensionRequest::where('emp_pension_request.status', 1)->where('emp_pension_request.emp_id',$id)
                     ->with('empdetails','emppfdetails','empbnkdetails','empunitdetails')
                     ->get();
      }else{
         // echo 'okk';
      }

      // print_r($data->toArray());
         // die;
      return view('employee/emp_reg_pension',compact('data'));
      // return view('employee/emp_othr_pension',compact('data'));
   }
   function mdcl_claim_doc(Request $req,$id=null){
      $Employees = User::where('status', 1)->get();
      $data=[];
      if($id!=""){
         // echo 'good to go';
         $data = MedicalClaimModel::where('medical_claim_reques.status', 1)->where('medical_claim_reques.id',$id)
                     // ->join('emp_dependant_details','emp_dependant_details.id','=','emp_cea_req.child_depnd_id')
                     ->with('empdetails','emppfdetails','empbnkdetails','empunitdetails')->select('medical_claim_reques.*')
                     ->get();
      }else{
         // echo 'okk';
      }
      $unitDetails=UnitDetail::with('empdetails')->first();
      // print_r($unitDetails->toArray());/
         // die;
      return view('employee/emp_mdcl_form',compact('data','unitDetails'));
   }

   
   public function apply_empcealaim(Request $req,$id=null)
   {


      $Employees = User::where('status', 1)->get();
      $data=[];
      if($id!=""){
         // echo 'good to go';
         $data = EmployeeCeaRequest::where('emp_cea_req.status', 1)->where('emp_cea_req.id',$id)
                     ->join('emp_dependant_details','emp_dependant_details.id','=','emp_cea_req.child_depnd_id')
                     ->with('empdetails','emppfdetails','empbnkdetails','empunitdetails')->select('emp_dependant_details.dep_name','emp_cea_req.*')
                     ->get();
      }else{
         // echo 'okk';
      }
      // print_r($data->toArray());
         // die;
      return view('employee/cea_forms/cea_req', compact('data', 'Employees'));
   }
   public function apply_empltcclaim(Request $req)
   {

      $Employees = Employeedetails::where('status', 1)->get();
      $data = LtcClaim::where('status', 1)
         ->with('empdetails')
         ->get();
      $ltcData=LtcClaim::getJourneyData();
      // print_r($data->toArray());die;
         // print_r(LtcClaim::getJourneyData());die;
      return view('ltc_claim/ltcclaim', compact('data', 'Employees','ltcData'));
      // return view('employee/emp_ltcclaim', compact('data', 'Employees'));
   }
   
   public function apply_empltcclaimOld(Request $req)
   {

      $Employees = User::where('status', 1)->get();
      $data = LtcClaim::where('status', 1)
         ->with('empdetails')
         ->get();
      // $ltcData=LtcClaim::getJourneyData();
      // print_r($data);die;
         // print_r(LtcClaim::getJourneyData());die;
      // return view('ltc_claim/ltcclaim', compact('data', 'Employees','ltcData'));
      return view('employee/emp_ltcclaim', compact('data', 'Employees'));
   }
   public function ltc_claim_doc(Request $req,$id=null)
   {

      $Employees = User::where('status', 1)->get();
      $data=[];
      if($id!=""){
         // echo 'good to go';
         $data = LtcClaim::where('ltc_claim_reques.status', 1)->where('ltc_claim_reques.id',$id)
                     // ->join('emp_dependant_details','emp_dependant_details.emp_id','=','ltc_claim_reques.emp_id')
                     ->with('empdetails','empdpnddetails','emppfdetails','empbnkdetails','empunitdetails','empSalarydetails')->select('ltc_claim_reques.*')
                     ->get();
      }else{
         // echo 'okk';
      }
      // print_r($data->toArray());die;
      return view('employee/ltc_claim_req', compact('data'));
   }
   
   
   public function viewEmployeeClaimRequest(Request $req,$id)
   {

      $Employees = User::where('status', 1)->where('emp_id',$id)->first();
      $claimData = LtcClaim::where('status', 1)->where('emp_id',$id)
         ->with('empdetails')
         ->get();
      // $ltcData=LtcClaim::getJourneyData();
      // print_r($data);die;
         // print_r(LtcClaim::getJourneyData());die;
      // return view('ltc_claim/ltcclaim', compact('data', 'Employees','ltcData'));
      return view('employee/emplLtcClaimDetails', compact('claimData', 'Employees','id'));
   }
   
   public function viewEmployeeClaimRequestApplication(Request $req,$id)
   {
      $Employees = User::where('status', 1)->where('emp_id',$id)->first();
      $claimData = LtcClaim::where('status', 1)->where('emp_id',$id)
         ->with('empdetails')
         ->get();
      return view('employee/ltc_claim_req', compact('claimData', 'Employees','id'));
   }
   public function viewEmployeeLtcBlockYearApplication(Request $req,$id)
   {
      $Employees = User::where('status', 1)->where('emp_id',$id)->first();
      $claimData = LtcClaim::where('status', 1)->where('emp_id',$id)
         ->with('empdetails')
         ->get();
      return view('ltc_claim/ltc_claim_block_year', compact('claimData', 'Employees','id'));
   }
   public function viewEmployeeClaimDependForm(Request $req,$id)
   {
      $Employees = User::where('status', 1)->where('emp_id',$id)->first();
      $claimData = LtcClaim::where('status', 1)->where('emp_id',$id)
         ->with('empdetails')
         ->get();
      return view('ltc_claim/ltc_depnd_cert', compact('claimData', 'Employees','id'));
   }
   
   public function viewEmployeeClaimCounterSignedForm(Request $req,$id)
   {
      $Employees = User::where('status', 1)->where('emp_id',$id)->first();
      $claimData = LtcClaim::where('status', 1)->where('emp_id',$id)
         ->with('empdetails')
         ->get();
      return view('ltc_claim/ltc_counter_signed', compact('claimData', 'Employees','id'));
   }
   public function viewEmployeeClaimPmtRcvdorm(Request $req,$id)
   {
      $Employees = User::where('status', 1)->where('emp_id',$id)->first();
      $claimData = LtcClaim::where('status', 1)->where('emp_id',$id)
         ->with('empdetails')
         ->get();
      return view('ltc_claim/ltc_claim_payment_rcvd', compact('claimData', 'Employees','id'));
   }

   // CEA Claim
   public function apply_empceaclaim(Request $req)
   {

      $Employees = User::where('status', 1)->get();
      $data = EmployeeCeaRequest::where('status', 1)
         ->with('empdetails')
         ->get();
      // $ltcData=LtcClaim::getJourneyData();
      // print_r($data);die;
         // print_r(LtcClaim::getJourneyData());die;
      // return view('ltc_claim/ltcclaim', compact('data', 'Employees','ltcData'));
      return view('employee/emp_ceaclaim', compact('data', 'Employees'));
   }

   public function withdrwal_empltc(Request $req)
   {

      $data = RetirementRequestModel::where('status', 1)->get();
      return view('employee/emp_ltcclaim', compact('data'));
   }


   public function apply_empsalslip(Request $req)
   {

      $data = RetirementRequestModel::where('status', 1)->get();
      return view('employee/emp_salslip', compact('data'));
   }
   public function generate_empsalslip(Request $req)
   {

      $data = User::where('status', 1)->get();

      return view('employee/emp_gensalslip', compact('data'));
   }
   public function withdrwal_empgpf(Request $req)
   {

      $data = RetirementRequestModel::where('status', 1)->get();
      return view('employee/emp_gensalslip', compact('data'));
   }
   
   public function gradeSalary(Request $req)
   {
      // $bankDetails=EmpBankDetailsModel::where('status',1)->with('empdetails')->get();
      $data = GradeSalary::where('status', 1)->get();
      // print_r($data->toArray());die;
      return view('employee/grade_salary', compact('data'));
   }
   public function createEmpPage(Request $req)
   {
      $bankDetails=EmpBankDetailsModel::where('status',1)->with('empdetails')->get();
      $grade = GradeSalary::where('status', 1)->get();
      $data = User::where('status', 1)->get();
      // print_r($bankDetails->toArray());die;
      return view('employee/createempdetail', compact('data','bankDetails','grade'));
   }
   public function employeDetails($id)
   {
      $bankDetails=EmpBankDetailsModel::where('status',1)->where('emp_id',$id)->with('empdetails')->get();
      $skillDetails=EmployeeSkill::where('status',1)->where('emp_id',$id)->with('empdetails')->get();
      $jobDetails=EmployeeJobHistory::where('status',1)->where('emp_id',$id)->with('empdetails','incharge')->get();
      $pfDetails=PFAccount::where('status',1)->where('emp_id',$id)->with('empdetails','nomineeDetails')->get();
      $dependntDetails=DependentDetails::where('status',1)->where('emp_id',$id)->with('empdetails')->get();
      $data = User::where('status', 1)->where('emp_id',$id)->first();
      $grade = GradeSalary::where('status', 1)->get();
      // print_r($data->toArray());die;
      $jsonFormat=json_encode(array('bankDetails'=>(array)$bankDetails,'skillDetails'=>(array)$skillDetails,'jobDetails'=>(array)$jobDetails,'pfDetails'=>(array)$pfDetails,'dependntDetails'=>(array)$dependntDetails));
      return view('employee/emp_detailing', compact('grade','data','bankDetails','jobDetails','skillDetails','id','pfDetails','dependntDetails','jsonFormat'));
   }
   public function EmployeeList(Request $req)
   {

      $data = User::where('status', 1)->get();
      // print_r($data->toArray());die;
      return view('employee/emplisting', compact('data'));
   }
   public function EmployeeSkillList(Request $req)
   {
      $data=EmployeeSkill::where('status',1)->with('empdetails')->get();
      // $data = User::where('status', 1)->get();
      // print_r($data->toArray());die;
      return view('employee/empskill', compact('data'));
   }
   public function EmployeeJobHistory(Request $req)
   {
      $data=EmployeeJobHistory::where('status',1)->with('empdetails')->get();
      // $data = User::where('status', 1)->get();
      // print_r($data->toArray());die;
      return view('employee/empjobhistory', compact('data'));
   }
   

   //Api Section
   //To Mark  
   public function addNewData(Request $req)
   {
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      $data = array(
         'name' => $req->input('name'),
         'designation' => $req->input('designation'),
         'mobile' => $req->input('mobile'),
         'email' => $req->input('email'),
         'grade' => $req->input('grade'),
         'depandend' => $req->input('depandend'),
         'dob' => $req->input('dob'),
         'location' => $req->input('location'),
         'address' => $req->input('address'),
         'basicpay' => $req->input('basicpay')
      );
      if (!empty($data)) {
         $res = Employeedetails::where($data)->get();
         if (count($res) > 0) {
            $response['message'] = 'Data Already Exists';
         } elseif (count($res) == 0) {
            if (Employeedetails::insert($data)) {
               $response['status'] = true;
               $response['message'] = 'Employee Details Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Employee Details';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
   }
   public function uploadFormBody(Request $req)
   {
      // print_r($_REQUEST);
      // die;
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      // if (!empty($req->input('empId'))) {
         // form_category`, `form_body`, `status`
         $formBody=trim($req->input('formBody'));
         $formName=$req->input('form_name');
         $formIdentifier=strtolower($req->input('form_identifier')) ;
         $formCategory=$req->input('formCategory');

         if (!empty($req->input('formId'))) {
            //Update
            // die('Update');
            if (GovtFormModel::where('form_identifier',$formIdentifier)->where('status',1)->update(['formBody'=>$formBody,'form_category'=>$formCategory,'form_name'=>$formName])) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Form Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Update Form';
               return ($response);
            }
         } else {
            // die('insert');
            //Insert
            $condition = array('form_identifier' => $formIdentifier,'status'=>1);
            $res = GovtFormModel::where($condition)->get();
            if (count($res) > 0) {
               $response['message'] = 'Form Already Exist';
            } elseif (count($res) == 0) {
               $data = ['form_identifier'=>$formIdentifier,'form_body'=>$formBody,'form_category'=>$formCategory,'form_name'=>$formName];
               // print_r($data);
               // die;
               if (GovtFormModel::insert($data)) {
                  // Session::put('attendance',true);
                  $response['status'] = true;
                  $response['message'] = 'Form Body Added Successfully';
                  return ($response);
               } else {
                  $response['message'] = 'Failed to Add Form Body';
                  return ($response);
               }
               return response($response)->header('Content-Type', 'application/json');
            }
         }

         // return response($response)->header('Content-Type', 'application/json');
      // }
      redirect('formUpload');
      // return response($response)->header('Content-Type', 'application/json');
   }
   public function markMyAttendance(Request $req)
   {
      // print_r($_REQUEST);
      // die;
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {

         if (!empty($req->input('attendId'))) {
            //Update
            // die('Update');
            if (EmployeeAttendanceModel::where('id',$req->input('attendId'))->where('status',1)->update(['attendance_time_out'=>$req->input('time')])) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Attendance Marked Check-Out Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Mark Attendance Check-Out';
               return ($response);
            }
         } else {
            // die('insert');
            //Insert
            $condition = array('emp_id' => $req->input('empId'), 'attendance_date' => $req->input('date'));
            $res = EmployeeAttendanceModel::where($condition)->get();
            if (count($res) > 0) {
               $response['message'] = 'Attendance Already Marked';
            } elseif (count($res) == 0) {
               $data = array('emp_id' => $req->input('empId'), 'attendance_date' => $req->input('date'), 'attendance_time_in' => $req->input('time'), 'absent_present' => 1, 'marked_by' => Auth::user()->id);
               if (EmployeeAttendanceModel::insert($data)) {
                  // Session::put('attendance',true);
                  $response['status'] = true;
                  $response['message'] = 'Attendance Marked Check-In Successfully';
                  return ($response);
               } else {
                  $response['message'] = 'Failed to Mark Attendance Check-In';
                  return ($response);
               }
               return response($response)->header('Content-Type', 'application/json');
            }
         }

         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   public function softDeleteEmpAttendance(Request $req)
   {
      // print_r($_REQUEST);die;
      $response['status'] = false;
      $response['message'] = 'Something went wrong';

      if (!empty($req->input('id'))) {
         //Update
         if (EmployeeAttendanceModel::where('id',$req->input('id'))->update(['status'=>0])) {
            // Session::put('attendance',true);
            $response['status'] = true;
            $response['message'] = 'Attendance Data Deleted Successfully';
            return ($response);
         } else {
            $response['message'] = 'Failed to Delete Attendance Data';
            return ($response);
         }
      }

       return response($response)->header('Content-Type', 'application/json');

   }
   public function softDeleteEmpBankDetails(Request $req)
   {
      // print_r($_REQUEST);die;
      $response['status'] = false;
      $response['message'] = 'Something went wrong';

      if (!empty($req->input('id'))) {
         //Update
         if (EmpBankDetailsModel::where('id',$req->input('id'))->update(['status'=>0])) {
            // Session::put('attendance',true);
            $response['status'] = true;
            $response['message'] = 'Attendance Data Deleted Successfully';
            return ($response);
         } else {
            $response['message'] = 'Failed to Delete Attendance Data';
            return ($response);
         }
      }

       return response($response)->header('Content-Type', 'application/json');

   }
   
   public function claimMedicalBenifit(Request $req)
   {
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'), 'claim_type' => $req->input('empClaimType'), 'claim_amount' => $req->input('amount'));
         $res = MedicalClaimModel::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Claim Request Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
                           'emp_id' => $req->input('empId'), 
                           'claim_type' => $req->input('empClaimType'), 
                           'patient_rel' => $req->input('pntRel'),
                           'patient_name' => $req->input('patientName'),
                           'claim_amount' => $req->input('amount'), 'applied_by' => Auth::user()->id);
            // print_r($data);die;
            if (MedicalClaimModel::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Claim Requested Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to  Request Claim';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   public function addNewEmpDeatils(Request $req)
   {
      // print_r($_REQUEST);
      // die;

      
      
     // [] => 2022-12-17
     
            // [empPayTotal] => 59112
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'), 'do_joining' => $req->input('empDoj'));
         $res = User::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Employee Deatils Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'name' => $req->input('empName'),
               'email' => $req->input('empEmail'),
               'emp_id' => $req->input('empId'),
               'dob' => $req->input('empDob'),

               'do_joining' => $req->input('empDoj'),
               'do_retirement' => $req->input('empDort'),
               'gender' => $req->input('empGender'),
               'primary_mob' => $req->input('empMobNo'),
               'alternat_mob' => $req->input('empAltNo'),

               'grade' => $req->input('empGrade'),
               'gpf_no' => $req->input('empGpf'),
               'pay' => $req->input('empPay'),
               'temp_address' => $req->input('empTempAddress'),
               'perm_address' => $req->input('empPerAddress'),
               'user_job_type' => $req->input('empType'),
               'mrg_status' => $req->input('empMrgStatus')
            );
            // print_r($data);die;/
            if (User::insert($data)) {
               // Session::put('attendance',true);
               $empSalary=array(
                  "emp_id"=>$req->input('empId'),
                  "basic_pay"=>$req->input('empPay'),
                  "ta_da"=>$req->input('empPaytada'),
                  "hra"=>$req->input('empPayHra'),
                  "tpt"=>$req->input('empPayTpt'),
                  "pers_pay"=>$req->input('empPayPersPay'),
                  "govt_perks"=>$req->input('empPaygprk')
               );
             
               if(count(EmployeeSalary::where('emp_id',$req->input('empId'))->get())>0){
                  EmployeeSalary::where('emp_id',$req->input('empId'))->update(['salary_status'=>0]);
               }else{
                  EmployeeSalary::insert($empSalary);
               }
               
               $response['status'] = true;
               $response['message'] = 'Employee Deatils Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Employee Deatils';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   public function addEmpBankDeatils(Request $req)
   {
      // print_r  ($_REQUEST);
      // die;
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'), 'acc_no' => $req->input('accNo'));
         $res = EmpBankDetailsModel::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Employee Bank Deatils Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'acc_holder' => $req->input('accHolder'),
               'bank_name' => $req->input('bankName'),
               'branch'=>$req->input('empBranch'),
               'emp_id' => $req->input('empId'),
               'acc_no' => $req->input('accNo'),
               'bank_isfc' => $req->input('isfc')
            );
            // print_r($data);die;/
            if (EmpBankDetailsModel::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee Bank Deatils Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Employee Bank Deatils';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   public function getEmpBankDetails(Request $req){
      $condition = array('emp_id' => $req->input('EmpId'),'status'=>1);
      $res = EmpBankDetailsModel::where($condition)->get();
      if(count($res)>0){
         $response['status'] = true;
         $response['data']=$res;
         $response['message'] = 'Employee Bank Deatils Added Successfully';
      }else{
         $response['status'] = false;
         $response['data']=[];
         $response['message'] = 'No Data Found';
      }
      
      return ($response);
   }
   public function addEmpSkills(Request $req)
   {
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'));
         $res = EmployeeSkill::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Employee Skills Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'primary_skill' => $req->input('empPrmySkill'),
               'secondary_skill' => $req->input('empScndSkill'),
               'emp_id' => $req->input('empId'),
            );
            if (EmployeeSkill::insert($data)) {
               $response['status'] = true;
               $response['message'] = 'Employee Skills Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Employee Skills';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addEmpDependDetails(Request $req)
   {
      // print_r($_POST);
      // die;
    
      $dependentName=$req->input('dependentName');
      $dependentIdNo=$req->input('dependentIdNo');
      $rel=$req->input('rel');

      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $i=0;
         $sta=false;
         foreach($dependentName as $name){
            $condition = array('emp_id' => $req->input('empId'), 'dep_name'=>$name,'id_no'=>$dependentIdNo[$i]);
            $res = DependentDetails::where($condition)->get();
            if (count($res) > 0) {
               // $response['message'] = 'Employee Skills Already Exists';
            } elseif (count($res) == 0) {
               $data = array(
                  'dep_name' => $name,
                  'id_no' => $dependentIdNo[$i],
                  'relation' => $rel[$i],
                  'emp_id' => $req->input('empId'),
               );
               // print_r($data);
               if (DependentDetails::insert($data)) {
                  $sta=true;
                  // $response['status'] = true;
                  // $response['message'] = 'Employee Skills Added Successfully';
                  // return ($response);
               } else {
                  $sta=false;
                  // $response['message'] = 'Failed to Add Employee Skills';
                  // return ($response);
               }
               
               // return response($response)->header('Content-Type', 'application/json');
            }
            $i++;
         }
         if($sta){
            $response['status'] = true;
                  $response['message'] = 'Employee Dependant Added Successfully';
                  // return ($response);
         }else{
               $response['message'] = 'Failed to Add Dependant';
               return ($response);
         
         }
         
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   public function addPfAccDetails(Request $req)
   {
      // print_r  ($_REQUEST);
      // die;
     
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'), 'pf_acc_no' => $req->input('accNo'));
         $res = PFAccount::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Employee PF Deatils Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'emp_id' => $req->input('empId'),
               'pf_acc_no' => $req->input('accNo'),
               'pf_nominee_id' => $req->input('nominee')
            );
            // print_r($data);die;/
            if (PFAccount::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee PF Deatils Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Employee PF Deatils';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addGradeSalaryDetails(Request $req)
   {
      // print_r($_POST);die;
      $data = array(
         'grade_name' => $req->input('grade'),
         'basic_pay' => $req->input('basicPay'),
         'extra_one' => $req->input('extraPayone'),
         'extra_two' => $req->input('extraPaytwo'),
      );
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      $res = GradeSalary::where($data)->get();
      if (count($res) > 0) {
         $response['message'] = 'Grade Already Exists';
      } elseif (count($res) == 0) {
         
         if (GradeSalary::insert($data)) {
            $response['status'] = true;
            $response['message'] = 'Grade Added Successfully';
            return ($response);
         } else {
            $response['message'] = 'Failed to Add Grade';
            return ($response);
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');

   }
   
   public function getGradeDetails(Request $req){
      $condition = array('id' => $req->input('id'),'status'=>1);
      $res = GradeSalary::where($condition)->first();
      if($res){
         $response['status'] = true;
         $response['data']=$res;
         $response['message'] = 'Data Found';
      }else{
         $response['status'] = false;
         $response['data']=[];
         $response['message'] = 'No Data Found';
      }
      
      return ($response);
   }
   public function getDependent(Request $req){
      $condition = array('emp_id' => $req->input('emp_id'),'status'=>1);
      $res = DependentDetails::where($condition)->get();
      if($res){
         $response['status'] = true;
         $response['data']=$res;
         $response['message'] = 'Data Found';
      }else{
         $response['status'] = false;
         $response['data']=[];
         $response['message'] = 'No Data Found';
      }
      
      return ($response);
   }
   public function addCeaClaimRequest(Request $req)
   {
      //  print_r  ($_REQUEST);
      // die;
    
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'), 'child_depnd_id' => $req->input('accNo'));
         $res = EmployeeCeaRequest::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'CEA Request Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'emp_id' => $req->input('empId'),
               'child_depnd_id' => $req->input('child_name'),
               'amount_claimed' => $req->input('amount')
            );
            // print_r($data);die;/
            if (EmployeeCeaRequest::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee CEA Requested Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add CEA Request';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addLTCClaimRequest(Request $req)
   {
      //  print_r  ($_REQUEST);
      // die;

 
    
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'), 'claim_amount' => $req->input('amount'));
         $res = LtcClaim::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'LTC Request Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'emp_id' => $req->input('empId'),
               'applied_by' => 1,
               'claim_amount' => $req->input('amount')
            );
            // print_r($data);die;/
            if (LtcClaim::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee LTC Requested Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add LTC Request';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addUnitDetails(Request $req)
   {
      
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      $condition = array('unit_no' => $req->input('empUnitNo'), 'unit_name' => $req->input('empUnitName'),'unit_address'=>$req->input('unitAddress'),'unit_incharge_id'=>$req->input('unitInchg_'));
      $res = UnitDetail::where($condition)->get();
      if (count($res) > 0) {
         $response['message'] = 'Unit Details Already Exists';
      } elseif (count($res) == 0) {
         unset($condition['unit_incharge_id']);
         $data = array(
            'unit_no' => $req->input('empUnitNo'),
            'unit_name' => $req->input('empUnitName'),
            'unit_address' => $req->input('unitAddress'),
            'unit_incharge_id' => $req->input('unitInchg_'),
            'unit_city' => $req->input('unitCity'),
            'unit_pincode' => $req->input('unitPcode'),
            'unit_incharge_Designation' => $req->input('unitInchgDesig'),
            
            'unit_office_name' => $req->input('unitOfficename'),
            'ofc_email' => $req->input('ofcEmail'),
            'ofc_telephone' => $req->input('ofcTpno'),
            'ofc_alternate_no' => $req->input('ofcAlttNo'),
            
         );
         if(count(UnitDetail::where($condition)->get())>0){
            UnitDetail::where($condition)->update(['status'=>0]);
            if (UnitDetail::insert($data)) {
                  // Session::put('attendance',true);
                  $response['status'] = true;
                  $response['message'] = 'Unit Details Addedd Successfully';
                  return ($response);
               } else {
                  $response['message'] = 'Failed to Add Unit Details';
                  return ($response);
               }
         }else{
            if (UnitDetail::insert($data)) {
                  // Session::put('attendance',true);
                  $response['status'] = true;
                  $response['message'] = 'Unit Details Added Successfully';
                  return ($response);
               } else {
                  $response['message'] = 'Failed to Add Unit Details';
                  return ($response);
               }
         }

         
         // print_r($data);die;/
         // 
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
      
      // print_r($response);die;
      // return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addRetReqDetails(Request $req)
   {

      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'));
         $res = EmpRetRequest::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Retirement Request Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'emp_id' => $req->input('empId'),
            );
            // print_r($data);die;/
            if (EmpRetRequest::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee Retirement Requested Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Retirement Request';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addPensionReqDetails(Request $req)
   {
      // print_r($_POST);
      // die;
      $response['status'] = false;
      $response['message'] = 'Something went wrong';
      if (!empty($req->input('empId'))) {
         $condition = array('emp_id' => $req->input('empId'),"case_type"=>$req->input('ret_case'));
         $res = EmpPensionRequest::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Pension Request Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'emp_id' => $req->input('empId'),
               "case_type"=>$req->input('ret_case')
            );
            // print_r($data);die;/
            if (EmpPensionRequest::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee Pension Requested Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Pension Request';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }
   
   public function addEmpJobDetails(Request $req)
   {
      // print_r($_POST);
      // die;
//       Array
// (
//     [empId] => SME-101-1995
//     [designation] => Software Developer
//     [unitNo] => 212`
//     [unitName] => MT Dehradun
//     [unitIncharge] => Rk Subu Rav
//     [job_status] => 0
//     [unitIncharge] => 2020-01-06
//     [to_prev] => 2023-01-06
// )

      $response['status'] = false;
      $response['message'] = 'Something went wrong';

      // `emp_id`, `designation`, `unit_no`, `unit_name`, `unit_incharge_id`, `unit_job_status`, `status`, `created_at`, `updated_at`, `from_prev`, `to_prev
      if (!empty($req->input('empId'))) {
         $condition = array(
                              'emp_id' => $req->input('empId'),
                              "designation"=>$req->input('designation'),
                              "unit_no"=>$req->input('unitNo'),
                              "unit_name"=>$req->input('unitName'),
                              "unit_incharge_id"=>$req->input('unitIncharge'),
                              "from_prev"=>$req->input('from_prev'),
                              "to_prev"=>$req->input('to_prev'),
                              "unit_job_status"=>$req->input('job_status')
                           );
         $res = EmployeeJobHistory::where($condition)->get();
         if (count($res) > 0) {
            $response['message'] = 'Job History Already Exists';
         } elseif (count($res) == 0) {
            $data = array(
               'emp_id' => $req->input('empId'),
               "designation"=>$req->input('designation'),
               "unit_no"=>$req->input('unitNo'),
               "unit_name"=>$req->input('unitName'),
               "unit_incharge_id"=>$req->input('unitIncharge'),
               "from_prev"=>$req->input('from_prev'),
               "to_prev"=>$req->input('to_prev'),
               "unit_job_status"=>$req->input('job_status')
            );
            // print_r($data);die;/
            if (EmployeeJobHistory::insert($data)) {
               // Session::put('attendance',true);
               $response['status'] = true;
               $response['message'] = 'Employee Job History Added Successfully';
               return ($response);
            } else {
               $response['message'] = 'Failed to Add Job History';
               return ($response);
            }
            return response($response)->header('Content-Type', 'application/json');
         }
         return response($response)->header('Content-Type', 'application/json');
      }
      return response($response)->header('Content-Type', 'application/json');
   }

}
