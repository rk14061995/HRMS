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
                            CHILDREN EDUCTION ALLOWANCE
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#children_reimburse" role="tab">Children Reimbursement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#self_declaration" role="tab"> Self Declaration
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#cea_remburse" role="tab">CEA Reimbursement
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#certificate_child" role="tab">Child Certificate
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supplementary_bill" role="tab">Supplementary Bill
                                        </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#supplementary_bill" role="tab">
                                        </a>
                                </li> -->


                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="children_reimburse" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('child_reimburse')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                                <div class="row" id="child_reimburse">
                                                    <div class="col">
                                                        <div class="row" >
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8  px-2 " id="">

                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h6>GPF/PRAN NO 
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->emppfdetails->pf_acc_no  ? $user->emppfdetails->pf_acc_no : '' }}">
                                                                                @endforeach
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif
                                                                            
                                                                             
                                                                            DOB
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->dob ? $user->empdetails->dob : ''}}">
                                                                                @endforeach
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif
                                                                            
                                                                            DOA
                                                                            
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                           
                                                                            
                                                                            DOR
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->do_retirement  ? $user->empdetails->do_retirement : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif
                                                                            
                                                                            
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h6>Bank Account No 
                                                                            @if ($data)
                                                                            @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empbnkdetails->bank_name  ? $user->empbnkdetails->bank_name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                            IFSC
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empbnkdetails->bank_isfc  ? $user->empbnkdetails->bank_isfc : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif
                                                                            Branch 
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empbnkdetails->branch  ? $user->empbnkdetails->branch : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h5 class="" style="text-align: center;">PROFORM FOR
                                                                            RE-IMBUSRSEMENT OF CHILDREN EDUCTION</h5>
                                                                        <h5 style="text-align: center;">ALLOWANCE/HOSTEL SUBSIDT IN
                                                                            TERMS OF RBE NO 147/2017, CEA</h5>
                                                                        <h5 style="text-align: center;">THE ACADEMIC
                                                                            YEAR<input type="text" >
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <table border="1" class="w-100">

                                                                            <tr>
                                                                                <td>1.</td>
                                                                                <td>Name of the Employee</td>
                                                                                <td colspan="3">
                                                                                    @if ($data)
                                                                                        @foreach ($data as $user)
                                                                                            <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                                        @endforeach 
                                                                                    @else
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    @endif
                                                                                    
                                                                                </td>
                                                                            </tr>




                                                                            <tr>
                                                                                <th>2.</th>
                                                                                <td>Personal No/ T.No </td>
                                                                                <td colspan="3">
                                                                                    @if ($data)
                                                                                        @foreach ($data as $user)
                                                                                            <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->primary_mob  ? $user->empdetails->primary_mob : '' }}">
                                                                                        @endforeach 
                                                                                    @else
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    @endif
                                                                                    
                                                                                </td>

                                                                            </tr>



                                                                            <tr>
                                                                                <td>3.</td>
                                                                                <td>Designation / Trade</td>
                                                                                <td colspan="3">
                                                                                    @if ($data)
                                                                                        @foreach ($data as $user)
                                                                                            <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->designation  ? $user->empunitdetails->designation : '' }}">
                                                                                        @endforeach 
                                                                                    @else
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    @endif
                                                                                    
                                                                                </td>

                                                                            </tr>



                                                                            <tr>
                                                                                <td>4.</td>
                                                                                <td>Name of the Unit</td>
                                                                                <td colspan="3">
                                                                                    @if ($data)
                                                                                        @foreach ($data as $user)
                                                                                            <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->unit_name  ? $user->empunitdetails->unit_name : '' }}">
                                                                                        @endforeach 
                                                                                    @else
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    @endif
                                                                                    
                                                                                </td>

                                                                            </tr>



                                                                            <tr>
                                                                                <td>5.</td>
                                                                                <td>If, Spouse is emplored,<br>state whether in
                                                                                    Central<br>Govt,PSU State Govt<br>(Given details
                                                                                    with
                                                                                    name of the Spouse)</td>
                                                                                <td colspan="3">
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                </td>

                                                                            </tr>




                                                                            <tr>
                                                                                <td>6.</td>
                                                                                <td>Designation, Office & B.U.<br> No of Spouse, if
                                                                                    spouse is <br> emplored in Govt Deptt</td>
                                                                                <td colspan="3">
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                </td>

                                                                            </tr>




                                                                            <tr>
                                                                                <td>7.</td>
                                                                                <td colspan="4"> Details of the child/Children
                                                                                    for whom CEA/Hostel Subsidy claimed for A.Y.:
                                                                                </td>
                                                                            </tr>

                                                                            <tr colspan="3">
                                                                                <td>Sequence</td>
                                                                                <td>Name of the Child</td>
                                                                                <td>DOB</td>
                                                                                <td>Standard</td>
                                                                                <td>Name & Place of the School/Institution
                                                                            </tr>
                                                                            @php
                                                                                $i=1;
                                                                            @endphp
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <tr>
                                                                                        <td>{{$i}} <sup>th </sup>Child</td>
                                                                                        <td>{{$user->dep_name ? $user->dep_name : ''  }}</td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    
                                                                                @php
                                                                                    $i++;
                                                                                @endphp
                                                                                @endforeach
                                                                                @if ($i<3)
                                                                                <tr>
                                                                                    <td>{{$i}} <sup>th </sup>Child</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                @endif
                                                                            @else
                                                                                <tr>
                                                                                    <td>1 <sup>th </sup>Child</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>2 <sup>th</sup> Child</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            @endif
                                                                            
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 class="mt-1">8. RE-IMBUSRSEMENT of Expenditure:-</h6>
                                                                        <table class="mt-1 w-100">
                                                                            <thead>
                                                                                <th>S.No</th>
                                                                                <th>Period</th>
                                                                                <th>Rate of CEA<br>(Rs.)</th>
                                                                                <th>Amount Claimed</th>
                                                                                <th>Remarks</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>1 <sup>th</sup> Child</td>
                                                                                    <td>Apr__________to Mar_________</td>
                                                                                    <td>@2250/-PM</td>
                                                                                    <td></td>
                                                                                    <td>Fixed Amount</td>

                                                                                </tr>

                                                                                <tr>
                                                                                    <td>2 <sup>nd</sup> Child</td>
                                                                                    <td>Apr_________to Mar_________</td>
                                                                                    <td>@2250/-PM</td>
                                                                                    <td></td>
                                                                                    <td>Fixed Amount</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="5"> Total Rs.</td>
                                                                                </tr>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">

                                                                        <h6>(Total amount claimed for
                                                                            Rupees 
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->amount_claimed  ? $user->amount_claimed : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                         Only)</h6>

                                                                        <p>9. Distance of Hostel of child from residence of
                                                                            employees(in case Hostel Subsidy):</p>
                                                                        <p>10. Amount of CEA / Hostel Subtel Already received up to
                                                                            previous quarter:_________</p>
                                                                        <p>11. The Academic year for which CEA/Hostel Subsidy is
                                                                            applied now_______________.</p>
                                                                        <p>12. (a).whether the Child for whom the CEA is applied for
                                                                            is a disabled Child yes/No</p>
                                                                        <p>(b). If yes, indicate the nature of disability.
                                                                            ________________</p>
                                                                        <p>(c). Date of disability certificate</p>
                                                                        <p>(d). indicate the percentage of disability
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">_</p>

                                                                        <p>13. whether Bonafide certificate from head of Institution
                                                                            has been attached Yes/No.</p>
                                                                        <p>14. ForHostel Subsidy Bonafide certificate from
                                                                            mentioning the amount is attd yes/No</p>
                                                                        <p>15. If yes at Item No 14, Amount Claimed for Hostel
                                                                            Subsidy ________________</p>

                                                                        <h6><u> 16 . Certified that:-</u></h6>

                                                                        <p>(a).My spouse is a central/state Govt servant. (Yes/No)
                                                                            (Sig of IndI)
                                                                        <div class="form-control"> <input type="text" require />
                                                                            </p>
                                                                        </div>
                                                                        <p>(b).My spouse is a central/state Govt servant and she/he
                                                                            has not claimed/will not<br> claim Children's
                                                                            Education Allowance in respedct of our child/chilfren.
                                                                        </p>
                                                                        <p>(c). Certified that I or my wife/Husband has not claimed
                                                                            his re-imbursement from any <br>other source and
                                                                            will not claim the same in future.</p>
                                                                        <p>17. My child in respedct of whom re-imbursement of
                                                                            Children Education Allowance is <br>
                                                                            applied is studying in the school/Jr. College which is
                                                                            recognized and affiliated to Board of
                                                                            Education/university.The details are given below:-</p>

                                                                        <p>18. I am claiming the CEA in respect my one/two eldest
                                                                            surviving child/children only,<br>
                                                                            the information furnished above are complete and correct
                                                                            and I have not suppressed any <br>
                                                                            relevant information. In the event of any change in the
                                                                            particulars given above which<br>
                                                                            affect my eligibility for re-imbursement of Children
                                                                            Education Allowance, I undertake<br>
                                                                            intimate the same promptly and also to refund excess
                                                                            payments if any mafe.Further,<br>
                                                                            I am aware that if at any stage the
                                                                            information/documents furnished above are found to <br>
                                                                            be false. I am liable for disciplinary action.</p>
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
                                <div class="tab-pane " id="self_declaration" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('self_dec')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                                <div class="row" id="self_dec">
                                                    <div class="col">
                                                    <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8  px-2 " id="">

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h3 class="mt-5" style="text-align: center;"><u>SELF
                                                                                DECLARATION</u></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label>T/P. No</label>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->primary_mob  ? $user->empdetails->primary_mob : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                        
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label>Trade/Rank</label>
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label>Name</label>
                                                                            </div>
                                                                            <div class="col">
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label>Unit</label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->unit_name ? $user->empunitdetails->unit_name : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                                , Delhi Cantt 
                                                                                
                                                                                and
                                                                                hereby Certified that
                                                                                my Child/Children
                                                                                (son/daughter)
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->dep_name  ? $user->dep_name : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col p-2">
                                                                                <h6>Detailed as below:-</h6>
        
                                                                                <p>(a).Namely 
                                                                                    @if ($data)
                                                                                        @foreach ($data as $user)
                                                                                            <input type="text"  style="font-size:14px; width:150px" value="{{$user->dep_name  ? $user->dep_name : '' }}">
                                                                                        @endforeach 
                                                                                    @else
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    @endif
                                                                                 was studied
                                                                                    in class
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">Sec
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    
                                                                                    Roll No <input type="text"  style="font-size:14px; width:150px" value="">during the
                                                                                    previous
                                                                                    Academic Year: Apr<input type="text"  style="font-size:14px; width:150px" value=""> to
                                                                                    Mar<input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    in(name of school)<input type="text"  style="font-size:14px; width:150px" value="">
                                                                                </p>
        
                                                                                <p>In the event of any change in the particulars
                                                                                    given above
                                                                                    which affect my <br>
                                                                                    eligibility for Children Education Allowance, I
                                                                                    undertake to intimate the same promptly<br>
                                                                                    and refund excess payment, If any made to me.
                                                                                </p>
                                                                            </div>
                                                                        </div>
        
        
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col text-left py-5">
                                                                        <p>Date:</p>
                                                                        <p>Place: Delhi Cantt-10</p>
        
                                                                        <p>Encls:( )</p>
                                                                    </div>
                                                                    <div class="col text-right">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                <p>(Signature of Govt servant)</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Name:
                                                                            </div>
                                                                            <div class="col">
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name ? $user->empdetails->name : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                T/P.No:
                                                                            </div>
                                                                            <div class="col">
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->primary_mob ? $user->empdetails->primary_mob : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Trade/Rank:
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Section:
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Mob No:
                                                                            </div>
                                                                            <div class="col">
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->primary_mob ? $user->empdetails->primary_mob : '' }}">
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
        
        
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
                                <div class="tab-pane " id="cea_remburse" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('reimburse_cea')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                                <div class="row" id="self_dec">
                                                    <div class="col">
                                                    
                                                    <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8  px-2 " id="">

                                                        
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 style="text-align: center;">Authority vide Government of india</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 style="text-align: center;">Ministry of Personnel, PG and Pension Department of Personnel & Training, New
                                                                            Delhi</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 style="text-align: center;">Order No NA 27012/02/2017-Estt(AL) 16 August,2017 </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 style="text-align: center;">(This order shall be effective from 1<sup>st</sup> July,2017)</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h3 style="text-align: center ;"><u>CERTIFICATE FROM THE HEAD OF INSTITUTION/SCHOOL </u></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h3 style="text-align: center;">(FOR REIMBUSRSEMENT OF CEA)</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <P>Ref No </P>
                                                                        <p>Date: </p>
        
        
                                                                        <p>It is Certified that master/kumari 
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->dep_name  ? $user->dep_name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                            having admission No <input type="text"  style="font-size:14px; width:150px" value=""> Son/Daughter of Mr/Mrs 
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                            was studying in class <input type="text"  style="font-size:14px; width:150px" value=""> Sec 
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            Roll No <input type="text"  style="font-size:14px; width:150px" value=""> during the previous academic year from <input type="text"  style="font-size:14px; width:150px" value=""> 
                                                                            to <input type="text"  style="font-size:14px; width:150px" value="">  School/Institution namely <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            Vide affiliation Regd No/code <input type="text"  style="font-size:14px; width:150px" value=""> and Pattern <input type="text"  style="font-size:14px; width:150px" value=""> Curriculum.
                                                                        </p>
        
        
        
        
                                                                        <p class="mt-5">Place:</p>
                                                                        <p>Date:</p>
        
                                                                        <p style="text-align: end;">Signature of Principal</p>
                                                                        <p style="text-align: end;">(Affix School Stamp)</p>
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
                                <div class="tab-pane " id="certificate_child" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('child_certificate')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                                <div class="row" id="child_certificate">
                                                    <div class="col">
                                                    <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8  px-2 " id="">
                                                                <div class="row">
                                                                  <div class="col">
                                                                      <h4 style="text-align: center;"><u>CERTIFICATE</u></h4>
                                                                  </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col">
                                                                      <p class="mt-5"><span class="mx-5">1.</span> Certified that the details of my children are as under:-</p>
                                                                  </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col">
                                                                      <table class="mt-5 w-100" border="1">
                                                                          <tr>
                                                                              <th>S NO.</th>
                                                                              <th>NAME</th>
                                                                              <th>DATE OF BIRTH
                                                                              <th>RELATIONSHIP</th>
              
                                                                              </th>
                                                                          </tr>
                                                                          @php
                                                                              $i=1;
                                                                          @endphp
                                                                          @if ($data)
                                                                            @foreach ($data as $user)
                                                                            <tr>
                                                                                <td>{{$i}}</td>
                                                                                <td>{{$user->dep_name}}</td>
                                                                                <td>15 Jun 2015</td>
                                                                                <td>Daughter</td>
                                                                            </tr>
                                                                            @php
                                                                                $i++;
                                                                            @endphp
                                                                            @endforeach 
                                                                        @else
                                                                          
                                                                        @endif 
                                                                          
              
              
                                                                          
              
              
              
                                                                      </table>
                                                                  </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col">
                                                                      <p class="mt-5"><span class="mx-5 ">2.</span>It is further Certified that I am claiming the CEA of my eldest
                                                                          child below the age of 20<br>yrs(with date of birth)</p>
              
                                                                      <p>Dated: Jun 2022</p>
              
                                                                      <h6 style="text-align:end;">(Signature of the Indl)<br>Sh Aman<br>T No 1021</h6>
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
                                <div class="tab-pane " id="supplementary_bill" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printPdf('supp_bill')" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                                <div class="row" id="supp_bill">
                                                    <div class="col">
                                                    <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8  px-2" id="">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h4 style="text-align: center;"><u>COUNTERSIGNED</u></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p class="mt-5">It is certify that the date of birth has been verified from service book.</p>
        
        
        
        
        
                                                                        <h3 style="text-align: center;" class="mt-5"><u>STATION WORKSHOP EME, DELHI CANTT-110010</u></h3>
        
                                                                        <h4 style="text-align: end;">UNITCODE:3573</h4>
                                                                        <h3><u>SUPPLEMENTARY PAY BILL ON ACCOUNT OF CEA FOR THE PERIOD APR 2021 TO MAR 2022</u></h3>
        
        
                                                                        <P style="text-align:END;"> DATED : Jun 2022</P>
        
                                                                        <p>SY PAY BILL NO 50601/CIV/NIP/FV</p>
        
        
        
                                                                        <table class="w-100" border="1">
                                                                            <thead>
                                                                                <th>S. No </th>
                                                                                <th>Name & <br> Designation of <br> the Employee</th>
                                                                                <th>Name of the child and <br>DOB</th>
                                                                                <th>Class in was <br>studying</th>
                                                                                <th>Ceiling of CEA <br> per annum</th>
                                                                                <th>Total CEA <br> claimed per child</th>
                                                                                <th>Total CEA <br> Claimed</th>
                                                                                <th>Sig</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>1.</td>
                                                                                    <td>T No 1021 <br> Aman Barber</td>
                                                                                    <td>Paridhi <br> 29/07/2015</td>
                                                                                    <td>1 <sup>st</sup></td>
                                                                                    <td>27,000/-</td>
                                                                                    <td>27,000/-</td>
                                                                                    <td>27,000/-</td>
                                                                                </tr>
            
            
            
                                                                                <tr>
                                                                                    <td>2.</td>
                                                                                    <td>T No 1021 <br> Aman Barber</td>
                                                                                    <td>Paridhi <br> 29/07/2015</td>
                                                                                    <td>Nur (LKG)</td>
                                                                                    <td>27,000/-</td>
                                                                                    <td>27,000/-</td>
                                                                                    <td>27,000/-</td>
                                                                                </tr>
            
                                                                                <tr>
                                                                                    <td colspan="6"> Total- Rupees Fifty Four Thousand Only</td>
                                                                                    <td>54000/-</td>
                                                                                    <td></td>
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
                                            {{-- Ends --}}
                                        </div>
                                    </div>


                                </div>
                                
                                <div class="tab-pane " id="pend_cea_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-bank-details-form">

                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId"
                                                            value="id" readonly>

                                                    </div>
                                                    <div class="col">
                                                        <label>Acc Holder Name</label>
                                                        <input type="text" name="accHolder" id="empAccHolder"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Bank Name</label>
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
                                                            <th class="text-center">Bank Name</th>
                                                            <th class="text-center">Account Holder</th>
                                                            <th class="text-center">Account No.</th>
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
