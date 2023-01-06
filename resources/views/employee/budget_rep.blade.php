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
                            <label class="font-weight-bold"> Budget Report</label>
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
                                    <a class="nav-link active" data-toggle="tab" href="#apply_cea" role="tab">Annual
                                        Budget Report</a>
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
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row" id="DivIdToPrint">
                                                    <div class="col">
                                                        <div class="row">

                                                            <div class="col-md-12 px-5" id="">


                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h4><u>QUARTERLY REPORT</u></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p>Tele:26584</p>
                                                                        <p class="m-o">50103/Civ/3-G-3</p>
                                                                        <p class="mt-2">LAO</p>
                                                                        <p class="m-0">505 ArmyBase Wksp</p>
                                                                        <p class="m-0">Delhe Cant-110010</p>
                                                                    </div>

                                                                    <div class="col-md-6" style="text-align: end;">
                                                                        <p>Station Workshop EME </p>
                                                                        <p class="m-o">Delhi Cantt-110010</p>
                                                                        <p class="">Sep-22</p>

                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col text-center">
                                                                        <h4><u>SUBMISSION OF QUARTERLY RETURN REGARDING
                                                                                ACTUAL EXPENDITURE <br>
                                                                                INEURREO ON PAY AND VARIONS TYPES OF
                                                                                ALLOWANCES FOR THE YEAR<br>
                                                                                <h4> 2022-23 IN R/0 REULAR CENTRAL GOVT
                                                                                    CIVILIANS EMPLOYEES</h4>
                                                                            </u></h4>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col  text-center">
                                                                        <h6 class="mt-5"> 1 . The subject report for the
                                                                            QE Aug 2022 is forwarded herewith as per Annex
                                                                            I<br>
                                                                            & || attached to this letter in duplicate for
                                                                            your further necessary action please.
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6 mt-5">
                                                                        <p class="mt-5">Encls : As above </p>


                                                                    </div>

                                                                    <div class="col-md-6 mt-5" style="text-align: end;">
                                                                        <p>(Tushar Joshi ) </p>
                                                                        <p class="m-o">AEE</p>
                                                                        <p class="">Civ Est Officer </p>
                                                                        <p>For Commanding Officer</p>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row mt-5">
                                                            <div class="col-md-12 px-5 " id="">

                                                                <div class="row">
                                                                    <div class="col text-center">
                                                                        <h4><u>PROFORM FOR CALLECTION DATA ON ACTUAL
                                                                                EXPENDITURE
                                                                                INCURRED BY THE<br>
                                                                                MINISTRIES/DEPARTMENT/UTS AND THEIR ATTACHED
                                                                                AND
                                                                                SUBORDINATE Officer ON<br>
                                                                                PAY AND VARIOUSE TYPES ALLOWANCES OF THEIR
                                                                                REGULAR CIVILIAN EMPLOYEES

                                                                                <h4 class="mx-5"> (please read the
                                                                                    attached
                                                                                    instructions before filling up the
                                                                                    proforma)
                                                                                </h4>
                                                                            </u></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <p>1.OFFICE PARTICULARS:-</p>
                                                                        <table class="w-100" border="1">
                                                                            <thead>
                                                                                <th>Name of the Office/Department with full
                                                                                    postal
                                                                                    address::</th>
                                                                                <th>STN WKSP EME,DELHI CANTT.</th>
                                                                            </thead>
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td>STATUS OF ESTABLISHMENT**
                                                                                        (SECRETARIATE
                                                                                        PROPER/ATTACHED )</td>
                                                                                    <td>SUBORDINATE</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>IF THE ESTABLISHMENT IS AN ATTACHED
                                                                                        OR
                                                                                        SUBORDINATE OFFICE,PLEASE</td>
                                                                                    <td>Min of Defence(Finance)</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Name ,designation,postal address,tel
                                                                                        No,Fax,emall address<br>
                                                                                        of the Officer of the level of
                                                                                        Deputy
                                                                                        Secy/Dtr
                                                                                        who is responsible<br>
                                                                                        for furnishing the return</td>
                                                                                    <td><b>Colonel S S Senger <br>
                                                                                            Commanding Officer,<br>
                                                                                            Station workshop EME <br>
                                                                                            Delhe Cantt-110010<br>
                                                                                            Tele No.36580</d>
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Period of the quarter under report
                                                                                        (if
                                                                                        the
                                                                                        report is for the<br>
                                                                                        entire year. if may please be
                                                                                        mentioned
                                                                                    </td>
                                                                                    <td><b>quarter Feb-22
                                                                                            <br>Ending</b>
                                                                                    </td>

                                                                                </tr>
                                                                            </tbody>



                                                                        </table>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">

                                                                        <p>.Mandatory</p>
                                                                        <p>..Exenditure on pay and allowances of the
                                                                            emplotees
                                                                            of autonomous Bodies, PSUs and casual <br>
                                                                            emplotees of the Min./Deptt is not to be
                                                                            included
                                                                        </p>

                                                                        <h4>2.INFORMATION ON EMPLOYEES:-</h4>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <table class="w-100">
                                                                            <thead>
                                                                                <th>
                                                                                    GROUP-WISE NUMBER OF EMPLOYEES IN
                                                                                    POSITION(at the end of quarter)
                                                                                </th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td> GROUP-A <input type="text"></td>
                                                                                    <td> GROUP-B</td>
                                                                                    <td> GROUP-C </td>
                                                                                    <td> GROUP-D</td>
                                                                                    <td>Unclassified</td>
                                                                                    <td>Total</td>
                                                                                </tr>

                                                                                <tr>

                                                                                    <td>NIL</td>
                                                                                    <td>NIL</td>
                                                                                    <td>71</td>
                                                                                    <td>0</td>
                                                                                    <td>NIL</td>
                                                                                    <td>NIL</td>

                                                                                </tr>
                                                                            </tbody>

                                                                        </table>

                                                                        <p class="mt-5">3.EXPENDITURE ON PAY AND VARIOUS
                                                                            ALLOWANCES:-</p>
                                                                        <table class="w-100" border="1">
                                                                            <thead>
                                                                                <th>S.NO</th>
                                                                                <th>HEADS</th>
                                                                                <th>Actual oxpo<br>nditure (in Rs.)</th>
                                                                            </thead>
                                                                            <tbody>


                                                                                <tr>
                                                                                    <td>(1)</td>
                                                                                    <td>(2)</td>
                                                                                    <td>(3)</td>
                                                                                    <td>(4)</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>1.</td>
                                                                                    <td>Pay of Gazetted Officers +Grade Pay
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>2.</td>
                                                                                    <td>Pay of Non Gazetted Stall + Grade
                                                                                        pay
                                                                                    </td>
                                                                                    <td>211545624</td>
                                                                                    <td>121454045</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>3.</td>
                                                                                    <td>NOn.Precticing allowances</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td>(|)</td>
                                                                                    <td><b>Sub Total(S.No 1 to 3)</b></td>
                                                                                    <td><b>7717211</b></td>
                                                                                    <td><b>30864626</b></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>4.</td>
                                                                                    <td>Dearness allowance</td>
                                                                                    <td>2372709</td>
                                                                                    <td>8205137</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>5.</td>
                                                                                    <td>House Rent Allowance</td>
                                                                                    <td>1397709</td>
                                                                                    <td>5372949</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>6.</td>
                                                                                    <td>Overtime Allowance</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>7.</td>
                                                                                    <td>Family Planning allowances</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td>8.</td>
                                                                                    <td>(a)Spl Pay</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b)Deputation (Duty) allowances &
                                                                                        Centarl
                                                                                        Deputation Allowance</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>9.</td>
                                                                                    <td>Transport Allowance</td>
                                                                                    <td>961485</td>
                                                                                    <td>3716647</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>10.</td>
                                                                                    <td>Composit Hill Compenstory allces
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>11.</td>
                                                                                    <td>(a) Children Enuction allowances
                                                                                        /Tuition Feer
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td>648000</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b)Hostel Subsidy</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>12.</td>
                                                                                    <td>(b)Leave Travel Concession(LTC)</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>13.</td>
                                                                                    <td>Encashment of EL for the purpose of
                                                                                        LTC
                                                                                    </td>
                                                                                    <td>443056</td>
                                                                                    <td>2430882</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>14.</td>
                                                                                    <td>Re-imbursement of Medical Charges*
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>15.</td>
                                                                                    <td>(a)Spl (Duty) Allowance for NE
                                                                                        Region &
                                                                                        Ladakh
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b)Island Special (Duty) Allowance
                                                                                        for
                                                                                        A&N &
                                                                                        Ladakhaweep</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>16.</td>
                                                                                    <td>Special Compenstory Allowance</td>
                                                                                    <td></td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(a)Hill Area</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> </td>
                                                                                    <td>(b) Remote locality</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(c)Bad climate</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(d)Cycle Allce</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(e) NPS</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(f)Washing allowance</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(g)Disturbed Area Allowance </td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(h)Night Duty Allowance</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(j)Risk Allowance</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(k)Hospital Patient Care Allowance
                                                                                        (HPCA)/Patient care allowance</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(I)CGEGIS</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(m) Arrear of 7th Pay Commission
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(n) Telephone</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(O) Ration Allces</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(p)TA/DA</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(q)Stationary and Printing</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td><b>17</b></td>
                                                                                    <td><b>(TO BE FILLED BY MH ONLY)</b>
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td></td>
                                                                                </tr>




                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(a)Detachment Allces</td>
                                                                                    <td>0</td>
                                                                                    <td></td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b) Compensation in lieu of
                                                                                        Quarter(CILQ)</td>
                                                                                    <td>0</td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(c)Family Accommodation
                                                                                        Allowance(FAA)
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(d)High Altitube Allce</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(e)Field Area Allce/Counter
                                                                                        insurgency
                                                                                        Operttion
                                                                                        Allce</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(f)Modified Field Area Allce</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(g)LWE risk Allce</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>18.</td>
                                                                                    <td><b>To be filled by M/O Rallwaya
                                                                                            only</b>
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(a)NPS Arrear</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b)CGEGIS</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(c)Ration Allce</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(d)Nursing Allowance</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(e)Uniform Allowance</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>19.</td>
                                                                                    <td>Other, (If any specify)</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td><b>Sub-Total (S.No 4 to 19)</b></td>
                                                                                    <td><b> 25669634</b></td>
                                                                                    <td><b> 66248552</b></td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td><b>Grand Total (1+2)</b></td>
                                                                                    <td><b>25685549</b></td>
                                                                                    <td><b>52458546</b></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>20.</td>
                                                                                    <td><b>Bonus</b></td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(a) Productivity Linkefr Bonus</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b)Ad-Hoc Bonus</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>21.</td>
                                                                                    <td>Honorarium</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>22.</td>
                                                                                    <td>Travel Expense</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(a)Tours/Vehicle purchase </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>1. Domestic Travel Expenses(DTE)
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>2.Foreign Travel Expenses(FTE)</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>(b)Transfers</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>Total(a)+(b)</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>23</td>
                                                                                    <td>Encashment of earned leave on
                                                                                        Superannuation/Vol
                                                                                        Retirement</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>Grand Total</td>
                                                                                    <td>215252456</td>
                                                                                    <td>452155446</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td><b> Expenditure On HRA</b></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td><b>class of Cities umber of
                                                                                            Cities</b>
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td><b>A1 <b class="mx-5">1</b></b>
                                                                                    </td>
                                                                                    <td>25485652</td>
                                                                                    <td>52524588</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td><b>Total </b></td>
                                                                                    <td>135458527</td>
                                                                                    <td>674536585</td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td class="p-3"><b>*</b>Expenditure
                                                                                        out
                                                                                        of
                                                                                        Medical Treatment Grant from the
                                                                                        Head
                                                                                        200/06
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td class="p-5"><u><b>ACTUAL
                                                                                                EXPENDITURE
                                                                                                ON
                                                                                                INDUSTRIAL MEDICAL
                                                                                                TREATMENT</b></u>
                                                                                    </td>
                                                                                    <td><b>254824154</b></td>
                                                                                    <td><b>524585952</b></td>
                                                                                </tr>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row mt-5">

                                                            <div class="col-md-12 px-5 " id="">
                                                                <div class="row">
                                                                    <div class="col text-center">

                                                                        <h4><b><u>FINANCIAL YEAR 2022-2023</u></b></h4>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">


                                                                        <h4><b><u>(CALCULATION SHEET)</u></b></h4>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center">

                                                                        <h4><b><u>MONTHLY SUMMARY OF CHECK-ROLL - FOR THE
                                                                                    MONTH OF OCT 2022 (FY 2022-2023)</u></b>
                                                                        </h4>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        ---------------------------------------------------------
                                                                        <table class=" w-100" border="1">
                                                                            <thead>
                                                                                <th>Gde<br>Pay</th>
                                                                                <th>DA</th>
                                                                                <th>HRA</th>
                                                                                <th>TPT</th>
                                                                                <th>PP</th>
                                                                                <th>GMC</th>
                                                                                <th>WA</th>
                                                                                <th>TF</th>
                                                                                <th>PLB</th>
                                                                                <th>MISC</th>
                                                                                <th>TOTAL</th>
                                                                                <th>EOL<br>DED</th>
                                                                                <th>LATE</th>
                                                                                <th>GPF</th>
                                                                                <th>GPF<br>PEF</th>
                                                                                <th>GMC</th>
                                                                                <th>CPS</th>
                                                                                <th>CGEIS</th>
                                                                                <th>CGHS</th>
                                                                                <th>FA</th>
                                                                                <th>LFEE</th>
                                                                                <th>MIS<br>C</th>
                                                                                <th>ITAX</th>
                                                                                <th>TOTAL<br>DED</th>
                                                                                <th>NETPAY</th>
                                                                                <th>LTC</th>
                                                                                <th>TA/DA</th>
                                                                                <th>MED</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                @for ($i = 0; $i < 5; $i++)
                                                                                    <tr>
                                                                                        <td>254145</td>
                                                                                        <td>458241</td>
                                                                                        <td>0</td>
                                                                                        <td>0</td>
                                                                                        <td>5240</td>
                                                                                        <td>4550</td>
                                                                                        <td>47850</td>
                                                                                        <td>251450</td>
                                                                                        <td>5520</td>
                                                                                        <td>0</td>
                                                                                        <td>0</td>
                                                                                        <td>50</td>
                                                                                        <td>0</td>
                                                                                        <td>50</td>
                                                                                        <td>50</td>
                                                                                        <td>0</td>
                                                                                        <td>50</td>
                                                                                        <td>5520</td>
                                                                                        <td>51240</td>
                                                                                        <td>50</td>
                                                                                        <td>0</td>
                                                                                        <td>30</td>
                                                                                        <td>0</td>
                                                                                        <td>50</td>
                                                                                        <td>54150</td>
                                                                                        <td>0</td>
                                                                                        <td>520</td>
                                                                                        <td>50</td>
                                                                                    </tr>
                                                                                @endfor
                                                                            </tbody>
                                                                            <tr>


                                                                        </table>
                                                                        *********************************************************
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row mt-5">

                                                            <div class="col-md-12 px-5" id="">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <u>
                                                                            <h4>Medical Expenditure Apr 2022 to Mar2023</h4>
                                                                        </u>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <u>
                                                                            <h4>Up to Mar 2023</h4>
                                                                        </u>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h4>200000</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h3><u>Amed Amt</u></h3>
                                                                        <h3><u>Bnding Amt</u></h3>
                                                                    </div>
                                                                    <div class="col">
                                                                        <u>
                                                                            <h4>880770</h4>
                                                                        </u>
                                                                    </div>
                                                                    <div class="col">
                                                                        <u>
                                                                            <h4>11119230</h4>
                                                                        </u>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">

                                                                    </div>
                                                                </div>

                                                                <!-- start***************************************4-->
                                                                <table class="w-100" border="1">
                                                                    <thead>
                                                                        <th>S.No</th>
                                                                        <th>No.& Name </th>
                                                                        <th>Hosp/Self</th>
                                                                        <th>ID<br>No./B.N<br>o/dt</th>
                                                                        <th>Amt<br>Clalmed</th>
                                                                        <th>Amt<br>passed</th>
                                                                        <th>Pald<br>Month</th>
                                                                        <th>DV No</th>
                                                                        <th>Che<br>que<br>/Dr<br>aft</th>
                                                                    </thead>
                                                                    <tbody>
                                                                    
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td></td>
                                                                            <td>CMD Pradeep Chhikara</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>jun-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td></td>
                                                                            <td>CMD Pradeep Chhikara</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>jun-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                            <td>TCM Smt Nutan Sharma</td>
                                                                            <td>Self</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>jun-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td></td>
                                                                            <td>TCM Smt Nutan Sharma</td>
                                                                            <td>Self</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>jun-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td></td>
                                                                            <td>MTS Sh Anil Kumar</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620</td>
                                                                            <td>524</td>
                                                                            <td>May-22</td>
                                                                            <td>22 of 05/2022</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td></td>
                                                                            <td>VM(MCM)Sh Gayn Chand</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>5241</td>
                                                                            <td>May-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td></td>
                                                                            <td>VM Sh Ganga Prakash</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>jun-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
    
    
    
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td></td>
                                                                            <td>VM Sh Ganga Prakash</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>jun-22</td>
                                                                            <td>22 of 06/2022</td>
                                                                        </tr>
    
    
    
    
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td></td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>May-22</td>
                                                                            <td>225 of 06/2022</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td></td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>01-May</td>
                                                                            <td>225 of 06/2022</td>
                                                                        </tr>
    
    
    
    
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>201201/Civ/IP/NB/04 May 22</td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>May-22</td>
                                                                            <td>Ex Facto</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td< /td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td></td>
                                                                            <td>MTS Anil Kumar</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>Juy-22</td>
                                                                            <td>220 of 06/2022</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>13</td>
                                                                            <td></td>
                                                                            <td>MTS Anil Kumar</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>Juy-22</td>
                                                                            <td>220 of 06/2022</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>14</td>
                                                                            <td>255141/Civ/IP/DS dt 06 Jun 22</td>
                                                                            <td>TCM Sh Dayal Singh</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>524651</td>
                                                                            <td>22-Oct</td>
                                                                            <td>79 of 06/2022</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>15</td>
                                                                            <td>255141/Civ/IP/DS dt 06 Jun 22</td>
                                                                            <td>LHNT Gaya Prasad</td>
                                                                            <td>Pawan Gandh</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>returned to hosd</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>16</td>
                                                                            <td></td>
                                                                            <td>VM MCM Sh Rajinder Kumar</td>
                                                                            <td>Ansari hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>re-submit</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>17</td>
                                                                            <td>255141/Civ/NIP/GP dt 30 Apr 22</td>
                                                                            <td>LHNT Gaya Prasad</td>
                                                                            <td>Pawan Gandh</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>25414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>113 of 10/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>18</td>
                                                                            <td>255141/Civ/NIP/SKS dt 30 Apr 22</td>
                                                                            <td>LDC Sh SK Sharma</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Oct-22</td>
                                                                            <td>113 of 20/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>19</td>
                                                                            <td>255141/Civ/IP/S dt 30 Jun 22</td>
                                                                            <td>T/Mate Sh Sombir</td>
                                                                            <td>Ansari hosp</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Oct-22</td>
                                                                            <td>113 of 20/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>20</td>
                                                                            <td>11141/Civ/IP/S dt 09 jun 22</td>
                                                                            <td>T/Mate Sh Sombir</td>
                                                                            <td>Ansari hosp</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Oct-22</td>
                                                                            <td>113 of 20/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>21</td>
                                                                            <td>11141/Civ/IP/GC dt 09 jun 22</td>
                                                                            <td>VM(MCM) Sh Gayn Chand</td>
                                                                            <td>Self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Oct-22</td>
                                                                            <td>113 of 20/22</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>22</td>
                                                                            <td>11141/Civ/IP/NK dt 15 jun 22</td>
                                                                            <td>MTS Naresh Kumar</td>
                                                                            <td>Ansari hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td></td>
                                                                            <td>Ex Facto</td>
                                                                        </tr>
    
    
    
    
                                                                        <tr>
                                                                            <td>.</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>23</td>
                                                                            <td></td>
                                                                            <td>CM OM Prakash</td>
                                                                            <td></td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Oct-22</td>
                                                                            <td>204 of 10/22</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>24</td>
                                                                            <td></td>
                                                                            <td>MTS Sh Jai Bhagwan</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>585 of 06/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>25</td>
                                                                            <td></td>
                                                                            <td>CMD Pradeep Chhikara</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>585 of 06/22</td>
                                                                        </tr>
    
    
    
    
                                                                        <tr>
                                                                            <td>26</td>
                                                                            <td></td>
                                                                            <td>CMD Pradeep Chhikara</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>558 of 06/22</td>
                                                                        </tr>
    
    
    
    
    
                                                                        <tr>
                                                                            <td>27</td>
                                                                            <td></td>
                                                                            <td>Cook Sh SS Gussain</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>585 of 06/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>28</td>
                                                                            <td></td>
                                                                            <td>Refg Sh Surinder Singh</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>585 of 06/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>29</td>
                                                                            <td>21101/Civ / IP / 34/ 13 Jul 22</td>
                                                                            <td>VM ( MCM) Sh Rajinder kumar</td>
                                                                            <td>RLKC Hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>525414</td>
                                                                            <td>Jul-22</td>
                                                                            <td>585 of 06/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td></td>
                                                                            <td>LHNT Gaya Prasad</td>
                                                                            <td>Pawan Gandh</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>31</td>
                                                                            <td></td>
                                                                            <td>CMD Pradeep Chhikara</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>32</td>
                                                                            <td></td>
                                                                            <td>Cook SS Gussain</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>33</td>
                                                                            <td>21254/Civ/NIP/SKS dt 07 Jul-22</td>
                                                                            <td>LDC Sh SK Sharma</td>
                                                                            <td>self</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td></td>
                                                                            <td> Ex Facto</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>34</td>
                                                                            <td>21254/Civ/NIP/SKS dt 07 Jul-22</td>
                                                                            <td>LH(NT) Sh Chanderbhan</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Oct-22</td>
                                                                            <td>174 of 10/22</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>.</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>35</td>
                                                                            <td>21254/Civ/NIP/SKS dt 07 Jul-22</td>
                                                                            <td>LH(NT) Sh Gaya Prasad</td>
                                                                            <td>Pawan Gandh</td>
                                                                            <td>IPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>36</td>
                                                                            <td></td>
                                                                            <td>CMD Sh Pradeep Chhikara</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>37</td>
                                                                            <td></td>
                                                                            <td>TCS Sh Gauttam kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>38</td>
                                                                            <td></td>
                                                                            <td>TCS Sh Gauttam kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>39</td>
                                                                            <td></td>
                                                                            <td>VM MCM Gauttam kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>40</td>
                                                                            <td></td>
                                                                            <td>VM MCM Sh Gyan Kumar </td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>41</td>
                                                                            <td></td>
                                                                            <td>MTS Smt Vimal</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>42</td>
                                                                            <td></td>
                                                                            <td>VM Sanjeen Kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>43</td>
                                                                            <td></td>
                                                                            <td>MTS Anil Kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>44</td>
                                                                            <td></td>
                                                                            <td>VM MCM Sh Gyan Chand</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>45</td>
                                                                            <td></td>
                                                                            <td>MTS Anil Kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>46</td>
                                                                            <td></td>
                                                                            <td>MTS Naresh Kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>47</td>
                                                                            <td></td>
                                                                            <td>VM Mohan Singh</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td>2415114</td>
                                                                            <td>Aug-22</td>
                                                                            <td> 463 of 07/22</td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>.</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>48</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>VM SS Yadav</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>49</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>VM(MCM) Gyan Chand</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>620501</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>50</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>MTS Anil Kumar</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>51</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>VM SS Yadav</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td>45847</td>
                                                                            <td>Oc-22t</td>
                                                                            <td>205 of 10/22</td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>52</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>CMD Sh Pradeep Chhikara</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>53</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>Elect Sh Sajesh Kumar</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>54</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>Elect Sh Rajesh Kumar</td>
                                                                            <td>Ansari Hosp</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>55</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>56</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>57</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>58</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>MTS Smt Uma Devi</td>
                                                                            <td>self</td>
                                                                            <td>OPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>59</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>MTS Sh Chanderbhan</td>
                                                                            <td>self</td>
                                                                            <td>IPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>60</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>T/Mate Sh Sombir</td>
                                                                            <td>self</td>
                                                                            <td>IPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
    
                                                                        <tr>
                                                                            <td>61</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>T/Mate Sh Sombir</td>
                                                                            <td>self</td>
                                                                            <td>IPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>62</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>MTS Jai Bhagwan</td>
                                                                            <td>MDS host</td>
                                                                            <td>IPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>63</td>
                                                                            <td>42165541/Civ/NIP/GP dt 14 Sep 22</td>
                                                                            <td>LDC SK Sharma</td>
                                                                            <td>self</td>
                                                                            <td>IPD</td>
                                                                            <td>621</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
    
                                                                        <tr>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
    
                                                                        <tr>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>2545441</td>
                                                                            <td>4528854</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                                
                                                                


                                                               
                                                                <!--end*********************************************4-->


                                                            </div>
                                                        </div>
                                                        <div class="pagebreak"> </div>
                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8 px-2 " id="">


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
