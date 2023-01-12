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
                            Employee Pay Roll
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col text-left">
                    <a href="javascript:void(0)" id="generateEmpSalary" class="btn btn-info">Generate Salary</a>
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
                                    <a class="nav-link active" data-toggle="tab" href="#empl_list" role="tab">Employee List</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#emp_pay_roll" role="tab">Monthly</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#emp_pay_roll_days" role="tab">Daywise</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#comm_pay_roll_nps" role="tab">Commulative NPS</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#comm_pay_roll" role="tab">Commulative</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#arrear_da" role="tab">Arrear DA</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#arrear_da_nps" role="tab">Arrear DA(NPS) </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#bill_pay" role="tab">Bill Pay </a>
                                </li>


                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="empl_list" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Employee Name</th>
                                                    <th class="text-center">Employee Id</th>
                                                    <th class="text-center">Basic Pay</th>
                                                    <th class="text-center">DA</th>
                                                    <th class="text-center">HRA</th>
                                                    <th class="text-center">TPT</th>
                                                    <th class="text-center">Pers Pay</th>
                                                    <th class="text-center">WA</th>
                                                    <th class="text-center">MISC</th>
                                                    {{-- <th class="text-center">Total</th> --}}
                                                </thead>

                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($employee as $emp)
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td><a href="javascript:void(0)" class="text-primary">{{$emp->name}}</a></td>
                                                            <td><a href="javascript:void(0)" class="text-primary">{{$emp->emp_id}}</a></td>
                                                            <td>{{ $emp->basic_pay}}</td>
                                                            <td>{{$emp->ta_da}}</td>
                                                            <td>{{$emp->hra}}</td>
                                                            <td>{{$emp->tpt}}</td>
                                                            <td>{{ $emp->pers_pay}}</td>
                                                            <td>{{ $emp->govt_perks}}</td>
                                                            <td></td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach

                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="emp_pay_roll" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('empMonthlyePaySlip')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row mt-3" id="empMonthlyePaySlip">
                                                <style type="text/css" media="print">
                                                    /* body{margin: 10px 30px 10px 30px;padding:20px 20px 10px 20px;}    */
                                                    @page { size: landscape; }
                                                    
                                                  </style>
                                                <div class="col">
                                                    <div class="row" >
                                                        
                                                        <div class="col-md-12" id="">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h5 style="text-align: center;"><u>STATION WORKSHOP EME, DELHI CANTT -10</u></h4>
                                                                    <h6><u>Pay Roll Of CIVILIANS (INDUSTRIAL) PERS</u></h6>
                                                                    <h6 style="text-align: end;">For the month : <u>{{date('M Y')}}</u><br>
                                                                        No of working days <u>: 24 ({{date('M Y',strtotime("-1 months"))}})</u></h6>
                                                                        
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <table class="text-center w-100" border="1" style="font-size:11px">
                                                                        <tr>
                                                                            <th colspan="5"></th>
                                                                            {{-- <th colspan="3"></th> --}}
                                                                            <th colspan="10">Entitlements</th>
                                                                            <th colspan="10">Deductions</th>
                                                                        </tr>
                                                        
                                                                        <tr>
                                                                            <td rowspan="3">S No.</td>
                                                        
                                                                            <td colspan="5">No.Trade. Name</td>
                                                                            <th rowspan="3" >BP<br> Level</th>
                                                                            <th rowspan="3" >DA <br>34%</th>
                                                                            <th rowspan="3" >HRA <br> 27%</th>
                                                                            <th rowspan="3" >TPT</th>
                                                                            <th rowspan="3" >Pers <br> Pay</th>
                                                                            <th rowspan="3" >WA</th>
                                                                            <th rowspan="3" >Misc</th>
                                                                            <th rowspan="3" >Total Pay</th>
                                                                            <th rowspan="3" >EOL(H)</th>
                                                                            <th rowspan="3" >GPF</th>
                                                                            <th rowspan="3" >GPF<br>Ref</th>
                                                                            <th rowspan="3" >CGEIS</th>
                                                                            <th rowspan="3" >CGHS</th>
                                                                            <th rowspan="3" >F Adv</th>
                                                                            <th rowspan="3" >Rent <br> Rec</th>
                                                                            <th rowspan="3" >Misc<br>Ded</th>
                                                                            <th rowspan="3" >Tax<br> Ded</th>
                                                                            <th rowspan="3" >Total<br>Ded</th>
                                                                            <th rowspan="3" >Net Pay</th>
                                                                        </tr>
                                                        
                                                                        <tr>
                                                        
                                                                            <td>DOB</td>
                                                                            <td>GPF A/C</td>    
                                                                            <td>EOL(D)</td>
                                                                            <td>EOL(H)</td>
                                                                        </tr>
                                                        
                                                                        <tr>
                                                                            <td>DOA</td>
                                                                            <td>PAN NO</td>
                                                                            <td colspan="2">AADHAR NO</td>
                                                                        </tr>
                                                        
                                                                        <tr>
                                                                            <td> </td>
                                                                        </tr>
                                                        
                                                        
                                                        
                                                        
                                                        @php
                                                            $p=1;
                                                        @endphp
                                                                        @foreach ($employee as $empSal)
                                                                            <tr>
                                                                                <td rowspan="3">{{$p}}.</td>
                                                            
                                                                                <td colspan="5">T. No-{{$empSal->t_no}} VM (MCM) Sh {{$empSal->name}} (DOR {{date('d/m/Y',strtotime($empSal->do_retirement))}})</td>
                                                                                <th rowspan="2" >{{$empSal->basic_pay}}</th>
                                                                                <th rowspan="2" >{{$empSal->ta_da}}</th>
                                                                                <th rowspan="2" >{{$empSal->hra}} </th>
                                                                                <th rowspan="2" >{{$empSal->tpt}}</th>
                                                                                <th rowspan="2" >{{$empSal->pers_pay}}</th>
                                                                                <th rowspan="2" >{{$empSal->govt_perks}}</th>
                                                                                <th rowspan="2" >120</th>
                                                                                <th rowspan="2" >
                                                                                    {{$empSal->basic_pay + $empSal->ta_da + $empSal->hra + $empSal->tpt + $empSal->pers_pay}}
                                                                                </th>
                                                                                <th rowspan="2" >2578</th>
                                                                                <th rowspan="2" >25489</th>
                                                                                <th rowspan="2" >251875</th>
                                                                                <th rowspan="2" >24589</th>
                                                                                <th rowspan="2" >225561</th>
                                                                                <th rowspan="2" >25451</th>
                                                                                <th rowspan="2" >254586</th>
                                                                                <th rowspan="2" >588</th>
                                                                                <th rowspan="2" >326478</th>
                                                                                <th rowspan="2" >254689</th>
                                                                                <th rowspan="2" >24561</th>
                                                                            </tr>
                                                                            <tr>
                                                        
                                                                                <td>{{date('d/m/Y',strtotime($empSal->dob))}}</td>
                                                                                <td>{{$empSal->gpf_no}}</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                            </tr>
                                                            
                                                                            <tr>
                                                                                <td>{{date('d/m/Y',strtotime($empSal->doa))}}</td>
                                                                                <td>{{$empSal->pan_no}}</td>
                                                                                <td colspan="2">{{$empSal->aadhar_no}}</td>
                                                                                <th colspan="22">Remarks: IT @ 5200/- (1)</th>
                                                                            </tr>
                                                                            @php
                                                                                $p++
                                                                            @endphp
                                                                        @endforeach
                                                        
                                                        
                                                                       
                                                        
                                                                        
                                                                        <tr>
                                                                            <td colspan="25"> Page Total 1</td>
                                                                        </tr>
                                                        
                                                        
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="pagebreak"> </div>
                                                    
                                                </div>



                                                
                                                
                                                
                                                
                                                


                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane "  id="emp_pay_roll_days" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('dayWisePayRole')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row" id="dayWisePayRole">
                                                <style type="text/css" media="print">
                                                    body{margin: 10px 30px 10px 30px;padding:10px 20px 50px 10px;}   
                                                    @page { size: landscape; }
                                                    
                                                  </style>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h3 style="text-align: center;" class="mt-5"><u>STATION WORKSHOP EME, DELHI CANTT - 10 </u></h3>

                                                            <h6> OF INDUSTRIAL CIVILIANS FOR THE MONTH OF SEP 2022</h6>


                                                            <p style="text-align: end;">WD AUG 2022 = 23<br>SEP 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <table class="w-100" border="1" style="font-size: 12px">
                                                                
        
                                                                <tr>
                                                                    <th>Trade & Name</th>
                                                                    <th>1</th>
                                                                    <th>2</th>
                                                                    <th>3</th>
                                                                    <th>4</th>
                                                                    <th>5</th>
                                                                    <th>6</th>
                                                                    <th>7</th>
                                                                    <th>8</th>
                                                                    <th>9</th>
                                                                    <th>10</th>
                                                                    <th>11</th>
                                                                    <th>12</th>
                                                                    <th>13</th>
                                                                    <th>14</th>
                                                                    <th>15</th>
                                                                    <th>16</th>
                                                                    <th>17</th>
                                                                    <th>18</th>
                                                                    <th>19</th>
                                                                    <th>20</th>
                                                                    <th>21</th>
                                                                    <th>22</th>
                                                                    <th>23</th>
                                                                    <th>24</th>
                                                                    <th>25</th>
                                                                    <th>26</th>
                                                                    <th>27</th>
                                                                    <th>28</th>
                                                                    <th>29</th>
                                                                    <th>30</th>
                                                                    <th>DO II No.</th>
                                                                </tr>
            
            
                                                                @php
                                                                     $d=1;
                                                                 @endphp
                                                                    @foreach ($employee as $empSal)
                                                                        <tr>
                                                                            <td>(MCM){{$empSal->name}}</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>-do- 1254255254</td>
                                                                        </tr>
                                                                    @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="comm_pay_roll" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('commWisePayRole')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row" id="commWisePayRole">
                                                <style type="text/css" media="print">
                                                    body{margin: 10px 30px 10px 30px;padding:10px 20px 50px 10px;}   
                                                    @page { size: landscape; }
                                                    
                                                  </style>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4 style="text-align: center;" class="mt-5"><u>STATION WORKSHOP EME, DELHI CANTT - 10</u></h4>

                                                            <h6 style="text-align: center;"><u>SUMMARY OF PAY ROLL CIVILIANS (INDUSTRIAL PERS)</u></h6>

                                                            <P style="text-align: end;"> For the month: <u>Sep 2022</u></P>

                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <table class="w-100" border="1" style="font-size:11px">
                                                                <tr>
                                                                    <th>No of Page </th>
                                                                    <th>Basic Pay</th>
                                                                    <th>DA</th>
                                                                    <th>HRA</th>
                                                                    <th>TPT</th>
                                                                    <th>Pers</th>
                                                                    <th>WA</th>
                                                                    <th>Misc</th>
                                                                    <th>Total Pay</th>
                                                                    <th>EOL</th>
                                                                    <th>EOL</th>
                                                                    <th>GPF</th>
                                                                    <th>CGEIS</th>
                                                                    <th>CGHS</th>
                                                                    <th>F Adv</th>
                                                                    <th>Rent </th>
                                                                    <th>Misc</th>
                                                                    <th>Tax</th>
                                                                    <th>Total</th>
                                                                    <th>Net Pay</th>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Pay</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Ref</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Rec</td>
                                                                    <td>Ded</td>
                                                                    <td>Ded</td>
                                                                    <td>Ded</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>


                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>1250145</td>
                                                                    <td>895746</td>
                                                                    <td>124582</td>
                                                                    <td>24569</td>
                                                                    <td>25987</td>
                                                                    <td>2548</td>
                                                                    <td>2548</td>
                                                                    <td>5897746</td>
                                                                    <td>2315046</td>
                                                                    <td>529874</td>
                                                                    <td>54896</td>
                                                                    <td>214587</td>
                                                                    <td>89574</td>
                                                                    <td>58974</td>
                                                                    <td>4875</td>
                                                                    <td>78456</td>
                                                                    <td>25461</td>
                                                                    <td>58749</td>
                                                                </tr>


                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>1250145</td>
                                                                    <td>895746</td>
                                                                    <td>124582</td>
                                                                    <td>24569</td>
                                                                    <td>25987</td>
                                                                    <td>2548</td>
                                                                    <td>2548</td>
                                                                    <td>5897746</td>
                                                                    <td>2315046</td>
                                                                    <td>529874</td>
                                                                    <td>54896</td>
                                                                    <td>214587</td>
                                                                    <td>89574</td>
                                                                    <td>58974</td>
                                                                    <td>4875</td>
                                                                    <td>78456</td>
                                                                    <td>25461</td>
                                                                    <td>874956</td>
                                                                    <td>58479</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>1250145</td>
                                                                    <td>895746</td>
                                                                    <td>124582</td>
                                                                    <td>24569</td>
                                                                    <td>25987</td>
                                                                    <td>2548</td>
                                                                    <td>2548</td>
                                                                    <td>5897746</td>
                                                                    <td>2315046</td>
                                                                    <td>529874</td>
                                                                    <td>54896</td>
                                                                    <td>214587</td>
                                                                    <td>89574</td>
                                                                    <td>58974</td>
                                                                    <td>4875</td>
                                                                    <td>78456</td>
                                                                    <td>25461</td>
                                                                    <td>58794</td>
                                                                    <td>859746</td>
                                                                </tr>


                                                                <tr>
                                                                    <td>Grand Total</td>
                                                                    <td>1250145</td>
                                                                    <td>895746</td>
                                                                    <td>124582</td>
                                                                    <td>24569</td>
                                                                    <td>25987</td>
                                                                    <td>2548</td>
                                                                    <td>2548</td>
                                                                    <td>5897746</td>
                                                                    <td>2315046</td>
                                                                    <td>529874</td>
                                                                    <td>54896</td>
                                                                    <td>214587</td>
                                                                    <td>89574</td>
                                                                    <td>58974</td>
                                                                    <td>4875</td>
                                                                    <td>78456</td>
                                                                    <td>25461</td>
                                                                    <td>5482</td>
                                                                    <td>2549</td>
                                                                </tr>

                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3" style="font-size:11px">
                                                        <div class="col text-left">
                                                            Tele : 36584/25694712<br>
                                                            50601/Civ/PR/IP<br>
                                                            LAO<br>505 Army Base Wksp<br>Delhi Cantt-10
                                                        </div>
                                                        <div class="col text-right">
                                                            Station Wksp EME<br> Delhi Cantt-10<br>Oct 2022
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="comm_pay_roll_nps" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('commWisePayRoleNps')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row" id="commWisePayRoleNps">
                                                <style type="text/css" media="print">
                                                    body{margin: 10px 30px 10px 30px;padding:10px 20px 50px 10px;}   
                                                    @page { size: landscape; }
                                                    
                                                  </style>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 style="text-align: center;" class="mt-2"><u>STATION WORKSHOP EME, DELHI CANTT - 10</u></h5>

                                                            <h6><u>SUMMARY OF PAY ROLL CIVILIANS(INDUSTRIAL RERS - NPS)</u></h6>

                                                            <p style="text-align: end;"> For the month <u>Sep 2022</u></p>
                                                        </div>   
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="w-100" border="1" style="font-size:11px">


                                                                <tr>
                                                                    <th>Page No.</th>
                                                                    <th>BP</th>
                                                                    <th>DA</th>
                                                                    <th>HRA</th>
                                                                    <th>TPT</th>
                                                                    <th>Pres pay</th>
                                                                    <th>Govt Contri</th>
                                                                    <th>WA</th>
                                                                    <th>Misc</th>
                                                                    <th>Total Pay</th>
                                                                    <th> EOL(D)</th>
                                                                    <th>EOL(H)</th>
                                                                    <th>GMC Contri NPS</th>
                                                                    <th>Indl Con<br>Tier(NPS)</th>
                                                                    <th>CGEIS </th>
                                                                    <th>CGHS</th>
                                                                    <th>Rent Rec</th>
                                                                    <th>Misc Ded</th>
                                                                    <th>Tax Ded</th>
                                                                    <th>Total ded</th>
                                                                    <th>Net Pay</th>
    
    
                                                                </tr>
    
                                                                @php
                                                                     $d=1;
                                                                 @endphp
                                                                    @foreach ($employee as $empSal)
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>258484</td>
                                                                            <td>2154544</td>
                                                                            <td>54844</td>
                                                                            <td>1154</td>
                                                                            <td>54845</td>
                                                                            <td>5448</td>
                                                                            <td>1515484</td>
                                                                            <td>5455</td>
                                                                            <td>4844</td>
                                                                            <td>54848</td>
                                                                            <td>548448</td>
                                                                            <td>48851</td>
                                                                            <td>54884</td>
                                                                            <td>154848 </td>
                                                                            <td>5184851</td>
                                                                            <td>158484</td>
                                                                            <td>51848</td>
                                                                            <td>15484</td>
                                                                            <td>51488</td>
                                                                            <td>62544</td>
            
            
                                                                        </tr>
                                                                    @endforeach

                                                                <tr>
                                                                    <td>Grand Total Rs.</td>
                                                                    <td>254848</td>
                                                                    <td>26565</td>
                                                                    <td>1649595</td>
                                                                    <td>2655655</td>
                                                                    <td>1215</td>
                                                                    <td>0</td>
                                                                    <td>1545</td>
                                                                    <td>21</td>
                                                                    <td>50</td>
                                                                    <td>211</td>
                                                                    <td>15</td>
                                                                    <td>15</td>
                                                                    <td>54</td>
                                                                    <td>444</td>
                                                                    <td>5484</td>
                                                                    <td colspan="5"></td>
                                                                </tr>
    
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="arrear_da" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('arrear_da_div')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row" id="arrear_da_div">
                                                <style type="text/css" media="print">
                                                    /* body{margin: 10px 30px 10px 30px;padding:10px 20px 50px 10px;}    */
                                                    @page { size: landscape; }
                                                    
                                                  </style>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h4 style="text-align: center;" class="mt-5">STATION WORKSHOP EME, DELHI CANTT-110010 </h4>
                                                            <h6>SY CHECK ROLL NO 50601/CIV/IP DT <span class="mx-5">OCT 2022 ARREAR OF FOR THE RERIOD OF JUL 2022 TOP SEP
                                                                    2022</span></h6>
                                                            <P>Declared increase in DA=</P>

                                                        </div>   
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="w-100" border="1">
                                                                <tr>
                                                                    <th>Ser.</th>
                                                                    <th>T.NO. TRADE NAME</th>
                                                                    <th>Month</th>
                                                                    <th>Basic pay</th>
                                                                    <th>Month Days</th>
                                                                    <th>Arr of DA 4%</th>
                                                                    <th>TA</th>
                                                                    <th>Arr of TA 4%</th>
                                                                    <th></th>
                                                                    <th>Total (f+h)</th>
                                                                    <th>EOL Days</th>
                                                                    <th>EOL Rec</th>
                                                                    <th>Total Rec</th>
                                                                    <th>Net Amt Payable</th>
                                                                    <th>Sig4744</th>
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td>(a)</td>
                                                                    <td>(b)</td>
                                                                    <td>(c)</td>
                                                                    <td>(d)</td>
                                                                    <td>(e)</td>
                                                                    <td>(f)</td>
                                                                    <td>(g)</td>
                                                                    <td>(h)</td>
                                                                    <td>()</td>
                                                                    <td>(j)</td>
                                                                    <td>(k)</td>
                                                                    <td>(i)</td>
                                                                    <td>(m)</td>
                                                                    <td>(n)</td>
                                                                    <td></td>
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td rowspan="3">1.</td>
                                                                    <td rowspan="3">T.No 34 VM MV (MCM) Sh Rajinder kumar</td>
                                                                    <td>Jul</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                    
                                                    
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td>Jul</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td></td>
                                                    
                                                    
                                                                </tr>
                                                    
                                                    
                                                                <tr>
                                                                    <td>Jul</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td></td>
                                                    
                                                    
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>0</td>
                                                                </tr>
                                                    
                                                    
                                                    
                                                                <tr>
                                                                    <td rowspan="3">1.</td>
                                                                    <td rowspan="3">T.No 34 VM MV (MCM) Sh Rajinder kumar</td>
                                                                    <td>Jul</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                    
                                                    
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td>Jul</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td></td>
                                                    
                                                    
                                                                </tr>
                                                    
                                                    
                                                                <tr>
                                                                    <td>Jul</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td>20120</td>
                                                                    <td>2541</td>
                                                                    <td></td>
                                                    
                                                    
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>0</td>
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td></td>
                                                                    <td><b> Total</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>2548</td>
                                                                    <td></td>
                                                                    <td>1524</td>
                                                                    <td></td>
                                                                    <td>2456</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>5684</td>
                                                                    <td></td>
                                                                </tr>
                                                    
                                                    
                                                    
                                                            </table>
                                                            <h6 style="text-align: center;" class="mt-5">SUMMARY FROM PAGE NO 1 TO 5</h6>


                                                            <table class="w-100" border="1" style="font-size:11px">
                                                                <tr>
                                                                    <th>Page No </th>
                                                                    <th>DA 4%</th>
                                                                    <th></th>
                                                                    <th>TA 4%</th>
                                                                    <th></th>
                                                                    <th>Total(DA+TA)</th>
                                                                    <th>EOL REC</th>
                                                                    <th>Net Amt</th>
                                                                </tr>

                                                                <tr>
                                                                    <td>Total PAGE-1<br>Total PAGE-1<br>Total PAGE-1<br>Total PAGE-1<br>Total PAGE-1<br>Total PAGE-1</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                    <td>24512<br>24512<br>24512<br>24512<br>24512<br>24512<br>24512</td>
                                                                </tr>


                                                                <tr>
                                                                    <th>GRAND TOTAL RS</th>
                                                                    <th>124589</th>
                                                                    <th></th>
                                                                    <th>10458</th>
                                                                    <th></th>
                                                                    <th>02582</th>
                                                                    <th>0</th>
                                                                    <th>1245877</th>
                                                                </tr>

                                                            </table>
                                                            <p style="text-align: center;"> (Rupees one lakh forty Thousand one Hundred seventy Six Only)</p>

                                                            <p style="text-align: end;">Asst Exce<br>Civ Est Office<br>Stn Wksp EME Delhi Cantt-10</p>


                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="arrear_da_nps" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('arrea_da_nps_div')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row" id="arrea_da_nps_div">
                                                <style type="text/css" media="print">
                                                    body{margin: 10px 30px 10px 30px;padding:10px 20px 50px 10px;}   
                                                    @page { size: landscape; }
                                                    
                                                  </style>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            

                                                            <h5 style="text-align: center;"><u>STATION WORKSHOP EME, DELHI CANTT - 110010</u></h5>
                                                            <H6 style="text-align: center;"><u>SY CHECK ROLL NO 50601/CIV/NPS/ DT OCT 2022: ARREAR OF DA FOR THE PERIOD JUL
                                                                    2022 TO SEP 2022</u></H6>
                                                        </div>   
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-md-12">
                                                            <table class="w-100" border="1" style="font-size: 11px">
                                                                <tr>
                                                                    <th>Ser</th>
                                                                    <th>T.No Trade & Name</th>
                                                                    <th>Month</th>
                                                                    <th>Basic Pay </th>
                                                                    <th>Month Days</th>
                                                                    <th>DA</th>
                                                                    <th>TA</th>
                                                                    <th>Arr of TA</th>
                                                                    <th>Arr of HRA</th>
                                                                    <th>Total (F+H+L)</th>
                                                                    <th>EOL Days</th>
                                                                    <th>EOL Rec</th>
                                                                    <th>Total (-i)</th>
                                                                    <th>GHC 14 % of DA</th>
                                                                    <th>Total Arrear Of DA</th>
                                                                    <th>GMC Rec</th>
                                                                    <th>CPS Rec</th>
                                                                    <th>Total Rec</th>
                                                                    <th>Amt payable(O-r)</th>
                                                                    <th>Signatu</th>
                                                                </tr>
                                                    
                                                    
                                                                <tr>
                                                                    <td>(a)</td>
                                                                    <td>(b)</td>
                                                                    <td>(c)</td>
                                                                    <td>(d)</td>
                                                                    <td>(e)</td>
                                                                    <td>(f)</td>
                                                                    <td>(g)</td>
                                                                    <td>(h)</td>
                                                                    <td>(i)</td>
                                                                    <td>(j)</td>
                                                                    <td>(k)</td>
                                                                    <td>(l)</td>
                                                                    <td>(m)</td>
                                                                    <td>(n)</td>
                                                                    <td>(o)</td>
                                                                    <td>(p)</td>
                                                                    <td>(q)</td>
                                                                    <td>(r)</td>
                                                                    <td>(s)</td>
                                                                    <td>(t)</td>
                                                    
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td>1.</td>
                                                                    <td>T.No 402 TCM Sh Dayal Singh</td>
                                                                    <td>Jul<br>Aug<br>Sep</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>24589</td>
                                                                    <td>48795</td>
                                                                    <td>7854</td>
                                                                    <td>9857</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                                <tr>
                                                                    <td>2.</td>
                                                                    <td>T.No 402 TCM Sh Dayal Singh</td>
                                                                    <td>Jul<br>Aug<br>Sep</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>54854<br>89455<br>24587</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
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
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>24589</td>
                                                                    <td>48795</td>
                                                                    <td>7854</td>
                                                                    <td>9857</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                    
                                                    
                                                    
                                                    
                                                                <tr>
                                                                    <td></td>
                                                                    <td><b>TOTAL RS</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>489</td>
                                                                    <td>4789</td>
                                                                    <td>24589</td>
                                                                    <td>48795</td>
                                                                    <td>7854</td>
                                                                    <td>9857</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>7895</td>
                                                                    <td>487</td>
                                                                    <td>558745</td>
                                                                    <td>4579</td>
                                                                    <td></td>
                                                                </tr>
                                                    
                                                    
                                                    
                                                    
                                                            </table>
                                                    
                                                    
                                                            <table class="mt-1 w-100" border="1" style="font-size: 11px">
                                                                <tr>
                                                                    <th>PAGE NO</th>
                                                                    <th>TOTAL INCL GMC</th>
                                                                    <th colspan="3">NPS</th>
                                                                    <th>TOTAL</th>
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td>PAGE 1<br>PAGE 2 <br> PAGE 3<br>PAGE 4 <br> PAGE 5<br>PAGE 6</td>
                                                                    <td>245844<br>54869<br>15897<br>24589<br>56987<br>589746<br>5428</td>
                                                                    <td>00000</td>
                                                                    <td>25489<br>58744<br>568974<br>897456<br>897456<br>58976<br>457896</td>
                                                                    <td>00000</td>
                                                                    <td>589745<br>45896<br>578946<br>589466<br>45894<br>58496</td>
                                                                </tr>
                                                    
                                                                <tr>
                                                                    <td><b>TOTAL RS</b></td>
                                                                    <td>2548975</td>
                                                                    <td colspan="3">3598745</td>
                                                                    <td>57894855</td>
                                                                </tr>
                                                            </table>
                                                    
                                                            <h6 style="text-align: center;">(Rupees one Lakh forty one Thousand Two Hundred Eighty one only)</h6>
                                                    
                                                    
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="bill_pay" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col tex-right">
                                                    <a href="javascript:printPdf('pay_bill_div')" class="text-primary"><i
                                                            class="fa fa-print" aria-hidden="true"></i> Print</a>
                                                </div>
                                            </div>
                                            <div class="row" id="pay_bill_div">
                                                <style type="text/css" media="print">
                                                    body{margin: 10px 30px 10px 30px;padding:10px 20px 50px 10px;}   
                                                    @page { size: landscape; }
                                                    
                                                  </style>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            

                                                            <h5 style="text-align: center;" class="mt-5"><u>STATION WORKSHOP EME, DELHI CANTT-110010</u></h5>
                                                            <h6 style="text-align: center;"><u>CHECK ROLL (PAY BILL) IN R/O APPRENTICESHIP CANDIDATE THE MONTH OF OCT
                                                                    2022</u></h6>
                                                        </div>   
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-md-12">
                                                            
                                                                <table class="w-100" border="1" style="font-size: 11px">


                                                                    <tr>
                                                                        <th>Ser No.</th>
                                                                        <th>Reg No.</th>
                                                                        <th>Name</th>
                                                                        <th>Father's Name</th>
                                                                        <th>DOB</th>
                                                                        <th>Trade</th>
                                                                        <th>DOA</th>
                                                                        <th>P Days</th>
                                                                        <th>Days in Month</th>
                                                                        <th>Stipend in Rs</th>
                                                                        <th>Net Payab</th>
                                                                        <th>Remarks</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>A0921480337</td>
                                                                        <td>mohan.vishwkarma</td>
                                                                        <td>RAJENDER.PARSAD.VISHWKARMA</td>
                                                                        <td>25.07.2003</td>
                                                                        <td>Mechanic.Auto.Body.Painting</td>
                                                                        <td>09.May.22</td>
                                                                        <td>24</td>
                                                                        <td>31</td>
                                                                        <td>1200</td>
                                                                        <td>1200</td>
                                                                        <td></td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>A0921480337</td>
                                                                        <td>mohan.vishwkarma</td>
                                                                        <td>RAJENDER.PARSAD.VISHWKARMA</td>
                                                                        <td>25.07.2003</td>
                                                                        <td>Mechanic.Auto.Body.Painting</td>
                                                                        <td>09.May.22</td>
                                                                        <td>24</td>
                                                                        <td>31</td>
                                                                        <td>1200</td>
                                                                        <td>1200</td>
                                                                        <td></td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>A0921480337</td>
                                                                        <td>mohan.vishwkarma</td>
                                                                        <td>RAJENDER.PARSAD.VISHWKARMA</td>
                                                                        <td>25.07.2003</td>
                                                                        <td>Mechanic.Auto.Body.Painting</td>
                                                                        <td>09.May.22</td>
                                                                        <td>24</td>
                                                                        <td>31</td>
                                                                        <td>1200</td>
                                                                        <td>1200</td>
                                                                        <td></td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>A0921480337</td>
                                                                        <td>mohan.vishwkarma</td>
                                                                        <td>RAJENDER.PARSAD.VISHWKARMA</td>
                                                                        <td>25.07.2003</td>
                                                                        <td>Mechanic.Auto.Body.Painting</td>
                                                                        <td>09.May.22</td>
                                                                        <td>24</td>
                                                                        <td>31</td>
                                                                        <td>1200</td>
                                                                        <td>1200</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="5"></td>
                                                                        <td colspan="5">Total Rs</td>
                                                                        <td>98574</td>
                                                                        <td></td>
                                                                    </tr>

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
                </div>
            </div>


        </div>
    </div>
@endsection
