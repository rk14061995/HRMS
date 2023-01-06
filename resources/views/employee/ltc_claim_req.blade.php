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
                            LTC Claim
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
                                    <a class="nav-link active" data-toggle="tab" href="#apply_cea" role="tab">Fill and Print Documents</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#pend_cea_req" role="tab">CEA Pending
                                        Requests</a>
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
                                <div class="tab-pane active" id="apply_cea" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Start  --}}

                                            <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="col tex-right">
                                                        <a href="javascript:printDiv()" class="text-primary"><i
                                                                class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                    </div>
                                                </div>
                                                <div class="row" id="DivIdToPrint">
                                                    <div class="col">
                                                        <div class="row" >
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8  px-5" id="">

                                                                <div class="row mt-5">
                                                                    <div class="col-md-4">
                                                                        <h5>Telephone:
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->primary_mob  ? $user->empdetails->primary_mob : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                        </h5>
                                                                        <h5>
                                                                                <input type="text"  style="font-size:14px; width:150px" value="50601/CIV/LTC/RK">
                                                                             </h5>
                                                                        <h5>Area Accounts Office(Pay)</h5>
                                                                        <h5>Delhi Cantt-110010</h5>
                                                                    </div>
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-4">
                                                                        <h5><b><u>Unit Code:
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->unit_no  ? $user->empunitdetails->unit_no : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                        </u></b></h5>
                                                                        <h5>
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->unit_name  ? $user->empunitdetails->unit_name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                        </h5>
                                                                        <h5>Delhi Cantt-110010</h5>
                                                                        <h5>Sep2022</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col text-center">
                                                                        <h4><b><u>LTC CLAM(FINAL):T.NO.459 T/MATE
                                                                            
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                        
                                                                        </u></b></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row text-center">
                                                                    <div class="col">
                                                                        <h4><b><u>(PRAN NO 
                                                                            @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->emppfdetails->pf_acc_no  ? $user->emppfdetails->pf_acc_no : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif 
                                                                    )</u></b></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p><span>1.</span> claim for the block year 2018-21 for All India Journey
                                                                            with carry
                                                                            forwarded in the year 2022
                                                                            for Rs @if ($data)
                                                                                        @foreach ($data as $user)
                                                                                            <input type="text"  style="font-size:14px; width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                                        @endforeach 
                                                                                    @else
                                                                                        <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                    @endif  /- (<input type="text"  style="font-size:14px; width:150px" value=""> only) in respect
                                                                            of above
                                                                            mentioned indl is 2f
                                                                            submitted herewith alongwith following documents for your audit and
                                                                            early
                                                                            payment please :-
                                                                        </p>
                        
                        
                                                                        <p class="m-0"> <span>(a.)</span> Annexure A</p>
                                                                        <p class="m-0"><span>(b.)</span> CTC copy of Pt — II Order.</p>
                                                                        <p class="m-0"> <span>(c.)</span> 02 x E-ticket for Rs @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style="font-size:14px; width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                        @endif /- (Rupees
                                                                            four
                                                                            thousand one sixty only)</p>
                        
                                                                        <p class="mt-4"><span>2.</span>Cheque for the amount may please be issued
                                                                            in
                                                                            favour of SBI, Delhi Cantt for
                                                                            creditiing
                                                                            the same<br> in Public Fund Account No<span><u>
                                                                                @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->emppfdetails->pf_acc_no  ? $user->emppfdetails->pf_acc_no : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif </u>of this
                                                                                unit.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row my-1">
                                                                    <div class="col-md-4">
                                                                        <h5>Encls : As above.</h5>
                                                                    </div>
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-4">
                                                                        <h5>( <input type="text"  style="font-size:14px; width:150px" value="Tusher Joshi"> )</h5>
                                                                        <h5> <input type="text"  style="font-size:14px; width:150px" value="AEE"></h5>
                                                                        <h5> <input type="text"  style="font-size:14px; width:150px" value="Civ Est Office"></h5>
                                                                        <h5>for  <input type="text"  style="font-size:14px; width:150px" value="Commanding Officer"> </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-2 " id="">









                                                                <div class="row mt-5">
                                                                    <div class="col text-center">
                                                                        <h4><b><u>LTC CLAIM FOR THE BLOCK YEAR <input type="text"  style="font-size:14px; width:50px" value="2020-2021"></u></b></h4>
                                                                    </div>
                        
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h4><b><u>FOR ALL INDIA JOURNEY</u></b></h4>
                                                                    </div>
                                                                </div>
                        
                        
                        
                                                                <div class="row mt-2">
                                                                    <div class="col text-center">
                                                                        <h4><b><u>with carry forwarded in yrs <input type="text"  style="font-size:14px; width:60px" value="2022"></u></b></h4>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="row mt-5">
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label>
                                                                                    <h6>1.<U>PERSONAL DETAILS</U></h6>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Name:</div>
                                                                            <div class="col">@if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif </u>of this</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">T.No & Dsgn:</div>
                                                                            <div class="col">@if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->designation  ? $user->empunitdetails->designation : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif </u>of this</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Unit:</div>
                                                                            <div class="col">@if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empunitdetails->unit_no  ? $user->empunitdetails->unit_no : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Basic Pay:</div>
                                                                            <div class="col">@if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->empSalarydetails->basic_pay  ? $user->empSalarydetails->basic_pay : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif</div>
                                                                        </div>
                                                                    </div>
                        
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label>
                                                                                    <h6>2.<U>LEAVE DETAILS</U></h6>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Leave Period :</div>
                                                                            <div class="col"><input type="text"  style="font-size:14px; width:150px" value=""></div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Auth : Dopt II No:</div>
                                                                            <div class="col"><input type="text"  style="font-size:14px; width:150px" value=""></div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Declared Lve Station:</div>
                                                                            <div class="col"><input type="text"  style="font-size:14px; width:150px" value=""></div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="col">All Indian Journey:</div>
                        
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">Claimed preffered on:</div>
                                                                            <div class="col"><input type="text"  style="font-size:14px; width:150px" value=""></div>
                                                                        </div>
                        
                        
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label>
                                                                                    <h6>3.<U>Family Details for whom LTC Claimed</U></h6>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                        
                                                                                <table>
                                                                                    <thead>
                                                                                        <th>S.NO</th>
                                                                                        <th> Name</th>
                                                                                        <th>Relationship</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        
                                                                                        <tr>
                                                                                            <td>(a)</td>
                                                                                            <td>Raj Kumar</td>
                                                                                            <td>self</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>(b)</td>
                                                                                            <td>smt Binesh devi</td>
                                                                                            <td>wife</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                        
                                                                        </div>
                        
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col">
                                                                        {{-- ;;;; --}}
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <span>(f)<b><u>Journey Details</u></b></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col">
                                                                                <table class="table" style="font-size:12px">
                                                                                    <thead>
                                                                                        <th>Date</th>
                                                                                        <th>Time</th>
                                                                                        <th>Stn</th>
                                                                                        <th>Date</th>
                                                                                        <th>Time</th>
                                                                                        <th>Stn</th>
                                                                                        <th>Mode of Travel</th>
                                                                                        <th>Distance(km)</th>
                                                                                        <th>Fare per pers</th>
                                                                                        <th>Total No of pers</th>
                                                                                        <th>Total Amt Claimed</th>
                                                                                        <th>Ticket Nos</th>
                                                                                        <th>Reme</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>19/02/2022</td>
                        
                                                                                            <td>19:05</td>
                        
                                                                                            <td>New delhe</td>
                        
                                                                                            <td>17/02/2022</td>
                        
                                                                                            <td>1018</td>
                        
                                                                                            <td>sh mata vaisno devi Katra</td>
                        
                                                                                            <td>Train(3AC)</td>
                        
                                                                                            <td>655</td>
                        
                                                                                            <td>1040:00</td>
                        
                                                                                            <td>02</td>
                        
                                                                                            <td>2080:00</td>
                        
                                                                                            <td>ps222441156824</td>
                        
                                                                                            <td>e-Tkt</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>19/02/2022</td>
                        
                                                                                            <td>19:05</td>
                        
                                                                                            <td>New delhe</td>
                        
                                                                                            <td>17/02/2022</td>
                        
                                                                                            <td>1018</td>
                        
                                                                                            <td>sh mata vaisno devi Katra</td>
                        
                                                                                            <td>Train(3AC)</td>
                        
                                                                                            <td>655</td>
                        
                                                                                            <td>1040:00</td>
                        
                                                                                            <td>02</td>
                        
                                                                                            <td>2080:00</td>
                        
                                                                                            <td>ps222441156824</td>
                        
                                                                                            <td>e-Tkt</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>19/02/2022</td>
                        
                                                                                            <td>19:05</td>
                        
                                                                                            <td>New delhe</td>
                        
                                                                                            <td>17/02/2022</td>
                        
                                                                                            <td>1018</td>
                        
                                                                                            <td>sh mata vaisno devi Katra</td>
                        
                                                                                            <td>Train(3AC)</td>
                        
                                                                                            <td>655</td>
                        
                                                                                            <td>1040:00</td>
                        
                                                                                            <td>02</td>
                        
                                                                                            <td>2080:00</td>
                        
                                                                                            <td>ps222441156824</td>
                        
                                                                                            <td>e-Tkt</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                        
                        
                        
                                                                        {{-- ;;;;; --}}
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-5">
                                                                    <div class="col-md-8">
                                                                        <h6>Total amount claimed : Rs. @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style="font-size:14px; width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                        @endif</h6>
                                                                        <h6> (- Advance drawn : <input type="text"  style="font-size:14px; width:60px" value="Nil"></h6>
                                                                        <h6>Balance Recovery/Due : Rs. @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style="font-size:14px; width:150px" value="{{$user->claim_amount  ? $user->claim_amount : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                        @endif</h6>
                        
                        
                        
                                                                    </div>
                                                                    <div class="col">
                                                                        <h6>Name . @if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                        @endif</h6>
                                                                        <h6>T. No. <input type="text" style="font-size:14px;width:150px"> T/Mate</h6>
                        
                                                                    </div>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 px-5 " id="">

                                        
                                        
                                                                <div class="row mt-5">
                                                                    <div class="col text-center">
                                                                        <h2><b><u>RECEIVED PAYMENT</u></b></h2>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col">
                                                                        <u>
                                                                            <h6>Mode of payment</h6>
                                                                        </u>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col">
                                                                        <h6 style="border:1px solid black">Cheque may please be issued in favour of <input type="text"  style="font-size:14px; width:150px" value="SBI,RRRC, Delhi Cantt"> for crediting the same in
                                                                            Public Fund Account No<u> @if ($data)
                                                                                @foreach ($data as $user)
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="{{$user->emppfdetails->pf_acc_no  ? $user->emppfdetails->pf_acc_no : '' }}">
                                                                                @endforeach 
                                                                            @else
                                                                                <input type="text"  style="font-size:14px; width:150px" value="">
                                                                            @endif</u>of this<br> unit.</h6>
                                                                    </div>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 px-5" id="">

                                        
                                        
                                                                <div class="row mt-5">
                                                                    <div class="col text-center">
                                                                        <h2><b><u>DEPENDENT CERTIFICATE</u></b></h2>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row mt-5">
                                                                    <div class="col">
                                                                        <P>1.Certified that u/m family members are un-employed, and wholly dependent upon me.</P>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <th>S.No</th>
                                                                                <th>Name</th>
                                                                                <th>Relation</th>
                                                                                <th>Status</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                @php
                                                                                    $i=1;
                                                                                @endphp
                                                                                @if ($data)
                                                                                    @foreach ($data as $user)
                                                                                    <tr>
                                                                                        <td>({{$i}})</td>
                                                                                        <td>Smt Binesh Devi</td>
                                                                                        <td>Wife</td>
                                                                    
                                                                                        <td>54 yrs</td>
                                                                                    </tr>
                                                                                    @php
                                                                                        $i++;
                                                                                    @endphp
                                                                                    @endforeach 
                                                                                @else
                                                                                    <input type="text"  style="font-size:14px; width:150px" value="">
                                                                                @endif
                                                                                
                                                                            </tbody>
                                                                        
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col">
                                                                        <p class="mt-5">2. It is also certified that they are living with me at my duty station and their income from
                                                                            all sources is not more than <input type="text"  style="font-size:14px; width:60px" value="9000">/- pm.</p>
                        
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col text-left">
                                                                        <h6>Dated : <input type="text"  style="font-size:14px; width:50px" value="Sept 2022"></h6>
                                                                    </div>
                                                                    <div class="col text-right">
                                                                        <h6>(@if ($data)
                                                                            @foreach ($data as $user)
                                                                                <input type="text"  style="font-size:14px; width:150px" value="{{$user->empdetails->name  ? $user->empdetails->name : '' }}">
                                                                            @endforeach 
                                                                        @else
                                                                            <input type="text"  style="font-size:14px; width:150px" value="">
                                                                        @endif ) </h6>
                                                                                <h6>T.No <input type="text"  style="font-size:14px; width:150px" value="459"> T/Mate</h6>
                                                                    </div>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 px-2 " id="">

                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h6><b><u>COUNTERSIGNED</u></b></h6>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <p>(<input type="text"  style="font-size:14px; width:100px" value="Tushar Joshi">)<br> <input type="text"  style="font-size:14px; width:100px" value="AEE"><br>
                                                                            <input type="text"  style="font-size:14px; width:150px" value="Civ Est Officer"><br>
                                                                            for <input type="text"  style="font-size:14px; width:150px" value="Commanding Officer "></p>
                        
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h6><u>COUNTERSIGNED AS CONRRECT CLAIM </u></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col" style="font-size:13px">
                                                                        <p>Certified that :-</p>
                                                                        <p>I have not submitted any other claim for mysolf ly iilitlers in r/o for <input type="text"  style="font-size:14px; width:150px" value=" "></p>
                                                                        <p>I have already drawn TA for the LTC in respect of the journey performed by me/my wiIf/myself with children.
                                                                            The claim is in r/o the journey performed by my
                                                                            me/myself with children. This claim is in r/o the journey performed block.the wife/myself with children,none
                                                                            of whom Traveted with the part on the earlier occasion</p>
                                                                        <p>That my wife/husband is not employed in Govl service or that my husband/wife is employed in Govl service and
                                                                            the
                                                                            concessic has hot availed by him/her separately himself/herself or for any of the family members for the
                                                                            concerned block
                                                                            the concerned has not been availed by him/her separately for himself/herself
                                                                            or for buy of lhe lily members for the concerned blocK.</p>
                                                                        <p>The journey has been performed by me/my wife with chiIdrem to the Declared home town/any place of India i.e.
                                                                        </p>
                                                                        <p><input type="text"  style="font-size:14px; width:200px" value=" "></p>
                                                                        <p>That the family members in respect of whose journey the amount has been claimed were entirely dependent and
                                                                            actually residing with me at the time of the journey undertaken</p>
                                                                        <p>That the journey was actually performed to and from my certified home town/any place in India by the class of
                                                                            accommodation for which the LTC has been claimed
                                                                            Certified that the fare claimed in this bill are by the shortest routes.<br>
                                                                            Certified that the journey was performed by the Mail/Exp train/by Bus/by Air.<br>
                                                                            Certified that the students concession has been availed/has not been availed.
                                                                        </p>
                        
                                                                        <p>(Signature of the individual)</p>
                                                                        <p>T.No. <input type="text"  style="font-size:14px; width:150px" value=" 459 "></p>
                                                                        <p>Trade</p>
                        
                                                                        <p>(a). That the journey was performed actually to the Declared home town/any place in india of the Govl
                                                                            servant recorded in tha service boot viz</p>
                        
                                                                        <p>(b). That the tickets for the journey have been produced by the Govt servant and
                                                                            the numbers, date and amount has been noted where the Advance has been availed.</p>
                                                                        <p>(c). That the concession was not availed for more than one in current year or the calender year.</p>
                                                                        <p>(d). That the journey have been performed by<input type="text"  style="font-size:14px; width:150px" value=" ">during regular leave.</p>
                                                                        <p>(e). That <input type="text"  style="font-size:14px; width:150px" value=" ">as rendered continuous service for one year or more on
                                                                            the date of commencement of outward journey.</p>
                                                                        <p>(f). That the necessary entries as required under Rule heve been made in the service book
                                                                            of<input type="text"  style="font-size:14px; width:150px" value=" "> </p>
                                                                        <p>(g). That the c!aim has not been preferred and paid earlier.</p>
                        
                                                                        <p>on : <input type="text"  style="font-size:14px; width:150px" value="Delhi Cantt — 110010 "></p>
                        
                                                                        <p><input type="text"  style="font-size:14px; width:150px" value="Civ Est Officer ">
                                                                            for <input type="text"  style="font-size:14px; width:150px" value="Commanding Officer   "> </p>
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
