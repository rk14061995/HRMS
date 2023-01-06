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
                            Pension Forms
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
                                                            <div class="col-md-12 px-3">
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Tele:36584</p>
                                                                        <p class="mt-3">51802/Civ/GPF/SS</p>
                                                                        <h6 class="mt-3">Area Accounts Office</h6>
                                                                        <h6>Delhi Cantt-110010</h6>
                                                                    </div>

                                                                    <div class="col-md-6" style="text-align:center;">
                                                                        <b><u>UNIT CODE :3573</u></b>
                                                                        <P>Station Workshop EME</P>
                                                                        <P>Delhi Cantt-110010</P>

                                                                        <p class="mt-5"> Jun 2021</p>

                                                                    </div>
                                                                </div>


                                                                <div class="d-flex justify-content-center">
                                                                    <h5><u>FINAL WITHDRAWAL FROM GP FUND ACCOUNT NO 00596043</u></h5>
                                                                </div>

                                                                <div class="d-flex justify-content-center">
                                                                    <h5><u>IN RESPECT OF COOK SH SS GUSAIN</u></h5>
                                                                </div>

                                                                <P>1. This unit contingent bill No 51802/Civ/GPF/SS dt Jun 2012 for Rs.8.00.000/- (Rupees Eight <br> lakhs only)
                                                                    On
                                                                    account of final withdrawal from GP Fund Account No.00596043 in respect of above<br>named indl is forwarded
                                                                    herewith
                                                                    along with following supporting papers for your necessary action :-</P>

                                                                <h6 class="mx-5">(a). Application for final withdl from GP Fund duly sanctioned.</h6>

                                                                <h6 class="mx-5">(b). GP fund recovery schedule in duplicate.</h6>

                                                                <h6 class="mx-5">(c). Sanction order.</h6>

                                                                <h6 class="mx-5">(d).Statement of credit balance and amount of advance outstanding.</h6>

                                                                <h6 class="mx-5">(e). GP Fund statement of Account for the year 2020-2021 copies Photostat.</h6>

                                                                <h6 class="mx-5">(t). Form "B" in duplicate.</h6>

                                                                <h6 class="nx-5"> (g). A certificate regarding drawn of GPF withdl during the last five years.</h6>




                                                                <p> 2. Cheque for the amount may please be issued in favour of SBI, Delhi Cantt same in <b> <u>Public
                                                                            Fund Account No 10469772684</u></b> of this unit.</p>

                                                                <p>3. It is also intimated that GPF Statement (CCO-9) for the year 2019-20 in respect of Non lnd pers
                                                                    od this unit is received so far after frequently reminder.</p>


                                                                <h6>Encls: As above</h6>

                                                                <div style="text-align: end ;">
                                                                    <h6>(Tushar Joshi)</h6>
                                                                    <h6>AEE</h6>
                                                                    <h6>Civ Est Officer</h6>
                                                                    <h6>For Commanding Officer</h6>
                                                                </div>

                                                            </div>
                                                            
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                           
                                                           <div class="col-md-12 px-3">
                                                                
                                                                <h4 style="text-align: center;"><u>CONTINGENT BILL</u></h4>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p>contingent Bill No<b> 51802/CIV/GPF/SS</b></p>
                                                                    </div>

                                                                    <div class="col">
                                                                        <p>For Rs.8.00.000/- <b>dated: Jun 2021</b></p>
                                                                    </div>

                                                                </div>

                                                                <h6>1. Amount Claimed on account of final withdl from GP Fund Account No 00596043 in<br>
                                                                    Respect of P- 1008 Cook Sh SS Gusain of station Wksp EME Delhi Cantt- 110010.</h6>


                                                                <table>
                                                                    <tr>
                                                                        <th>S.No</th>
                                                                        <th>DETAILS</th>
                                                                        <th>AMOUNT</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>Amount claimed on account of final withdraw from GP<br>
                                                                            Fund Account No 0096043 in respect of above named<br>
                                                                            individual in connection with the addition and alteration of his<br>
                                                                            house i.e. Guniyal, Lansdowne.<br>

                                                                            <br>Cheque for the amount may please be issued in favour of<br>
                                                                            SBI Delhi Cantt for crediting in public Fund Account No<br>
                                                                            <b><u>1046977268-t</u></b> of this unit.<br>
                                                                            <p class="mt-5">DATA OF BIRTH <b class="mx-5">04 Jan 1966</b><br>
                                                                                DATA OF APPOINTMENT <b class="mx-5">05 Apr 1989</b><br>
                                                                                DATA OF RETIREMENT <b class="mx -5">31 Jan 2026</b></p>
                                                                        </td>
                                                                        <td>Rs.8.00.000/-</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>(Rupees eight lakhs only)</td>
                                                                        <td>Rs.8,00.000/-</td>
                                                                    </tr>
                                                                </table>

                                                                <div class="row mt-5">
                                                                    <div class="col-md-6">
                                                                        <p><b><u>PAYMENT RECEIVED</u></b></p>
                                                                        <h6>Trade: Cook</h6>
                                                                        <h6>Name : Sh SS Gusain</h6>
                                                                    </div>
                                                                    <div class="col-md-6" style="text-align: end;">
                                                                        <p><b><u>COUNTERSIGNED</u></b></p>
                                                                        <h6>AEE</h6>
                                                                        <h6>Civ Est Officer</h6>
                                                                        <h6>For Commanding Officer</h6>
                                                                    </div>
                                                                </div>

                                                           </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            
                                                            <div class="col-md-12  px-3">
                                                                
                                                                <h3 class="mt-5" style="text-align: center;"><u>PROFORMA FOR APPLICATION OF FANAL WITHDRAWAL FROM GP FUND</u>
                                                                </h3>

                                                                <h5 class="mx-5" style="text-align: center;">Ministry/Office: Station Workshop EME DELHI CANTT</h5>

                                                                <h4 class="MX-5" style="text-align: center;"><u>APPLICATION FOR WITHDRAWAL FROM GP FUND</u></h4>


                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <h6 class="mt-4"><span class="mx-5 ">1.</span> Name of the subscriber</h6>
                                                                        <h6 class="mt-4"><span class="mx-5 ">2. </span>GP Fund Account No</h6>
                                                                        <h6 class="mt-4"><span class="mx-5 ">3. </span>Designation</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">4.</span> Basic pay</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">5.</span>Date of beginning service</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">6.</span>Date of superannuation</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">7.</span>balance at credit of the subscriber on the date <span
                                                                                style="margin-left: 120px;">of Application as detailed below :-</span></h6>

                                                                        <h6 class="mt-4"><span class="mx-5"></span>(a). Closing balance as per statement for the Year 2020-2021
                                                                        </h6>
                                                                        <h6 class="mt-4"><span class="mx-5"></span>(b). Credit from 03/21 to 05/21 @ Rs.30.000/-</h6>
                                                                        <h6 class="mt-4"><span class="mx-5"></span>(c). Refunds made to the fund after the closing Balance from
                                                                            <span style="margin-left: 125px;">/19 to 09/019@ Rs._______/-pm.</span></h6>
                                                                        <h6 class="mt-4"><span class="mx-5"></span>(d). withdrawal during the period</h6>
                                                                        <h6 class="mt-4"><span class="mx-5"></span>(e). Net balance at the credit on the date of Application
                                                                        </h6>

                                                                        <h6 class="mt-4"><span class="mx-5">8.</span>Amount of withdrawal required</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">9.</span>Purpose for which the withdrawal is required</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">10.</span>Rule under which the request is covered</h6>
                                                                        <h6 class="mt-4"><span class="mx-5">11.</span>Whether withdrawal was taken for the same Purpose earlier
                                                                            <span style="margin-left: 120px;"> so, indicate amount and the year</span></h6>
                                                                        <h6 class="mt-4"><span class="mx-5">12.</span>Name of the Account Office maintaining the Provident <span
                                                                                style="margin-left: 120px;">Fund A/C</span></h6>


                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h6 class="mt-4"> <input type="text" id="textfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4">.</h6>
                                                                        <h6 class="mt-4">.</h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4">.</h6>
                                                                        <h6 class="mt-4">.</h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>
                                                                        <h6 class="mt-4"> <input type="text" id="setTextfield"></h6>

                                                                        <button type="button" id="btn" onclick="setValue()">Set Value</button>
                                                                    </div>













                                                                    <h3 style="text-align: center;">RECOMMENDED/NOT RECOMMENDED</h3>

                                                                    <h6 class="mt-5">Station Workshop EME<br>Delhi Cantt-110010</h6>
                                                                    <h6 style="text-align: end;">AEE<br>Civ Est Officer<br>For CO</h6>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                        
                                                            <div class="col-md-12 px-3">
                                                                
                                                                <h3 style="text-align: center;" class="mt-5">UNIT CODE NO : 3303</h3>
                                                                <h5 style="text-align: center;">GP FUND SCHEDULE</h5>
                                                                <h6>Unit/Fmn/Office <b>:Station Workshop EME , Delhi Cantt-110010</b></h6>
                                                                <h6>Deduction made through pay bill for the month <b>: May 2021</b></h6>
                                                                <h6>CDA <b>: Westem Command. Section _____________ Class of Vr _____________ Vr No</b></h6>


                                                                <table class="mt-5">
                                                                    <tr>
                                                                        <th style="width: 150px; height: 150px;">Name </th>
                                                                        <th style="width: 150px; height: 150px;">Rete of pay <br>drawn<br>in the month<br>2018<br>(Basic pay)
                                                                        </th>
                                                                        <th style="width: 150px; height: 150px;">GPF<br>A/C No</th>
                                                                        <th style="width: 150px; height: 150px;">Subscri- Ption</th>
                                                                        <th style="width: 150px; height: 150px;">Refund of <br>Drawal<br>including<br>intcrest</th>
                                                                        <th style="width: 150px; height: 150px;">Amount <br>withdrawal<br>(to be filled by <br>Aeets Officer)
                                                                        </th>
                                                                        <th style="width: 150px; height: 150px;">Remarks</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 150px; height: 150px;"> Cook<br>Sh SS Gusain</td>
                                                                        <td style="width: 150px; height: 150px;"> BP= Rs.45400/-<br>Level=5</td>
                                                                        <td style="width: 150px; height: 150px;"> 005824</td>
                                                                        <td style="width: 150px; height: 150px;">30524/-</td>
                                                                        <td style="width: 150px; height: 150px;">Nil</td>
                                                                        <td style="width: 150px; height: 150px;">Rs.8,00,000/-</td>
                                                                        <td style="width: 150px; height: 150px;"> Not to be <br>recovered<br>being final<br>withdl.</td>
                                                                    </tr>
                                                                </table>



                                                                <h6>Station Workshop EME<br>Delhi Cantt-110010</h6>

                                                                <h6 style="text-align: end;"> AEE<br>Civ Est <br>Officer<br>For CO</h6>

                                                                <h6 style="text-align: end;">AO________________<br>Section_________________<br>Command_________________</h6>

                                                                <h3 style="text-align: center;">UNIT CODE NO : 3303</h3>
                                                                <h5 style="text-align: center;">GP FUND SCHEDULE</h5>
                                                                <h6>Unit/Fmn/Office <b>:Station Workshop EME , Delhi Cantt-110010</b></h6>
                                                                <h6>Deduction made through pay bill for the month <b>: May 2021</b></h6>
                                                                <h6>CDA <b>: Westem Command. Section _____________ Class of Vr _____________ Vr No</b></h6>


                                                                <table class="mt-5">
                                                                    <tr>
                                                                        <th style="width: 150px; height: 150px;">Name </th>
                                                                        <th style="width: 150px; height: 150px;">Rete of pay <br>drawn<br>in the month<br>2018<br>(Basic pay)
                                                                        </th>
                                                                        <th style="width: 150px; height: 150px;">GPF<br>A/C No</th>
                                                                        <th style="width: 150px; height: 150px;">Subscri- Ption</th>
                                                                        <th style="width: 150px; height: 150px;">Refund of <br>Drawal<br>including<br>intcrest</th>
                                                                        <th style="width: 150px; height: 150px;">Amount <br>withdrawal<br>(to be filled by <br>Aeets Officer)
                                                                        </th>
                                                                        <th style="width: 150px; height: 150px;">Remarks</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 150px; height: 150px;"> Cook<br>Sh SS Gusain</td>
                                                                        <td style="width: 150px; height: 150px;"> BP= Rs.45400/-<br>Level=5</td>
                                                                        <td style="width: 150px; height: 150px;"> 005824</td>
                                                                        <td style="width: 150px; height: 150px;">30524/-</td>
                                                                        <td style="width: 150px; height: 150px;">Nil</td>
                                                                        <td style="width: 150px; height: 150px;">Rs.8,00,000/-</td>
                                                                        <td style="width: 150px; height: 150px;"> Not to be <br>recovered<br>being final<br>withdl.</td>
                                                                    </tr>
                                                                </table>



                                                                <h6>Station Workshop EME<br>Delhi Cantt-110010</h6>

                                                                <h6 style="text-align: end;"> AEE<br>Civ Est <br>Officer<br>For CO</h6>

                                                                <h6 style="text-align: end;">AO________________<br>Section_________________<br>Command_________________</h6>

                                                            </div>
                                                           
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">

                                                                <h3 style="text-align: center;" class="mt-5"><u>PROFORMA FOR SANCTION OF WITHDRAWAL FROM PROVIDENT FUND</u></h3>

                                                                <h6>Tele:36584</h6>
                                                                <h6>51802/CIV/GPF/SS</h6>
                                                                <h6>JCDA(Funds)</h6>
                                                                <h6>Meerut (UP)</h6>


                                                                <h5 style="text-align:end;">Station Workshop EME<br>Delhi Cantt-110010</h5>
                                                                <h5 style="text-align:end;">Jun 2021</h5>

                                                                <h3 class="mt-5" style="text-align: center;"><u>FINAL WITHDRAWAL FROM GP FUND IN R/O P-1008 COOK SH SS GUSAIN OF
                                                                    </u></h3>
                                                                <h3 style="text-align: center;"><u>STATION WKSP EME DELHI Cantt-10</u></h3>

                                                                <strong class="mt-5">Sir.</strong>

                                                                <p><span class="mx-5">1.</span>I am directed to convey sanction of the competent Authority under Ruic 1
                                                                    <b>15(1)(B)(d) & 16(1)</b> fo the
                                                                    GP fund Rules 1960 to the withdrawal by
                                                                    <b> Shri SS Gusain </b>for the sum of Rs. 8,00,000/- (Rupees eight lakhs only) from his GP Fund Account No.
                                                                    00596043 to enable him to meet
                                                                    expenditure in connection with the addition and alteration of his house i.e Guniyal, Lansdowne.
                                                                </p>



                                                                <p><span class="mx-5">2.</span> The Amount of Withdrawal does not exceed 90% the of the amount at the credit/
                                                                    subscription of Shri SS Gussain in the GP Fund
                                                                    Account. His Basic pay is Rs. 45400/-.</p>
                                                                <p><span class="mx-5">3.</span>It is certified that Shri SS Gusain is due for retirement within lO years.</p>
                                                                <p><span class="mx-5">4.</span>The balance at the credit of Shri SS Gusain as on Jun 2021 is detailed below:-
                                                                </p>


                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h6 class="mt-5">(a).Closing balance the Account slip for the year 2020-2021.</h6>
                                                                        <h6 class="mt-5">(b).subscription to the Fund for the period from 03/21 to 05/21 @ Rs.30.000/-pm</h6>
                                                                        <h6 class="mt-5">(c).Total Col (a) to (b)</h6>
                                                                        <h6 class="mt-5">(d).Subsequent withdrawal, if any.</h6>
                                                                        <h6 class="mt-5">(e). Balance as on dated of sanction Col (c)-(d)</h6>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5">:Rs.31,61,529/-</h6>
                                                                    </div>


                                                                </div>

                                                                <h6 style="text-align: end;">(Sunil Singh Sengar)<br>Colonel<br>Commanding Officer</h6>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                


                                                                    <h3 style="text-align: center;" class="mt-5"><u>STATEMENT OF CREDIT BALANCE AND AMOUNT OF ADVANCE
                                                                        OUTSTANDING</u></h3>

                                                                <div class="row mt-5">
                                                                    <div class="col-md-6">
                                                                        <h5><span class="mx-5">1.</span> Name of subscriber</h5>
                                                                        <h5><span class="mx-5">2.</span> GP Fund Account No.</h5>
                                                                        <h5><span class="mx-5">3.</span> Amount at credit of the subscriber</h5>
                                                                        <h6><span class="mx-5">(a).</span>Balance as per GP Fund Account for the year 2020-2021</h6>
                                                                        <h5><span class="mx-5">(b).</span>Contribution during the period from 03/21 to 05/21 @Rs. 9000/-pm.</h5>
                                                                        <h5><span class="mx-5">(c).</span> Refund of withdrawal of during the period from 03/19 to 09/19.</h5>
                                                                        <h5><span class="mx-5">(d).</span> Withdrawal,if any, during the period from 03/19 to 09/19.</h5>
                                                                        <h5><span class="mx-5">(e).</span> Net present credit balance</h5>
                                                                        <h5><span class="mx-5">4.</span> Details of previous amount, if any taken from the fund:-</h5>
                                                                    </div>

                                                                    <div class="col-md-6">

                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5"><input type="text"></h6>
                                                                        <h6 class="mt-5"><input type="text" name="" id=""></h6>

                                                                    </div>
                                                                </div>


                                                                <div class="col-md-8">
                                                                    <p><span>4.</span>Details of previous amount, if any taken from the fund:-</p>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <h6>Amount advance drawn</h6>
                                                                            <p>1 st.loan Rs.-----/-</p>
                                                                            <p>2 nd. loan Rs.------/-</p>
                                                                        </div>


                                                                        <div class="col-md-2">
                                                                            <h6>Amt recovered.</h6>
                                                                            <p>------/-</p>
                                                                            <p>------/-</p>
                                                                        </div>



                                                                        <div class="col-md-2">
                                                                            <h6>Amt Outstanding.</h6>
                                                                            <p>------/-</p>
                                                                            <p>-----/-</p>
                                                                        </div>


                                                                        <h6>certified that the above details are correct and the individual has not received any advance of
                                                                            after...--------</h6>

                                                                    </div>
                                                                </div>

                                                                <h6>5. Details of final withdrawal taken previously:-</h6>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>(a). Amt withdrawn</p>
                                                                        <p>(b).Purpose</p>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <p><input type="text"></p>
                                                                        <p class="mt-2"><input type="text"></p>
                                                                    </div>
                                                                </div>


                                                                <h6>6.Details of advance taken previously:-</h6>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>(a).Amt withdrawn</p>
                                                                        <p>(b).Purpose</p>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <p><input type="text"></p>
                                                                        <p><input type="text"></p>
                                                                    </div>

                                                                </div>

                                                                <h6 style="text-align: end;">AEE<br>Civ Est Officer<br>For CO</h6>

                                                            </div>
                                                            
                                                        </div>

                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                


                                                                <h3 style="text-align: center;"><u>UNIT CODE : 3303</u></h3>

                                                                <h6>Unit: <u>SIN WKSP EME, DELHI CANTT-110010</u></h6>

                                                                <table>
                                                                    <tr>
                                                                        <th style="width: 106px;
                                                                height: 106px;">S.No</th>
                                                                        <th style="width: 106px;
                                                                height: 106px;">TRADE & NAME</th>
                                                                        <th style="width: 106px;
                                                                height: 106px;">GP FUND<br>A/C NO</th>
                                                                        <th style="width: 106px;
                                                                height: 106px;">CDA <br> FUNDS</th>
                                                                        <th style="width: 106px;
                                                                height: 106px;">AMOUNT OF <br>WITHDL</th>
                                                                        <th style="width: 106px;
                                                                height: 106px;">REMARKS</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 106px;
                                                                height: 106px;">1.</td>
                                                                        <td style="width: 106px;
                                                                height: 106px;">Cook <br> Sh SS Gusain</td>
                                                                        <td style="width: 106px;
                                                                height: 106px;">00596043</td>
                                                                        <td style="width: 106px;
                                                                height: 106px;">Meerut</td>
                                                                        <td style="width: 106px;
                                                                height: 106px;">Rs.8,00.000/-</td>
                                                                        <td style="width: 106px;
                                                                height: 106px;">Not to be <br>received <br> being final <br>withdl.</td>
                                                                    </tr>
                                                                </table>

                                                                <h6 class="mt-5">Station Workshop EME <br> Delhi Cantt-110010</h6>
                                                                <h6 style="text-align: end;"> AEE<br>Civ Est Officer <br>For CO</h6>

                                                            </div>
                                                            
                                                        </div>

                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">

                                                                <h4 style="text-align: center;"><u> CERTIFICATE</u></h4>


                                                                <p><span class="mx-5">1.</span> Certified that I have not drawn any kind of temp advance/final withdrawal from
                                                                    my GP Fund account No <b>00596043</b> during the last five years.</p>
                                                                <h4 style="text-align: center     ;">OR</h4>
                                                                <p>Certified that I have drawn the following final withdrawals from my GP Fund Account No <b>00596034</b> during
                                                                    the last five years.</p>
                                                                <p>(a). Rs.2.50.000/- during 2011.</p>
                                                                <p>(b). Nil during 2012 to 2020</p>


                                                                <p>2. It is also certified at above mentioned withdrawals have alrealy been adjusted in my GP Fund Account.</p>

                                                                <h6 style="text-align: end;"> (Sign of the indl)<br>SS Gusain<br>Cook P-1008</h6>

                                                            </div>
                                                            
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            
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
