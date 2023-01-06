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

                                                                <h3 style="text-align: center;"> DATA SHEET FOR SANCTION OF FAMILY PENSION AWARDS TO DEFENCE CIVILIAN</h3>
                                                                <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                                <table>
                                                                    <tr>
                                                                        <th style="text-align: center; width: 1110px;
                                                            ">PART- A Service Particulars of Govt. Servant</th>
                                                                    </tr>
                                                                </table>
                                                        
                                                                <hr style="    border: 2px solid;
                                                            color: #0e0c0c;">
                                                        
                                                        
                                                                <div class="row">
                                                        
                                                                    <div class="col-md-4">
                                                                        <h6>1. Organisation Code________</h6>
                                                                    </div>
                                                        
                                                        
                                                                    <div class="col-md-4">
                                                                        <h6>1A. HOO Code________ ________</h6>
                                                                    </div>
                                                        
                                                                    <div class="col-md-4">
                                                                        <h6>1B. E-mail ID of HOO Code________ ________</h6>
                                                                    </div>
                                                        
                                                                </div>
                                                        
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                        
                                                        
                                                                        <h6>2. ORG Group for GPF No.____________</h6>
                                                                    </div>
                                                        
                                                                    <div class="col-md-6">
                                                        
                                                        
                                                                        <h6>3. GPF No.____________</h6>
                                                                    </div>
                                                        
                                                                    <h6>4. Office/Unit Formation ______________________________________________</h6>
                                                        
                                                                    <h6>5. Head of Office Address_______________________________________________________</h6>
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <h6>6. Name _______________________________________</h6>
                                                        
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>7. Nationality Code ________________________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>8. Sex ________________________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>9. Group ________________________</h6>
                                                                        </div>
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <h6>10.PPO No. _______________________________________</h6>
                                                        
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <h6>11. Pension________________________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>12. Nature Of Pension _________________</h6>
                                                                        </div>
                                                        
                                                        
                                                        
                                                                    </div>
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h6>13. Death Category. ______</h6>
                                                        
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>14. Industrial/Non-Indurstial_________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-6">
                                                                            <h6>15. Post Last Held _________________ _________________</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>16.Date of Birth. ______ _________</h6>
                                                        
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>17.Date of Joining (Current Soell)_________ _________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>18. Date of Death/ Missing _________________ _________________</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>19.Date of Retirement/ Superannuation. ______ _________</h6>
                                                        
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>20.Weather Compensation Paid Under W.C Act_________ _________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>21. Non-Qualifying Service _________________ _________________</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>22.Former Service Counted Towards (Current(Spell)). ______ _________</h6>
                                                        
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>23.Net-Qualifying Service_________ _________</h6>
                                                                        </div>
                                                        
                                                        
                                                                    </div>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                                        color: #000000;">
                                                        
                                                                    <h3 style="text-align: center;">PART - B Family Particulars</h3>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                        
                                                                    <h6>24. Name of
                                                                        Gayee________________________________________________________________________________________</h6>
                                                        
                                                                    <div class="row">
                                                                        <div col-md-6>
                                                                            <h6>25. Payee Aadhar No._____________________________________</h6>
                                                                        </div>
                                                        
                                                                        <div col-md-6>
                                                        
                                                        
                                                                            <h6> 26.Payee PAN No._____________________________________________________________</h6>
                                                                        </div>
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                        
                                                                            <h6>27. Mobile No.________________________________________________________________</h6>
                                                                            <h6>28. E-mail
                                                                                ID.________________________________________<br>_________________________________________</h6>
                                                        
                                                                        </div>
                                                                    </div>
                                                        
                                                        
                                                                    <h6>29. Pensioner Address
                                                                        ._________________________________________________________<br>__________________________________________________________
                                                                    </h6>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>30. Nationality of page________________________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>31. Date of Birth________________________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>32.Relation Payee________________________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>33.Medical Allowance________________________</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h6>34.Medical Category___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>35. Family Pension Rule_______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>36.Family Pension Nature________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>37.Whether Family Pension Payable__________</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>38.Share Family Pension________________________</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h6>39.Whether Gty Payable___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>40.Share Gratuaity_______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>41.Date restoration________</h6>
                                                                        </div>
                                                        
                                                        
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h6>42.Date F.I.R Commencement___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>43.Gallantry. Award_______</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                                 color: #000000;">
                                                        
                                                                    <h3 style="text-align: center;"> PART - C Pay Particulars</h3>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>44.Level In Pay Matrix___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>45.Pay in Matrix_______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>46. NPA/MS Pay_______</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <h6>47.Date of Last Pay Drawa___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-6">
                                                                            <h6>48.Ex-Gratia_______</h6>
                                                                        </div>
                                                        
                                                        
                                                        
                                                                    </div>
                                                        
                                                        
                                                                    <h3><u>Amount of Demand/Refund/Interest</u></h3>
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h6>49.On A/c of RDR Head___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>50. On A/c of other than RDR Head _______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>51. Interest on RDR Demand _______</h6>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h6>52.Interest Payable _______</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-2">
                                                                            <h6>53.Prov F.P Paid _______</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                                     color: #000000;">
                                                        
                                                                    <h3 style="text-align: center;"> PART - D PDA DETAILS</h3>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                                     color: #000000;">
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <h6>54.PDA Code___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-3">
                                                                            <h6>55. DPDO Code_______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <h6>56. PDA Station _______</h6>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <h6>57.PDA State Code _______</h6>
                                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>58.Bank/Sub Try Code___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>59.BSR Code of CPPC_______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>60. IFSC Code Paying Branch_______</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <h6>61. Bank A/c No.___________</h6>
                                                                        </div>
                                                        
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>62.Dual Family Pension (D/S)_______</h6>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4">
                                                                            <h6>63.Gty Withheld (Y/N)_______</h6>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                                    <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                                    <h3 style="text-align: center;"> PART-E ( DETAILS OF DEPENDENTS)</h3>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                        
                                                                    <h6> 64.(I). Name______________________________________________________________________________________</h6>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>Whether Handicapped_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Relation with Ind_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Date of Birth_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Aadhaar No._________</p>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                                    <h6> 64.(II). Name______________________________________________________________________________________
                                                                    </h6>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>Whether Handicapped_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Relation with Ind_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Date of Birth_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Aadhaar No._________</p>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                    <h6> 64.(III). Name______________________________________________________________________________________
                                                                    </h6>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>Whether Handicapped_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Relation with Ind_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Date of Birth_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Aadhaar No._________</p>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                    <h6> 64.(IV). Name______________________________________________________________________________________
                                                                    </h6>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>Whether Handicapped_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Relation with Ind_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Date of Birth_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Aadhaar No._________</p>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                    <h6> 64.(V). Name______________________________________________________________________________________</h6>
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>Whether Handicapped_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Relation with Ind_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Date of Birth_________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3">
                                                                            <p>Aadhaar No._________</p>
                                                                        </div>
                                                        
                                                                    </div>
                                                        
                                                        
                                                        
                                                                    <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                                    <h6 style="text-align: center;"> PART-G FOR PCDA (P) USE ONLY</h6>
                                                        
                                                                    <hr style="    border: 2px solid;
                                                            color: #000000;">
                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>65. Letter receipt date______________</p>
                                                                        </div>
                                                        
                                                                        <div class="col-md-6">
                                                                            <p>66.CDR No.__________</p>
                                                                        </div>
                                                                    </div>
                                                        
                                                        
                                                        
                                                        
                                                                    <table>
                                                                        <tr>
                                                                            <th><b>H.O.O</b></th>
                                                                            <th><b> *CDA/AAO/PAO</b></th>
                                                                            <th><b># PAO/LAO</b></th>
                                                                        </tr>
                                                        
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Part-C- Checked & Found Correct</td>>
                                                                            <td>Part-A,B,D & E-Checked & Found Correct</td>
                                                                        </tr>
                                                                    </table>
                                                        
                                                        
                                                        
                                                        
                                                                    <p>*Should be Checked by LAO/PAO responsible for payment of Pay & Allowances and recovery of demand</p>
                                                                    <p>#Shoukd be Checked by LAO responsible for audit of service record & Verification of Qualifying service
                                                                    </p>
                                                        
                                                                    <p><b>Note:- </b> If authority * and # is same, both may be signed by same authority</p>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="pagebreak"></div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                <h3 style="text-align: center;"><u>APPLICATION FOR FAMILY PENSION/DEATH GRATUITY FOR THE FAMILY OF</u></h3>
                                                                <h3 style="text-align: center;"><u> LATE SHRI MOHAN, VM HS H, IN THE OFFICE OF STATION WORKSHOP EME</u></h3>
                                                                <h3 style="text-align:center;"><u>DELHI CANTT-110010</u></h3>
                                                        
                                                        
                                                                <table class="mt-5">
                                                                    <tr>
                                                                        <th style="  width: 50px;
                                                                text-align: center;">1.</th>
                                                                        <th style="height: 45px;
                                                                width: 347px;">Name of applicant(in Block letters)</th>
                                                                        <th style="width: 50px;
                                                                text-align: center;">:</th>
                                                                        <th style="width: 330px;
                                                                text-align: center;"><input type="text"></th>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">2.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Father's/Husband's Name</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">3.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Relationship to the deceased govt servant</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">4.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Relation and Nationality<br>(In block letters)</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">5.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Residence showing village,Parganas,Distt & State)</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">6.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Date of retirement,(if the deceased was pensioner)</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">7.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">No and date of PPO in which the deceased was granted<br>pension / gratuity</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">8.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Date of beath of Govt Servant<br>/pensioner</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">9.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">pension rules opted/eligible</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">10.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Whether nomination made to:-<br>
                                                                            (i)Death-cum-retirementgty<br>
                                                                            (ii)Family pension under<br>Liberalised pension rules.</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">11.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">The order in which the applicent's</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">12.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Total qualifying service of the Govt servant/pensioner(as<br>
                                                                            per details on page 2)</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">13.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Emoluments/pay last drawn by the Govt <br> servant/pensioner.</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">14.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Average Emoluments for the last 10 months of the <br>Govt servant/pensioner.</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">15.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Proposed death gratuity</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">16.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Proposed family pension</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">17.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Date from which pension to commence</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">18.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Date upto which pension is payable</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">19.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Place of payment (in block letters)</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">20.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Descriptive Roll of the claimant</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(i)Date of birth by Christian era</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(ii)height</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(iii)Mark of identification</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(iv)Signature</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(v)Impression of balls of <br> thumb and all the fingers</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">21.</td>
                                                                        <td colspan="3" style="height: 45px;
                                                                width: 347px;">Name and ages of the surviving kindred of the deceased:-</td>
                                                        
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(a)Widow/ Widower</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(b)Sons</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(c)Unmarried daughters</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(d)Father</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(e)Mother</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(f)Brother</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(g)Un-married sisters</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(h)Widowed sisters</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(j) Married sisters</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(k)Married daughters</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;"></td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">(I)Children of pre-deceased<br>Son</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                        
                                                                    <tr>
                                                                        <td style="  width: 50px;
                                                                text-align: center;">22.</td>
                                                                        <td style="height: 45px;
                                                                width: 347px;">Date of application</td>
                                                                        <td style="width: 50px;
                                                                text-align: center;">:</td>
                                                                        <td style="width: 330px;
                                                                text-align: center;"><input type="text"></td>
                                                                    </tr>
                                                                </table>
                                                        
                                                        
                                                                <h5 class="mt-5">Witnessed by:-</h5>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                <p>1.</p>
                                                                <p>2.</p>
                                                        
                                                        
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"></div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                
                                                                    <h6 style="text-align: center;"><u>Countersigned</u></h6>





                                                                    <h6 style="text-align:end;"><u>ANNEXURF-II</u></h6>


                                                                    <h6 style="text-align: center;"><u>CALCULATION SHEET</u></h6>


                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <p><span class="mx-5 mt-3">1.</span>(a) Name of the deceased Govt Servant</p>
                                                                            <p><span class="mx-5"></span>(b) Appointment held</p>
                                                                            <p><span class="mx-5"></span>(c) Date of birth</p>
                                                                            <p><span class="mx-5"></span>(d) Date of Appointment
                                                                            <p><span class="mx-5"></span>(e) Date of death</p>
                                                                            <p><span class="mx-5"></span>(f) Office in which serving at the time if death</p>
                                                                            </p>
                                                                            <p><span class="mx-5"></span>(e) Name of the deceased Govt Servant</p>
                                                                            <p><span class="mx-5"></span>(f) Name of the deceased Govt Servant</p>


                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p>:<input type="text" name="" id="" class=""></p>
                                                                            <p>:<input type="text" name="" id="" class="mt-2"></p>
                                                                            <p>:<input type="text" name="" id="" class="mt-2"></p>
                                                                            <p>:<input type="text" name="" id="" class="mt-2"></p>
                                                                            <p>:<input type="text" name="" id="" class="mt-2"></p>
                                                                            <p>:<input type="text" name="" id="" class="mt-2"></p>
                                                                        </div>

                                                                    </div>


                                                                    <h6 class="mt-5"><span class="mx-3">1.</span>Particulars of qualifying service.</h6>

                                                                    <table>
                                                                        <tr>
                                                                            <th>Qualifying Service</th>
                                                                            <th style="width: 70px;">From</th>
                                                                            <th style="width: 70px;">To</th>
                                                                            <th style="width: 70px;">Year</th>
                                                                            <th style="width: 70px;">Month</th>
                                                                            <th style="width: 70px;">Days</th>
                                                                        </tr>


                                                                        <tr>
                                                                            <td>(a) Regular/Permt service</td>
                                                                            <td>1245.15245</td>
                                                                            <td>13.07.2022</td>
                                                                            <td>11</td>
                                                                            <td>04</td>
                                                                            <td>00</td>
                                                                        </tr>




                                                                        <tr>
                                                                            <td>(b) Regular/Permt service</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td>Total qualifying service</td>

                                                                            <td colspan="2">13.07.2</td>
                                                                            <td>11</td>
                                                                            <td>04</td>
                                                                            <td>00</td>
                                                                        </tr>



                                                                    </table>


















                                                                    <h6 class="mt-5"><span class="mx-3">3.</span></h6>

                                                                    <table>
                                                                        <tr>
                                                                            <th>Qualifying Service</th>
                                                                            <th style="width: 70px;">From</th>
                                                                            <th style="width: 70px;">To</th>
                                                                            <th style="width: 70px;">Year</th>
                                                                            <th style="width: 70px;">Month</th>
                                                                            <th style="width: 70px;">Days</th>
                                                                        </tr>


                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>-</td>
                                                                            <td>04</td>
                                                                            <td>00</td>
                                                                        </tr>




                                                                        <tr>
                                                                            <td></td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td>Total qualifying service</td>

                                                                            <td colspan="2"></td>
                                                                            <td>11</td>
                                                                            <td>04</td>
                                                                            <td>00</td>
                                                                        </tr>



                                                                    </table>



                                                                    <h6 class="mt-5">4.</h6>
                                                                    <table>
                                                                        <tr>
                                                                            <th style="width: 450px;">Net Qualifying service <span class="mx-4">11 Yrs</span> <span class="mx-3">04
                                                                                    Months</span><span>00 days</span></th>
                                                                        </tr>
                                                                    </table>



                                                                    <h6 class="mt-5"><span>5.</span><u>Emoluments for Family Pension-Amount Last Pay drawn</u></h6>

                                                                    <table>
                                                                        <tr>
                                                                            <th style="width: 100px;">Basic Pay</th>
                                                                            <th style="width: 100px;">Stgn Incr Pay</th>
                                                                            <th style="width: 100px;">Rank Pay</th>
                                                                            <th style="width: 100px;">Level</th>
                                                                            <th style="width: 100px;">NPA</th>
                                                                            <th style="width: 100px;">Others</th>
                                                                            <th style="width: 100px;">TOTAL</th>
                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>0</td>


                                                                        </tr>
                                                                    </table>



                                                                    <h6 class="mt-5"><span>6.</span><u>Emoluments for Death Gratuity-Amount Last Pay drawn</u></h6>

                                                                    <table>
                                                                        <tr>
                                                                            <th style="width: 100px;">Basic Pay</th>
                                                                            <th style="width: 100px;">Stgn Incr Pay</th>
                                                                            <th style="width: 100px;">Rank Pay</th>
                                                                            <th style="width: 100px;">Level</th>
                                                                            <th style="width: 100px;">NPA</th>
                                                                            <th style="width: 100px;">DA @ 34%</th>
                                                                            <th style="width: 100px;">TOTAL</th>
                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>


                                                                        </tr>
                                                                    </table>

                                                                    <h6><span class="mx-5">7.</span> Calculation of family pension under New Family pension Scheme 1964 for
                                                                        joint<br>notification</h6>


                                                                    <p><span class="mx-5"></span> Total Emoluments 29300 X 50/100 = 29300</p>


                                                                    <p>Note: Minimum family pension rs. 1275/-wef 1.1.96 and Rs.9000/- wef 01.01.2016.</p>
                                                                    <p><span class="mx-5"></span>Enhanced rate of family pension:- where Govt servant dies while in service
                                                                        having<br>
                                                                        rendered not less than 07 years "Continuous Service".</p>



                                                                    <h6 class="mt-5"><span class="mx-3">(a)</span>In cases where compensation is not admissible under WC Aet-1923
                                                                    </h6>
                                                                    <p><span class="mx-4"></span>(i)50% of the last Emoluments or</p>
                                                                    <p><span class="mx-4"></span>(ii)Double of the normal rate of family pension,<br>Which ever is less.</p>



                                                                    <h6 class="mt-5"><span class="mx-3">(b)</span>In cases where compensation is admissible under WC Aet-1923</h6>
                                                                    <p><span class="mx-4"></span>(i)3/2 or ordinary rate of family pensioner</p>
                                                                    <p><span class="mx-4"></span>(ii)Double of the normal rate of F.P Whichever is less.</p>


                                                                    <h6 style="text-align: center;" class="mt-5">Duration of Enhanced rete of family pension :-
                                                                        Enhanced rete of family pension<br>will be payable for a period of 07 years from the date following the date
                                                                        of death of <br>
                                                                        Government servant.Thereafter normal rate of family pension will be payable.</h6>


                                                                    <h5 class="mt-5"><span class="mx-5 ">8.</span> Calculation of Death gratuity.</h5>


                                                                    <table class="mt-4">
                                                                        <tr>
                                                                            <td>(i)</td>
                                                                            <td>Less than I yaer qualifying service</td>
                                                                            <td>2 times of Emoluments</td>

                                                                        </tr>


                                                                        <tr>
                                                                            <td>(ii)</td>
                                                                            <td>One year or more but less than 5 year.</td>
                                                                            <td>6 times of Emoluments</td>

                                                                        </tr>

                                                                        <tr>
                                                                            <td>(iii)</td>
                                                                            <td>Five years or more but less than ll years.</td>
                                                                            <td>12 times of Emoluments</td>

                                                                        </tr>

                                                                        <tr>
                                                                            <td>(iv)</td>
                                                                            <td> ll years or more but less than 20 years.</td>
                                                                            <td>20 times of Emoluments</td>

                                                                        </tr>


                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Twenty years or more</td>
                                                                            <td>Half of the Emoluments for every<br>
                                                                                completed six months period of <br>qualifying service subject to a<br>
                                                                                maximum of 33 times of Emoluments<br>
                                                                                or Rs. 20,00,000/- Whichever is less.</td>

                                                                        </tr>
                                                                    </table>

                                                                    <h4 class="mt-4">Death gratuity : 20 x Emoluments = 20 =7,85,240/-</h4>



                                                                    <h4 class="mt-5"><u>COUNTERSIGNED BY</u></h4>

                                                                    <h6>Area Accounts Office</h6>
                                                                    <h6>Delhi Cantt-110010</h6>


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"></div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                    

                                                                    <h4 style="text-align: center;"><u>HISTORY OF SERVICE SHOWING INTERRUPTIONS OF <br>
                                                                        EX-T.NO.437 TCS (SK) SH GAUTTAM KUMAR</u></h4>

                                                                <table>
                                                                    <tr>
                                                                        <th style="height: 150px;">Establish ment</th>
                                                                        <th>Appt</th>
                                                                        <th>Pay</th>
                                                                        <th>Act-ing allce</th>
                                                                        <th>Date of <br>begin-ing</th>
                                                                        <th>Date of ending </th>
                                                                        <th>Period<br>reckone d as service</th>
                                                                        <th>Period not <br>reckoned as <br>service</th>
                                                                        <th>Leave with <br>out allce</th>
                                                                        <th>How ery <br> fied</th>
                                                                        <th>Remar ks</th>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>Stn Wksp <br> EME PIN- <br>900497 <br>C/o 56 APO</td>
                                                                        <td>14/03/20<br>11 (SK)</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>14 MAR <br>2011</td>
                                                                        <td>13/07/2022</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Check roll & <br> pay allowc erc</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <h6 style="text-align:end;">(Tushar Joshi)<br>AEE<br>Civ Est Office <br>For CO</h6>

                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"></div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                
                                                                <h5 style="text-align: center;" class="mt-5"><u>REMARKS OF HEAD OF OFFICE</u></h5>


                                                                <div class="row">
                                                                    <div class="col-md-6">




                                                                        <h6 class="mt-5">1.As to character and past conduct of deceased</h6>

                                                                        <h6 class="mt-5"><span class="mx-3">(a)</span>Whether the Office is involved in a <br> diseiplinary
                                                                            case/Court of Inquiry</h6>

                                                                        <h6 class="mt-5">2.Explanation of any suspension or degradation</h6>

                                                                        <h6 class="mt-5">3.Regarding any gratuity or pension already<br>received by applicant - See chapter
                                                                            xxl,<br>C.S Regs.</h6>
                                                                        <h6 class="mt-5">4.Any other remarks</h6>
                                                                        <h6 class="mt-5">5.Speeific opinion by Head of Office, whether the <br>
                                                                            service claimed is established, and should be <br>admitted or not. (See Article 912 (ii) and 917
                                                                            (ii)<br>
                                                                            C.S Regs).</h6>

                                                                    </div>


                                                                    <div class="col-md-6 mt-3">

                                                                        <h6 class=" mt-5"> :<input type="text" name="" id=""></h6>
                                                                        <h6 class=" mt-5"> :<input type="text" name="" id=""></h6>
                                                                        <h6 class=" mt-5"> :<input type="text" name="" id=""></h6>
                                                                        <h6 class=" mt-5"> :<input type="text" name="" id=""></h6>
                                                                        <h6 class=" mt-5"> :<input type="text" name="" id=""></h6>
                                                                        <h6 class=" mt-5"> :<input type="text" name="" id=""></h6>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"></div>
                                                        <div class="row">
                                                            <div class="col-md-12 px-3">
                                                                

                                                                <h6 class="mt-5">Station : Delhi Cantt-10</h6>
                                                                <h6>Dated : Aug 2022</h6>



                                                                <h5>To,</h5>
                                                                <h6 class="mx-5">Commanding Officer<br>Station Workshop EME<br>Delhi Cantt-110010</h6>


                                                                <h4 style="text-align: center;"><u>APPLICATION FOR SANCTION OF FAMILY PENSION/DEATH GRATUITY</u></h4>

                                                                <h6>Sir.</h6>

                                                                <P class="mx-4">Most respectfully I beg to state that my Husband Late Shri Gauttam Kumar died on 13 <br>
                                                                    Jul 2022. I therefore, request you to kindly grant family pension benefits admissible to me<br><br>
                                                                    from the date of death of my Husband. I desired to draw my family pension benifity from State<br>Bank of
                                                                    India </P>



                                                                <h6><span class="mx-5"></span>I, hereby declare that i have neither applied nor received any pension/family
                                                                    pension</h6>

                                                                <h6><span class="mx-5">3.</span> I am residing in govt accommodation and hereby declare to deduct any dues from
                                                                    my pension account.</h6>

                                                                <h6><span class="mx-5">4.</span>I am enclosed following documents:-</h6>

                                                                <h6><span class="mx-5"></span>(a). My three specimen Signatures.</h6>


                                                                <h6><span class="mx-5"></span>(b). My three copies of passport size photographs duly attested.</h6>


                                                                <h6><span class="mx-5"></span>(c). Three slips each bearing my right hand thumb Impression alongwith Particulars
                                                                    of height and identification marks.</h6>

                                                                <h6><span class="mx-5">5.</span>My present address is as under:-</h6>


                                                                <h6 class="mt-5" style="text-align: end;">Yours faithfully,</h6>

                                                                <h6>Dated: Aug 2022</h6>

                                                                <h6 class="mt-5" style="text-align: end;"> Smt Mamta Saini W/o<br>Late Sh Gauttam Kumar</h6>


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col px-3">
                                                                <h3 class="mt-5" style="text-align: center;"><u>TEMPORARY SERVICE CERTIFICATE</u></h3>


                                                                <p>This is certified that the temp service rendered by <b>Late Shri Gauttam Kumar </b>From <b>14 Mar 2011 to 13
                                                                        Jul 2022</b>
                                                                    was not in a non pensionable post, daily rated, casual or paid out of contingencies.</p>
                                                        
                                                        
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Station: Delhi Cantt-10</p>
                                                                        <p>Dated : Aug 2022</p>
                                                                    </div>
                                                        
                                                                    <div class="col-md-6">
                                                                        <p>(Tushar Joshi)</p>
                                                                        <p>Asst Exce Engineer<br>Civ Est Officer<br> For Commanding Officer</p>
                                                        
                                                                    </div>
                                                        
                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col px-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Station: Delhi Cantt-10</p>
                                                                        <p>Dated : Aug 2022</p>
                                                                    </div>
                                                        
                                                                    <div class="col-md-6">
                                                                        <p>(Tushar Joshi)</p>
                                                                        <p>Asst Exce Engineer<br>Civ Est Officer<br> For Commanding Officer</p>
                                                        
                                                                    </div>
                                                        
                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col p-5">
                                                                

                                                                <h6><u>AN EXTRACT FROM DO POART</u></h6>

                                                                <p>Unit : Station Workshop EME</p>
                                                                <p>Stn : Delhi CANTT-110010</p>


                                                                <h5><u>Strength Deerease : Death</u></h5>




                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        1.<p>T.No 437 TCS (SK)</p>
                                                                        <p>Late Shri Gauttam Kumar</p>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <p><b><u>13 Jul 2022</u></b></p>
                                                                        <p>The individual expired on 13 Jul 2022 and SOS wef 14 Jul 2022 (F/N).</p>

                                                                    </div>


                                                                </div>


                                                                <p>(Auth: Death cert reg No D-2022:6-90152-000154 dt Jul 2022 issued by <br> Registrar(Birth & Date), Civil
                                                                    Hospital Narnaul, Haryana).</p>


                                                                <p style="text-align:end;">Sd/-xxxx<br>AEE<br>Civ Est Officer<br>For Commanding Officer</p>

                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col p-3">
                                                                <h3 style="text-align: center;"><u>NO DEMAND CERTIFICATE AND NO GOVT ACCOMODATION CERITIFICATE</u></h3>


                                                                <P><span class="mx-5">1.</SPan>certified that ren and allied charges is outstanding against Smt Mamta Saini W/o
                                                                    Late<br>
                                                                    Ex-T.No. 437 TCS(Sk) Gauttam Kumar who expired on 13 Jul 2022 (FN)</P>
                                                        
                                                        
                                                        
                                                                <p><span class="mx-5">2.</span>Smt Manta Saini W/o Late Gauttam Kumar having govt. married accommodation.</p>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                <div class="row mt-5">
                                                                    <div class="col-md-6">
                                                                        <p>Station: Delhi Cantt-10</p>
                                                                        <p>Dated : Aug 2022</p>
                                                                    </div>
                                                        
                                                                    <div class="col-md-6">
                                                                        <p>(Tushar Joshi)</p>
                                                                        <p>Asst Exce Engineer<br>Civ Est Officer<br> For Commanding Officer</p>
                                                        
                                                                    </div>
                                                        
                                                        
                                                                </div>
                                                        
                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col">

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
