@extends('employee.layouts.main')
@section('main')
    <style>

    </style>
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont mt-2">
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            Employee LTC Deatils - <span class="font-weight-bold text-primary" style="font-size:15px"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            {{-- Start  --}}

                            <div class="container-fluid px-5">
                                <div class="row">
                                            <div class="col tex-right">
                                                <a href="javascript:printDiv()" class="text-primary"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
                                            </div>
                                        </div>
                                <div class="row">
                                   
                                    <div class="col-md-12 px-2 d-none " id="DivIdToPrint">









                                        <div class="row mt-5">
                                            <div class="col text-center">
                                                <h4><b><u>LTC CLAIM FOR THE BLOCK YEAR 2018-2021</u></b></h4>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <h4><b><u>FOR ALL INDIA JOURNEY</u></b></h4>
                                            </div>
                                        </div>



                                        <div class="row mt-2">
                                            <div class="col text-center">
                                                <h4><b><u>with carry forwarded in yrs 2022</u></b></h4>
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
                                                    <div class="col">_______________________</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">T.No & Dsgn:</div>
                                                    <div class="col">_______________________</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Unit:</div>
                                                    <div class="col">_______________________</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Basic Pay:</div>
                                                    <div class="col">_______________________</div>
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
                                                    <div class="col">_______________________</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Auth : Dopt II No:</div>
                                                    <div class="col">_______________________</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Declared Lve Station:</div>
                                                    <div class="col">_______________________</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="col">All Indian Journey:</div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Claimed preffered on:</div>
                                                    <div class="col">_______________________</div>
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
                                                <h6>Total amount claimed : Rs. 4160.00</h6>
                                                <h6> (- Advance drawn : Nil</h6>
                                                <h6>Balance Recovery/Due : Rs. 4160.00</h6>



                                            </div>
                                            <div class="col">
                                                <h6>Name . sh Raj Kumar</h6>
                                                <h6>T. No. 469, T/Mate</h6>

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


            <!-- row -->


        </div>
    </div>
@endsection
