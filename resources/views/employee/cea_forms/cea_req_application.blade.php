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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#apply_cea" role="tab">Apply For
                                        CEA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pend_cea_req" role="tab">CEA Pending
                                        Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#app_cea_req" role="tab">CEA Approved
                                        Requests</a>
                                </li>
                                <li class="nav-item">
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
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8  px-2 d-none" id="DivIdToPrint">

                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <h6>GPF/PRAN NO .................. DOB...................
                                                                    DOA................... DOR.................. </h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <h6>Bank Account No........................ IFSC
                                                                    Code..................... Br Name...................
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
                                                                    YEAR.......................................</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <table border="1" class="w-100">

                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>Name of the Employee</td>
                                                                        <td colspan="3">_______________________</td>
                                                                    </tr>




                                                                    <tr>
                                                                        <th>2.</th>
                                                                        <td>Personal No/ T.No </td>
                                                                        <td colspan="3">_______________________</td>

                                                                    </tr>



                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>Designation / Trade</td>
                                                                        <td colspan="3">_______________________</td>

                                                                    </tr>



                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>Name if the Unit</td>
                                                                        <td colspan="3"><b>Station Wksp EME, Delhi
                                                                                Cantt-10</b></td>

                                                                    </tr>



                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>If, Spouse is emplored,<br>state whether in
                                                                            Central<br>Govt,PSU State Govt<br>(Given details
                                                                            with
                                                                            name of the Spouse)</td>
                                                                        <td colspan="3"></td>

                                                                    </tr>




                                                                    <tr>
                                                                        <td>6.</td>
                                                                        <td>Designation, Office & B.U.<br> No of Spouse, if
                                                                            spouse is <br> emplored in Govt Deptt</td>
                                                                        <td colspan="3"></td>

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
                                                                    Rupees.....................................Only)</h6>

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
                                                                    ________________________</p>

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
                                                    <div class="col-md-8  px-2 d-none" id="">

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
                                                                        _______________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <label>Trade/Rank</label>
                                                                    </div>
                                                                    <div class="col">
                                                                        _______________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <label>Name</label>
                                                                    </div>
                                                                    <div class="col">
                                                                        _______________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <label>Unit</label>
                                                                    </div>
                                                                    <div class="col-md-4">Station Wksp EME, Delhi Cantt and
                                                                        hereby Certified that
                                                                        my Child/Children
                                                                        (son/daughter)________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col p-2">
                                                                        <h6>Detailed as below:-</h6>

                                                                        <p>(a).Namely _________________________ was studied
                                                                            in class
                                                                            _________________________Sec
                                                                            _________________________
                                                                            <br><br>
                                                                            Roll No _________________________during the
                                                                            previous
                                                                            Academic Year: Apr_________________________ to
                                                                            Mar_________________________<br><br>
                                                                            in(name of school)_________________________
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
                                                                        __________________________
                                                                        <p>(Signature of Govt servant)</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        Name:
                                                                    </div>
                                                                    <div class="col">
                                                                        _____________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        T/P.No:
                                                                    </div>
                                                                    <div class="col">
                                                                        _____________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        Trade/Rank:
                                                                    </div>
                                                                    <div class="col">
                                                                        _____________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        Section:
                                                                    </div>
                                                                    <div class="col">
                                                                        _____________________________
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        Mob No:
                                                                    </div>
                                                                    <div class="col">
                                                                        _____________________________
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-8  px-2 d-none" id="">

                                                        
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


                                                                <p>It is Certified that master/kumari ____________________________________________ 
                                                                    having admission No ________________________________________ Son/Daughter of Mr/Mrs 
                                                                    ____________________________ was studying in class ________________________ Sec 
                                                                    ____________________________
                                                                    Roll No ________________________ during the previous academic year from __________________ 
                                                                    to __________________  School/Institution namely _____________________________
                                                                    Vide affiliation Regd No/code _______________________________and Pattern ______________________ Curriculum.
                                                                </p>




                                                                <p class="mt-5">Place:</p>
                                                                <p>Date:</p>

                                                                <p style="text-align: end;">Signature of Principal</p>
                                                                <p style="text-align: end;">(Affix School Stamp)</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-8  px-2 d-none" id="">
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
    
                                                                <tr>
                                                                    <td>(a).</td>
                                                                    <td>Ishika</td>
                                                                    <td>15 Jun 2015</td>
                                                                    <td>Daughter</td>
                                                                </tr>
    
    
                                                                <tr>
                                                                    <td>(b).</td>
                                                                    <td>Paridhi</td>
                                                                    <td>29 Jul 2017</td>
                                                                    <td>Daughter</td>
                                                                </tr>
    
    
    
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
                                            {{-- Ends --}}
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
