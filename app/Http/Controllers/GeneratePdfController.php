<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\MedicalClaimModel;
use App\Models\GovtFormModel;
use App\Models\User;

class GeneratePdfController extends Controller
{
    //
    public function index($id) 
    {
        
        $Employees = User::where('status', 1)->get();
        $data = MedicalClaimModel::where('status', 1)
            ->with('empdetails')
            ->get();
        $form=GovtFormModel::where('id',$id)->where('status',1)->first();
        
        Pdf::setOption(['dpi' => 144, 'defaultFont' => 'New Times Roman']);
        return PDF::loadView('employee.sample', compact('form'))->stream('sample.pdf');
        // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')

        // return $pdf->stream('sample.pdf');
    }
}
