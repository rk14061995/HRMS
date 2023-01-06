<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\GeneratePdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnualBudgetReport;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('newlogin');
});
Route::post('/validateLogin', [RedirectController::class,'index'])->name('validateLogin');




Auth::routes();



//Admin Route 
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

           Route::get('/dashboard',[DashboardController::class,'index'])->name('adashboard');

           Route::get('/status', [DashboardController::class,'status'])->name('astatus');
           Route::get('/attendance',[DashboardController::class,'attendance'])->name('aattendance');
           Route::get('/medical', [DashboardController::class,'medical'])->name('amedical');
           Route::get('/leave',[DashboardController::class,'leave'])->name('aleave');
           Route::get('/attend', [DashboardController::class,'regulancer'])->name('aregulancer');
           Route::get('/contact', [DashboardController::class,'contact'])->name('acontact');
           Route::get('/portfolio', [DashboardController::class,'portfolio'])->name('aportfolio');
           Route::get('/permission', [DashboardController::class,'adminpermission'])->name('aadminpermission');
});

//Manager Route 
  Route::prefix('manager')->middleware(['auth','isManager'])->group(function(){

    Route::get('/dashboard',[ManagerController::class,'index'])->name('mdashboard');
    Route::get('/status', [ManagerController::class,'status'])->name('mstatus');
    Route::get('/attendance',[ManagerController::class,'attendance'])->name('mattendance');
    Route::get('/medical', [ManagerController::class,'medical'])->name('mmedical');
    Route::get('/leave',[ManagerController::class,'leave'])->name('mleave');
    Route::get('/attend', [ManagerController::class,'regulancer'])->name('mregulancer');
    Route::get('/contact', [ManagerController::class,'contact'])->name('mcontact');
    Route::get('/portfolio', [ManagerController::class,'portfolio'])->name('mportfolio');
    Route::get('/addemp', [ManagerController::class,'addemp'])->name('maddemp');
    Route::post('/mstore', [ManagerController::class,'store'])->name('mstore');
   
});

//Employee Route 

