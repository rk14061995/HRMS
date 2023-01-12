@extends('employee.layouts.main')
@section('main')
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont mt-2">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <label class="font-weight-bold"> Medical Claim Document</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#apply_cea" role="tab">Medical Claim Document</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reimur" role="tab">RE-IMBURSEMENT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#claim_form" role="tab">Claim Form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#claim_recpt" role="tab">Claim Reciept</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#app_cea_req" role="tab">CEA Approved
                                        Requests</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#rej_cea_req" role="tab">CEA Rejected
                                        Requests</a>
                                </li>


                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane " id="reimur" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('reimu_div')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row">
                                                <div class="col-md-12 px-5" id="reimu_div">
                                                    <style>
                                                        input {
                                                            border-top-style: hidden;
                                                            border-right-style: hidden;
                                                            border-left-style: hidden;
                                                            border-bottom-style: groove;
                                                            /* background-color: #eee; */
                                                        }
                                    
                                                        .no-outline:focus {
                                                            outline: none;
                                                        }
                                                    </style>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4 style="text-align: center;"><u>UNIT CODE :  @if ($unitDetails)
                                                                
                                                                    <input type="text"  style=" width:50px" value="{{$unitDetails->unit_no  ? $unitDetails->unit_no : '' }}">
                                                            
                                                            @else
                                                                <input type="text"  style=" width:50px" value="">
                                                            @endif</u></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-right">
                                                            <div style="text-align: end;">
                                                                <p>Telephone : @if ($unitDetails)
                                                                
                                                                    <input type="text"  style=" width:100px" value="{{$unitDetails->ofc_telephone  ? $unitDetails->ofc_telephone : '' }}">
                                                            
                                                            @else
                                                                <input type="text"  style=" width:100px" value="">
                                                            @endif</p>
                                                                <p>@if ($unitDetails)
                                                                
                                                                    <input type="text"  style=" width:160px" value="{{$unitDetails->unit_name  ? $unitDetails->unit_name : '' }}">
                                                            
                                                            @else
                                                                <input type="text"  style=" width:160px" value="">
                                                            @endif @if ($unitDetails)
                                                                
                                                                    <input type="text"  style=" width:100px" value="{{$unitDetails->unit_address  ? $unitDetails->unit_address : '' }}">
                                                            
                                                            @else
                                                                <input type="text"  style=" width:100px" value="">
                                                            @endif
                                                            - 
                                                            @if ($unitDetails)
                                                                
                                                                    <input type="text"  style=" width:50px" value="{{$unitDetails->unit_pincode  ? $unitDetails->unit_pincode : '' }}">
                                                            
                                                            @else
                                                                <input type="text"  style=" width:50px" value="">
                                                            @endif</p>
                                                                {{-- <p>Pin Code - 900106</p> --}}
                                                                <p class="mt-3"> Oct - 2022</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>21101/ Civ/ NIP/JB</p>
                                                            <p>Area Accounts Office<br>@if ($unitDetails)
                                                                
                                                                <input type="text"  style=" width:150px" value="{{$unitDetails->unit_address  ? $unitDetails->unit_address : '' }}">
                                                        
                                                        @else
                                                            <input type="text"  style=" width:150px" value="">
                                                        @endif - @if ($unitDetails)
                                                                
                                                        <input type="text"  style=" width:150px" value="{{$unitDetails->unit_pincode  ? $unitDetails->unit_pincode : '' }}">
                                                
                                                    @else
                                                        <input type="text"  style=" width:150px" value="">
                                                    @endif</p>


                                                            <h4 style="text-align: center;"><u> RE-IMBURSEMENT OF MEDICAL CLAIM IN RESPECT <br>
                                                                    OF NO P - 1009 MTS SH @if ($data)
                                                                    @foreach ($data as $user)
                                                                        <input type="text"  style=" width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                    @endforeach 
                                                                @else
                                                                    <input type="text"  style=" width:150px" value="">
                                                                @endif </u></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col px-5">
                                                            <p><span class="mx-3">1.</span>Sh @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:100px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                @endforeach 
                                                            @else
                                                                <input type="text"  style=" width:100px" value="">
                                                            @endif is a CGHS beneficiary and serving in this unit <br>
                                                                as MTS. His @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:50px" value="{{$user->patient_rel  ? $user->patient_rel : '' }}">
                                                                @endforeach 
                                                            @else
                                                                <input type="text"  style=" width:150px" value="">
                                                            @endif @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:150px" value="{{$user->patient_name  ? $user->patient_name : '' }}">
                                                                @endforeach 
                                                            @else
                                                                <input type="text"  style=" width:150px" value="">
                                                            @endif was under treatment at @if ($data)
                                                            @foreach ($data as $user)
                                                                <input type="text"  style=" width:150px" value="{{$user->hospital_add  ? $user->hospital_add : '' }}">
                                                            @endforeach 
                                                        @else
                                                            <input type="text"  style=" width:150px" value="">
                                                        @endif<br>
                                                                she got treatment under emergency from above named hospital .<br>
                                                                Accordingly, hospital is submitted MEDICAL claim for  @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                @endforeach 
                                                            @else
                                                                <input type="text"  style=" width:150px" value="">
                                                            @endif/- for the same.
                                                            </p>

                                                            <p><span class="mx-3">2..</span>In view fo the above, sy bill for Rs. @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                @endforeach 
                                                            @else
                                                                <input type="text"  style=" width:150px" value="">
                                                            @endif/- along with the <br>
                                                                following docs/papers is submitted herewith for your audit verification and onward submission of area accounts
                                                                Office for early payment :-</p>



                                                            <p><span class="mx-4">(a)</span>Med-2004 form in original.</p>
                                                            <p><span class="mx-4">(b)</span>Cash memo/bills in original.</p>
                                                            <p><span class="mx-4">(c)</span>Check list.</p>

                                                            <p><span class="mx-4">(d)</span>Photo copy of CGHS Identity Card </p>
                                                            <p><span class="mx-4">(e)</span>All reports.</p>
                                                            <p><span class="mx-4">(f)</span>Discharge summary.</p>

                                                            <p><span class="mx-3">3.</span> Chague for the amount may please be issued in favour of @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:150px" value="{{$user->hospital_add  ? $user->hospital_add : '' }}">
                                                                @endforeach 
                                                            @else
                                                                <input type="text"  style=" width:150px" value="">
                                                            @endif and crediting the same in @if ($data)
                                                            @foreach ($data as $user)
                                                                <input type="text"  style=" width:150px" value="{{$user->hospital_bank  ? $user->hospital_bank : '' }}">
                                                            @endforeach 
                                                        @else
                                                            <input type="text"  style=" width:150px" value="">
                                                        @endif, @if ($data)
                                                        @foreach ($data as $user)
                                                            <input type="text"  style=" width:150px" value="{{$user->hospital_branch  ? $user->hospital_branch : '' }}">
                                                        @endforeach 
                                                    @else
                                                        <input type="text"  style=" width:150px" value="">
                                                    @endif crediting to account no @if ($data)
                                                    @foreach ($data as $user)
                                                        <input type="text"  style=" width:150px" value="{{$user->hospital_acc_no  ? $user->hospital_acc_no : '' }}">
                                                    @endforeach 
                                                    @else
                                                        <input type="text"  style=" width:150px" value="">
                                                    @endif of the above hospital.</p>

                                                            <p><span class="mx-5">4.</span>An early action will be highly apprecaited.</p>


                                                            <h6 style="text-align: end;">(<input type="text"  style=" width:150px" value="{{($unitDetails->unit_name)  ? $unitDetails->unit_name : '' }}">)<br><input type="text"  style=" width:150px" value="{{($unitDetails->unit_incharge_Designation)  ? $unitDetails->unit_incharge_Designation : '' }}"><br>Civ Est Officer<br>for Commanding Officer</h6>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="tab-pane " id="claim_form" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('claim_form_div')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row">
                                                
                                                <div class="col-md-12 px-5 " id="claim_form_div">
                                                    <style>
                                                        input {
                                                           border-top-style: hidden;
                                                           border-right-style: hidden;
                                                           border-left-style: hidden;
                                                           border-bottom-style: groove;
                                                           /* background-color: #eee; */
                                                       }
                                   
                                                       .no-outline:focus {
                                                           outline: none;
                                                       }
                                                   </style>
                                                    <div class="row">
                                                        <div class="col text-center">
                                                            <h4><u>
                                                                CENTRAL GOVERMENT HEALTH SCHEME<br>MEDICAL REIMBURSEMENT CLAIM FORM
                                                            </u></h4>
                                                            <H6><u>(To be filled up by the principal card hoider in Block Letters)</u></H6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <table class="w-100" border="1">
                                                                <thead>
                                                                    <th>1.</th>
                                                                    <th>(a).</th>
                                                                    <th>Name of the principal CGHS Crad Holder</th>
                                                                    <th>SH Jai Bhagwan</th>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(b).</td>
                                                                        <td>CGHS Ben ID No</td>
                                                                        <td>25458255</td>
                                                                    </tr>



                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(c).</td>
                                                                        <td>Employee Code No.</td>
                                                                        <td>25458255</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(d).</td>
                                                                        <td>Waed Entitlement-Pvt//Semi-Pvt/Greral</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(e).</td>
                                                                        <td>Full address </td>
                                                                        <td>25458255</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(f).</td>
                                                                        <td>Mobile Telephone no and email address, if any</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>(a).</td>
                                                                        <td>Patient's Name</td>
                                                                        <td>25458255</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(b).</td>
                                                                        <td>Patinet's CGHS Ben ID No.</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(c).</td>
                                                                        <td>Relationship with the principal CGHS card holder</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td></td>
                                                                        <td>Name & address of the hospital/diagnostic center/<br>
                                                                        imaging center where treatment is taken or test done</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td></td>
                                                                        <td>Whether the hospital/diagnostic/imaging center is <br>empanelled under CGHS</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>(a).<br>(b).</td>
                                                                        <td>Treatment for which reimbursement claimed <br>
                                                                        OPO treatment / Test & investigations<br>
                                                                        Indool Treatment</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>6.</td>
                                                                        <td></td>
                                                                        <td>Whether treatment was taken in emergency</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>7.</td>
                                                                        <td></td>
                                                                        <td>Whether prior permission was taken for the treatment</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>8.</td>
                                                                        <td></td>
                                                                        <td>Whether subscribing to any health/medical insurance<br>scheme,if yes amount claimed/received</td>
                                                                        <td>25458255</td>
                                                                    </tr>



                                                                    <tr>
                                                                        <td>9.</td>
                                                                        <td></td>
                                                                        <td>Details of medical Advance taken, if any</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>10.</td>
                                                                        <td>(a).<br>(b).<br>(c).</td>
                                                                        <td>Total amount claimed<br>OPD Treatment<br>Indoor Treatment<br>Test/Investigation</td>
                                                                        <td>25458255</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>11.</td>
                                                                        <td></td>
                                                                        <td>Name of Bank</td>
                                                                        <td>25458255</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>11.</td>
                                                                        <td></td>
                                                                        <td>SB A/C No</td>
                                                                        <td>25458255</td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>11.</td>
                                                                        <td></td>
                                                                        <td>Branch MICR Code</td>
                                                                        <td>25458255</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>11.</td>
                                                                        <td></td>
                                                                        <td>IFSC Code</td>
                                                                        <td>25458255</td>
                                                                    </tr>
                                                                </tbody>
                                                                

                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                        



                                                    

                                                   
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="tab-pane " id="claim_recpt" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('claim_rcpt_div')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row">
                                                
                                            <div class="col-md-12 p-5" id="claim_rcpt_div">
                                                                
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 style="text-align: center;"><u> STATION WORKSHOP EME DELHI CANTT - 110010</u></h4>

                                                        <h6 style="text-align: center;"><u> Sy Bill No : 21101/Civ/NIP/JB Dated : OCT 2022</u></h6>


                                                        <table class="w-100" border="1">
                                                            <thead>
                                                                <th>T No. Trade & Name </th>
                                                                <th>Basic pay </th>
                                                                <th>Name of Patient & <br>Relationship</th>
                                                                <th>Period Of <br>treatment</th>
                                                                <th>Period of claim</th>
                                                                <th>Amt claimed</th>
                                                                <th>Remarks</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>No P - 1011 MTS <br> Sh Jai Bhagwan<br>
                                                                    BOB: 01.01. 1998 <br> DOA 18. 17 1998 <br> DOR31.12.2030 <br>GPF No 597907</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>


                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>TOTAL</td>
                                                                    <td>Rs 55,264/-</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                            
                                                        </table>
                                                        <p>Total amount claimed : Rs. 55, 264.00</p>
                                                        <h6 style="text-align: end;">(Tusher Joshi)<br><input type="text"  style=" width:150px" value="{{$unitDetails->unit_incharge_Designation  ? $unitDetails->unit_incharge_Designation : '' }}"> <br> Civ Est Officer<br> for Commanding Officer</h6>
                                                    </div>
                                                </div>
                                                    
                                               
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="tab-pane " id="reimudfdfr" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="tab-pane " id="reimurdf" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                           
                                        </div>
                                    </div>
                                   
                                </div>







                                <div class="tab-pane active" id="apply_cea" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printDiv()" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row" id="DivIdToPrint">
                                                   
                                                    <div class="col">
                                                        <div class="row">

                                                            <div class="col-md-12 px-5" id="">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h4 style="text-align: center;"><u>UNIT CODE :  @if ($unitDetails)
                                                                            
                                                                                <input type="text"  style=" width:50px" value="{{$unitDetails->unit_no  ? $unitDetails->unit_no : '' }}">
                                                                           
                                                                        @else
                                                                            <input type="text"  style=" width:50px" value="">
                                                                        @endif</u></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-right">
                                                                        <div style="text-align: end;">
                                                                            <p>Telephone : @if ($unitDetails)
                                                                            
                                                                                <input type="text"  style=" width:150px" value="{{$unitDetails->ofc_telephone  ? $unitDetails->ofc_telephone : '' }}">
                                                                           
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif</p>
                                                                            <p>@if ($unitDetails)
                                                                            
                                                                                <input type="text"  style=" width:150px" value="{{$unitDetails->unit_name  ? $unitDetails->unit_name : '' }}">
                                                                           
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif @if ($unitDetails)
                                                                            
                                                                                <input type="text"  style=" width:150px" value="{{$unitDetails->unit_address  ? $unitDetails->unit_address : '' }}">
                                                                        
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif
                                                                        - 
                                                                        @if ($unitDetails)
                                                                            
                                                                                <input type="text"  style=" width:150px" value="{{$unitDetails->unit_pincode  ? $unitDetails->unit_pincode : '' }}">
                                                                        
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif</p>
                                                                            {{-- <p>Pin Code - 900106</p> --}}
                                                                            <p class="mt-3"> Oct - 2022</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p>21101/ Civ/ NIP/JB</p>
                                                                        <p>Area Accounts Office<br>@if ($unitDetails)
                                                                            
                                                                            <input type="text"  style=" width:150px" value="{{$unitDetails->unit_address  ? $unitDetails->unit_address : '' }}">
                                                                    
                                                                    @else
                                                                        <input type="text"  style=" width:150px" value="">
                                                                    @endif - @if ($unitDetails)
                                                                            
                                                                    <input type="text"  style=" width:150px" value="{{$unitDetails->unit_pincode  ? $unitDetails->unit_pincode : '' }}">
                                                            
                                                                @else
                                                                    <input type="text"  style=" width:150px" value="">
                                                                @endif</p>


                                                                        <h4 style="text-align: center;"><u> RE-IMBURSEMENT OF MEDICAL CLAIM IN RESPECT <br>
                                                                                OF NO P - 1009 MTS SH @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style=" width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style=" width:150px" value="">
                                                                            @endif </u></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p><span class="mx-3">1.</span>Sh @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style=" width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif is a CGHS beneficiary and serving in this unit <br>
                                                                            as MTS. His @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style=" width:150px" value="{{$user->patient_rel  ? $user->patient_rel : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style=" width:150px" value="{{$user->patient_name  ? $user->patient_name : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif was under treatment at @if ($data)
                                                                        @foreach ($data as $user)
                                                                            <input type="text"  style=" width:150px" value="{{$user->hospital_add  ? $user->hospital_add : '' }}">
                                                                        @endforeach 
                                                                    @else
                                                                        <input type="text"  style=" width:150px" value="">
                                                                    @endif<br>
                                                                            she got treatment under emergency from above named hospital .<br>
                                                                            Accordingly, hospital is submitted MEDICAL claim for  @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style=" width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif/- for the same.
                                                                        </p>
        
                                                                        <p><span class="mx-3">2..</span>In view fo the above, sy bill for Rs. @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style=" width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif/- along with the <br>
                                                                            following docs/papers is submitted herewith for your audit verification and onward submission of area accounts
                                                                            Office for early payment :-</p>
        
        
        
                                                                        <p><span class="mx-4">(a)</span>Med-2004 form in original.</p>
                                                                        <p><span class="mx-4">(b)</span>Cash memo/bills in original.</p>
                                                                        <p><span class="mx-4">(c)</span>Check list.</p>
        
                                                                        <p><span class="mx-4">(d)</span>Photo copy of CGHS Identity Card </p>
                                                                        <p><span class="mx-4">(e)</span>All reports.</p>
                                                                        <p><span class="mx-4">(f)</span>Discharge summary.</p>
        
                                                                        <p><span class="mx-3">3.</span> Chague for the amount may please be issued in favour of @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style=" width:150px" value="{{$user->hospital_add  ? $user->hospital_add : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style=" width:150px" value="">
                                                                        @endif and crediting the same in @if ($data)
                                                                        @foreach ($data as $user)
                                                                            <input type="text"  style=" width:150px" value="{{$user->hospital_bank  ? $user->hospital_bank : '' }}">
                                                                        @endforeach 
                                                                    @else
                                                                        <input type="text"  style=" width:150px" value="">
                                                                    @endif, @if ($data)
                                                                    @foreach ($data as $user)
                                                                        <input type="text"  style=" width:150px" value="{{$user->hospital_branch  ? $user->hospital_branch : '' }}">
                                                                    @endforeach 
                                                                @else
                                                                    <input type="text"  style=" width:150px" value="">
                                                                @endif crediting to account no @if ($data)
                                                                @foreach ($data as $user)
                                                                    <input type="text"  style=" width:150px" value="{{$user->hospital_acc_no  ? $user->hospital_acc_no : '' }}">
                                                                @endforeach 
                                                                @else
                                                                    <input type="text"  style=" width:150px" value="">
                                                                @endif of the above hospital.</p>
        
                                                                        <p><span class="mx-5">4.</span>An early action will be highly apprecaited.</p>
        
        
                                                                        <h6 style="text-align: end;">(<input type="text"  style=" width:150px" value="{{($unitDetails->unit_name)  ? $unitDetails->unit_name : '' }}">)<br><input type="text"  style=" width:150px" value="{{($unitDetails->unit_incharge_Designation)  ? $unitDetails->unit_incharge_Designation : '' }}"><br>Civ Est Officer<br>for Commanding Officer</h6>
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row mt-5">
                                                            <div class="col-md-12 px-5 " id="">
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h4><u>
                                                                            CENTRAL GOVERMENT HEALTH SCHEME<br>MEDICAL REIMBURSEMENT CLAIM FORM
                                                                        </u></h4>
                                                                        <H6><u>(To be filled up by the principal card hoider in Block Letters)</u></H6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <table class="w-100" border="1">
                                                                            <thead>
                                                                                <th>1.</th>
                                                                                <th>(a).</th>
                                                                                <th>Name of the principal CGHS Crad Holder</th>
                                                                                <th>SH Jai Bhagwan</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b).</td>
                                                                                    <td>CGHS Ben ID No</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
        
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(c).</td>
                                                                                    <td>Employee Code No.</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(d).</td>
                                                                                    <td>Waed Entitlement-Pvt//Semi-Pvt/Greral</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(e).</td>
                                                                                    <td>Full address </td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(f).</td>
                                                                                    <td>Mobile Telephone no and email address, if any</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>2.</td>
                                                                                    <td>(a).</td>
                                                                                    <td>Patient's Name</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b).</td>
                                                                                    <td>Patinet's CGHS Ben ID No.</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(c).</td>
                                                                                    <td>Relationship with the principal CGHS card holder</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>3.</td>
                                                                                    <td></td>
                                                                                    <td>Name & address of the hospital/diagnostic center/<br>
                                                                                    imaging center where treatment is taken or test done</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>4.</td>
                                                                                    <td></td>
                                                                                    <td>Whether the hospital/diagnostic/imaging center is <br>empanelled under CGHS</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>5.</td>
                                                                                    <td>(a).<br>(b).</td>
                                                                                    <td>Treatment for which reimbursement claimed <br>
                                                                                    OPO treatment / Test & investigations<br>
                                                                                    Indool Treatment</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>6.</td>
                                                                                    <td></td>
                                                                                    <td>Whether treatment was taken in emergency</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>7.</td>
                                                                                    <td></td>
                                                                                    <td>Whether prior permission was taken for the treatment</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>8.</td>
                                                                                    <td></td>
                                                                                    <td>Whether subscribing to any health/medical insurance<br>scheme,if yes amount claimed/received</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
        
                                                                                <tr>
                                                                                    <td>9.</td>
                                                                                    <td></td>
                                                                                    <td>Details of medical Advance taken, if any</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>10.</td>
                                                                                    <td>(a).<br>(b).<br>(c).</td>
                                                                                    <td>Total amount claimed<br>OPD Treatment<br>Indoor Treatment<br>Test/Investigation</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
                                                                                <tr>
                                                                                    <td>11.</td>
                                                                                    <td></td>
                                                                                    <td>Name of Bank</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
                                                                                <tr>
                                                                                    <td>11.</td>
                                                                                    <td></td>
                                                                                    <td>SB A/C No</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
        
                                                                                <tr>
                                                                                    <td>11.</td>
                                                                                    <td></td>
                                                                                    <td>Branch MICR Code</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
        
                                                                                <tr>
                                                                                    <td>11.</td>
                                                                                    <td></td>
                                                                                    <td>IFSC Code</td>
                                                                                    <td>25458255</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            
        
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                
                                                                    



                                                                

                                                               
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row mt-5">

                                                            <div class="col-md-12 p-5 " id="">
                                                                
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h5 style="text-align: center;" class="mt-5"><u>DECLARATION</u></h5>

                                                                        <P> I hereby declare thet the statements made in the application are true to the best of my knowledge and belief
                                                                            and the person for whom medical expenses were incurred is wholly dependent on me. I am a CGHS beneficiary and
                                                                            the CGHS card was valid at the time of treatment , I agree for the reimbursement as is admissible under the
                                                                            rules.</P>


                                                                        <p>Date : Oct 2022</p>
                                                                        <p style="text-align: end;">Signature if the principal CGHS card holdr <br> (Jaibhagwan)</p>
                                                                    </div>
                                                                </div>
                                                                


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row mt-5">

                                                            <div class="col-md-12 p-5" id="">
                                                                
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h4 style="text-align: center;"><u> STATION WORKSHOP EME DELHI CANTT - 110010</u></h4>

                                                                        <h6 style="text-align: center;"><u> Sy Bill No : 21101/Civ/NIP/JB Dated : OCT 2022</u></h6>


                                                                        <table class="w-100" border="1">
                                                                            <thead>
                                                                                <th>T No. Trade & Name </th>
                                                                                <th>Basic pay </th>
                                                                                <th>Name of Patient & <br>Relationship</th>
                                                                                <th>Period Of <br>treatment</th>
                                                                                <th>Period of claim</th>
                                                                                <th>Amt claimed</th>
                                                                                <th>Remarks</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>No P - 1011 MTS <br> Sh Jai Bhagwan<br>
                                                                                    BOB: 01.01. 1998 <br> DOA 18. 17 1998 <br> DOR31.12.2030 <br>GPF No 597907</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
    
    
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td>TOTAL</td>
                                                                                    <td>Rs 55,264/-</td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            
                                                                        </table>
                                                                        <p>Total amount claimed : Rs. 55, 264.00</p>
                                                                        <h6 style="text-align: end;">(Tusher Joshi)<br><input type="text"  style=" width:150px" value="{{$unitDetails->unit_incharge_Designation  ? $unitDetails->unit_incharge_Designation : '' }}"> <br> Civ Est Officer<br> for Commanding Officer</h6>
                                                                    </div>
                                                                </div>
                                                                    
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            
                                                            <div class="col-md-12 p-5 " id="">
                                                                

                                                                <h4 style="text-align: center;" class="mt-5"><u>STATEMENT OF CASE FOR RE-IMBURSEMENT OF MEDICAL CLAIM FOR <br>
                                                                        EMERGENCY TREATMENT OF IN R/O SMT NITU W/O P-1019 MTS ANIL KUMAR <br> AT SOHUM NURSING HOME, 238, K.P ROAD,
                                                                        BULANDSHAHAR-203001</u></h4>


                                                                <h5 style="text-align: center;" class="mt-5"><u>INTRODUCTION</u></h5>


                                                                <p><span class=" mx-4">1.</span> Smt Nitu W/o p-1019 MTS SH Anil Kumar was admitted to hospital in emergency
                                                                    condition. patient was admitted with complaints of hysteaotimy Necessary Investigation and treatment have been
                                                                    done as mentioned in Discharge Summary at sohum nursing Home, K.P Road, bulandsahar(UP). Amount Rs.
                                                                    31.116/-(Rupess <b>Thirty One Thousand one Hundred Sixteen Only</b> ) expended by hospital for treatment of
                                                                    lndl concened for the period <b>02 May 2021 to 06 May 2021.</b></p>


                                                                <h4 style="text-align: center;" class="mt-5"><u> PROPOSAL</u></h4>

                                                                <p><span class="mx-3">2.</span> It is proposed to refund medical expenses incurred in connection with treatment of
                                                                    Smt Nitu W/o P - 1019 MTS Sh Anil Kumar who has taken indoor treatment at sohum nursing Home , K.P. Roat
                                                                    bulandsahar (UP). </p>

                                                                <h4 style="text-align: center;" class="mt-5"><u> DETAILED JUSTIFICATION</u></h4>


                                                                <P><span class="mx-3">3.</span> Smt nitu W/o p-1019 MTS Sh Anil kumar was admitted in emergency with sohum nursing
                                                                    Hime , K.P Road, bulandsahar(UP). Keeping in view the case, indl had
                                                                    undergone for emergency treatmengt at complaints of hysteaotimy . This is in line with medical rules in vogue.
                                                                </P>


                                                                <h4 style="text-align: center;" class="mt-5"><u> FINANCIAL EFFECT</u></h4>


                                                                <P><span class="mx-5">4.</span> The total amount Rs. <u><b>31.116/-</b></u>(Rupees <b>Thirty One Thousand one
                                                                        Hundred Sixteen Only</b> ) Has been expended by the hospital for Indl Concerned treatment during the Period
                                                                    02 May 2021 to 06 May 2021.</P>



                                                                <h4 style="text-align: center;" class="mt-5"><u>SUMMARY</u></h4>


                                                                <p> <span class="mx-4">5.</span> It is recommended that the case of <b>Smt Nitu W/O p-1019 Sh Anil Kumar
                                                                    </b> Genuine and lndl concened in emergency indoor treatment has spent the total amount Rs . <b>
                                                                        31,116/-(Rupees Thirty onre Thousand one Hundred Sixteen Only ),</b> the
                                                                    re-imbursement of medical calim is admissible. Hence, It is recommended for sanction of
                                                                    competent authority as per relevent documents attached.</p>





                                                                <p>Station Wksp EME <br> Delhi Cantt-110010</p>


                                                                <p class="mt-3"> Date : Oct 2021</p>




                                                                <p style="text-align: end;"> (<input type="text"  style=" width:150px" value="{{$unitDetails->unit_name  ? $unitDetails->unit_name : '' }}">)<br>Asst Exce Engineer <br>
                                                                    Civ Est Officer <br> For Commanding officer</p>


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                           
                                                            <div class="col-md-12 p-5 " id="">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h4 style="text-align: center;"> <u> EX- POST-FACTO SANCTION</u></h4>

                                                                        <p><span class="mx-4">1.</span> Ex-Post - facto sanction of commanding officer, station workshop
                                                                            EME, Delhi cantt is hereby accorded in terms of govt of India, Min of defence letter No 13 (1) 2003 / D (Civ)
                                                                            dated 08 Jun 2004, Army HQ
                                                                            letter No B/24233/P/Med/EME Civ-3 dated 16 Jul 2004 and army HQ
                                                                            letter No B / 24233/p/Med/ EME Civ-3 dated 20 jun 2006 to <b>P.No. 1014 MTS Shri Naresh Kumar,</b> CGHs token
                                                                            No <b>813802</b> of station workshop
                                                                            EME, Delhi cantt - 10 for self-treatment from Ansari hospital,
                                                                            kailashpuri road, main sagarpur. new delhi 110046 which is a CGHS
                                                                            approved centre / hospital on <b>emergency.</b> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-md-6">

                                                                        <p><span>2.</span> Amount admissible for - re-imbursement as per audit  report of area
                                                                        accounts
                                                                        Office, delhi cantt.</p>
                                                                    </div>

                                                                    <div class=" col-md-6">

                                                                        <p><b>Rs.40,795/- (Rupees forty thousand seven hundred ninety five only).</b></p>

                                                                    </div>
                                                                </div>
                                                         

                                                                



                                                                <div class="row mt-5">
                                                                    <div class="col">
                                                                        <p>21101/Civ/NIP/NK</p>

                                                                        <p>Station workshop EME</p>
                                                                        <p>Delhi cantt - 110010 </p>
                                                                        <p class="mt-3">Oct 2022</p>



                                                                        <p style="text-align:end;">(SS Sengar)<br>Col <br> Commanding Officer</p>

                                                                        <p>Area Accounts Office<br>
                                                                            Delhi Cantt-110010</p>
                                                                    </div>
                                                                </div>


                                                                


                                                            </div>
                                                        </div>

                                                    </div>










                                                </div>


                                            </div>
                                            {{-- Ends --}}
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane " id="pend_mdcl_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="approve-medical-claim">

                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId"
                                                            value="id" readonly>

                                                    </div>
                                                    <div class="col">
                                                        <label>Requested Claim Amount</label>
                                                        <input type="text" name="accHolder" id="empAccHolder"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Approved Amount</label>
                                                        <input type="text" name="bankName" id="empBankName"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Account No.</label>
                                                        <input type="text" name="accNo" id="empAccNo"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>IFSC</label>
                                                        <input type="text" name="isfc" id="empIsfc"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <button type="Submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card mt-1">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="font-weight-bold">Employee Bank Details</label>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col">
                                                    <table class="table table-bordered myTable " id="jsTable">
                                                        <thead>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Employee Name</th>
                                                            <th class="text-center">Patient Name</th>
                                                            <th class="text-center">Claimed Amount</th>
                                                            <th class="text-center">ISFC</th>
                                                            <th class="text-center">Action</th>
                                                            {{-- <th>Designation</th>
                                                                <th>Address</th> --}}
                                                            {{-- <th>Mobile No.</th> --}}
                                                        </thead>

                                                        <tbody class="text-center">
                                                            @php
                                                                $i = 1;
                                                            @endphp
                                                            @foreach ($requestData as $rd)
                                                                
                                                            @endforeach


                                                        </tbody>


                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane " id="rej_cea_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="emp-skill-data">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Skill</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Employee Id</label>
                                                        <input type="text" class="form-control" name="empId"
                                                            value="id" readonly>
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Primary Technology Vertical</label>
                                                        <input type="text" name="empPrmySkill" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Secondary Technology
                                                            Vertical</label>
                                                        <input type="text" name="empScndSkill" class="form-control">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <input type="submit" class="btn btn-success" value="Add Skill">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Primary Skill</th>
                                                    <th class="text-center">Secondary Skill</th>
                                                    <th class="text-center">Action</th>
                                                </thead>

                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp


                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="emp_job_history" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-job-details-form">

                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId"
                                                            value="id" readonly>

                                                    </div>

                                                    <div class="col">
                                                        <label>Unit No.</label>
                                                        <input type="text" name="accNo" id="empAccNo"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Nominee</label>
                                                        <input type="text" name="accNo" id="empAccNo"
                                                            class="form-control">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <button type="Submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Emp ID</th>
                                                    <th class="text-center">Emp Name</th>
                                                    <th class="text-center">Designation</th>
                                                    <th class="text-center">Unit No</th>
                                                    <th class="text-center">Unit name</th>
                                                    <th class="text-center">Unit Incharge</th>
                                                    <th class="text-center">Job Status</th>
                                                    <th class="text-center">Action</th>
                                                </thead>

                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp


                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="app_cea_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-pf-details-form">

                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId"
                                                            value="id" readonly>

                                                    </div>

                                                    <div class="col">
                                                        <label>Account No.</label>
                                                        <input type="text" name="accNo" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Nominee</label>
                                                        <select class="form-control" name="nominee">
                                                            <option value="0">Select</option>

                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <button type="Submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Account</th>
                                                    <th class="text-center">Nominee</th>

                                                    <th class="text-center">Action</th>
                                                </thead>

                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp


                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
