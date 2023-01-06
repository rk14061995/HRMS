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

                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col tex-right">
                                        <a href="javascript:printDiv()" class="text-primary"><i class="fa fa-print"
                                                aria-hidden="true"></i> Print</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 px-5" id="DivIdToPrint">

                                        
                                        
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
                                                        <tr>
                                                            <td>(a)</td>
                                                            <td>Smt Binesh Devi</td>
                                                            <td>Wife</td>
                                        
                                                            <td>54 yrs</td>
                                                        </tr>
                                                    </tbody>
                                                
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <p class="mt-5">2. It is also certified that they are living with me at my duty station and their income from
                                                    all sources is not more than 9000/- pm.</p>

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col text-left">
                                                <h6>Dated : Sep 2022</h6>
                                            </div>
                                            <div class="col text-right">
                                                <h6>(Raj Kumar) </h6>
                                                        <h6>T.No 459 T/Mate</h6>
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