Route::prefix('emp')->middleware(['auth'])->group(function(){


        Route::get('/home', [HomeController::class, 'unitDetailPage'])->name('home');
        Route::get('/dashboard',[HomeController::class,'unitDetailPage'])->name('empdashboard');;
        Route::get('/status', [HomeController::class,'status'])->name('empstatus');
        Route::get('/attendance',[HomeController::class,'attendance'])->name('empattendance');
        Route::get('/medical', [HomeController::class,'medical'])->name('empmedical');
        Route::get('/leave',[HomeController::class,'leave'])->name('empleave');
        Route::get('/attend', [HomeController::class,'regulancer'])->name('empregulancer');
        Route::get('/contact', [HomeController::class,'contact'])->name('empcontact');
        Route::get('/portfolio', [HomeController::class,'portfolio'])->name('empportfolio');
        Route::get('/applyforleave', [HomeController::class,'applyforleave'])->name('empapplyleave');
        Route::post('/store', [HomeController::class,'store'])->name('empstore');

        Route::get('/empmarkattendance', [HomeController::class,'mark_attendance'])->name('empmarkattendance');
        Route::post('/markMyAttendance', [HomeController::class,'markMyAttendance'])->name('markMyAttendance');
        Route::get('/softDeleteEmpAttendance', [HomeController::class,'softDeleteEmpAttendance'])->name('softDeleteEmpAttendance');

        Route::get('/empattendancelist', [HomeController::class,'list_attendance'])->name('empattendancelist');
        Route::get('/empleavelist', [HomeController::class,'list_leave'])->name('empleavelist');
        Route::get('/empleaveapply', [HomeController::class,'apply_leave'])->name('empleaveapply'); 
        Route::get('/empret', [HomeController::class,'apply_empret'])->name('empret');
        Route::get('/empretamountcal', [HomeController::class,'cal_empretamount'])->name('empretamountcal'); 

        
        Route::post('/addEmpJobDetails', [HomeController::class,'addEmpJobDetails'])->name('addEmpJobDetails');
        //LTC
        Route::get('/empltcclaim', [HomeController::class,'apply_empltcclaim'])->name('empltcclaim');  
        Route::get('/view-claim-details{id}', [HomeController::class,'viewEmployeeClaimRequest'])->name('view-claim-details');
        Route::get('/empltcclaim-o', [HomeController::class,'apply_empltcclaimOld'])->name('empltcclaim-o');
        Route::get('/empltcwithdraw', [HomeController::class,'withdrwal_empltc'])->name('empltcwithdraw'); 
        Route::post('/addLTCClaimRequest', [HomeController::class,'addLTCClaimRequest'])->name('addLTCClaimRequest');

         //CEA
        Route::get('/empcealaim{id?}', [HomeController::class,'apply_empcealaim'])->name('empcealaim');  
        Route::get('/empceaclaim', [HomeController::class,'apply_empceaclaim'])->name('empceaclaim');
        Route::post('/getDependent', [HomeController::class,'getDependent'])->name('getDependent'); 
        Route::post('/addCeaClaimRequest', [HomeController::class,'addCeaClaimRequest'])->name('addCeaClaimRequest');
        // Route::get('/view-claim-details{id}', [HomeController::class,'viewEmployeeClaimRequest'])->name('view-claim-details');
        // Route::get('/empltcclaim-o', [HomeController::class,'apply_empltcclaimOld'])->name('empltcclaim-o');
        // Route::get('/empltcwithdraw', [HomeController::class,'withdrwal_empltc'])->name('empltcwithdraw'); 


        //LTC Form Routes 
        Route::get('/view-ltc-form{id?}', [HomeController::class,'ltc_claim_doc'])->name('view-ltc-form');
        Route::get('/view-ltc-claim-Final-form{id}', [HomeController::class,'viewEmployeeClaimRequestApplication'])->name('view-ltc-claim-Final-form');
        Route::get('/view-ltc-claim-req-form{id}', [HomeController::class,'viewEmployeeLtcBlockYearApplication'])->name('view-ltc-claim-req-form');
        Route::get('/view-ltc-claim-den-form{id}', [HomeController::class,'viewEmployeeClaimDependForm'])->name('view-ltc-claim-den-form');
        Route::get('/view-ltc-claim-counter-signed-form{id}', [HomeController::class,'viewEmployeeClaimCounterSignedForm'])->name('view-ltc-claim-counter-signed-form');
        Route::get('/view-ltc-claim-payment-rcvd-form{id}', [HomeController::class,'viewEmployeeClaimPmtRcvdorm'])->name('view-ltc-claim-payment-rcvd-form');
        
        //Medical Claim Routes
        Route::get('/empmedicalclaim', [HomeController::class,'apply_empmedclaim'])->name('empmedicalclaim'); 
        Route::post('/claimMedicalBenifit', [HomeController::class,'claimMedicalBenifit'])->name('claimMedicalBenifit');
        Route::get('/view-medical-claim-form{id?}', [HomeController::class,'mdcl_claim_doc'])->name('view-medical-claim-form');

        //Unit Deatails
        Route::get('/unit-details', [HomeController::class,'unitDetailPage'])->name('unit-details'); 
        Route::post('/addUnitDetails', [HomeController::class,'addUnitDetails'])->name('addUnitDetails');

        //Retirement and Pension
        Route::get('/pension-application', [HomeController::class,'pensionCreation'])->name('pension-application'); 
        Route::post('/addRetReqDetails', [HomeController::class,'addRetReqDetails'])->name('addRetReqDetails');
        Route::post('/addPensionReqDetails', [HomeController::class,'addPensionReqDetails'])->name('addPensionReqDetails');
        Route::get('/show-regular-pension{id?}', [HomeController::class,'showRegularPensionForm'])->name('show-regular-pension');
        Route::get('/show-other-case-pension{id?}', [HomeController::class,'showOtherPensionForm'])->name('show-other-case-pension');


        Route::get('/grade-salary', [HomeController::class,'gradeSalary'])->name('grade-salary'); 
        Route::get('/empsalslip', [HomeController::class,'apply_empsalslip'])->name('empsalslip'); 
        
        Route::get('/empsalslipcreation', [HomeController::class,'generate_empsalslip'])->name('empsalslipcreation');

        
        Route::get('/empgpfwithdraw', [HomeController::class,'withdrwal_empgpf'])->name('empgpfwithdraw');

        Route::get('/createEmpPage', [HomeController::class,'createEmpPage'])->name('createEmpPage');  
        Route::get('/employeDetails{id}', [HomeController::class,'employeDetails'])->name('employeDetails');

        Route::get('/employee-listing', [HomeController::class,'EmployeeList'])->name('employee-listing'); 
        Route::get('/employee-skills', [HomeController::class,'EmployeeSkillList'])->name('employee-skills');
        Route::get('employee-job-history', [HomeController::class,'EmployeeJobHistory'])->name('employee-job-history');

        Route::post('/addNewEmpDeatils', [HomeController::class,'addNewEmpDeatils'])->name('addNewEmpDeatils');
        
        Route::post('/addGradeSalaryDetails', [HomeController::class,'addGradeSalaryDetails'])->name('addGradeSalaryDetails');
        Route::post('/addEmpBankDeatils', [HomeController::class,'addEmpBankDeatils'])->name('addEmpBankDeatils');
        Route::post('/addEmpDependDetails', [HomeController::class,'addEmpDependDetails'])->name('addEmpDependDetails');
        
        Route::post('/getEmpBankDetails', [HomeController::class,'getEmpBankDetails'])->name('getEmpBankDetails');
        Route::post('/addPfAccDetails', [HomeController::class,'addPfAccDetails'])->name('addPfAccDetails');
        Route::post('/getGradeDetails', [HomeController::class,'getGradeDetails'])->name('getGradeDetails');
        
        
        Route::get('/softDeleteEmpBankDetails', [HomeController::class,'softDeleteEmpBankDetails'])->name('softDeleteEmpBankDetails');
        Route::post('/addEmpSkills', [HomeController::class,'addEmpSkills'])->name('addEmpSkills'); 

        Route::post('/mstore', [HomeController::class,'addNewData'])->name('mstore');

        
        Route::get('/formUpload', [HomeController::class,'formUpload'])->name('formUpload');
        Route::get('/formDataFill{id}', [HomeController::class,'formDataFill'])->name('formDataFill');
        Route::post('/uploadFormBody', [HomeController::class,'uploadFormBody'])->name('uploadFormBody');
        Route::get('/pdf{id}', [GeneratePdfController::class, 'index'])->name('pdf');

        //Budget Report
        Route::get('/Annual-Budget-Report', [AnnualBudgetReport::class,'index'])->name('Annual-Budget-Report'); 


});
