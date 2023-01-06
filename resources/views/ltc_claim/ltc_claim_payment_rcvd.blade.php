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
                                    <div class="col-md-8 px-5 " id="DivIdToPrint">

                                        
                                        
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
                                                <h6 style="border:1px solid black">Cheque may please be issued in favour of SBI, RRRC, Delhi Cantt for crediting the same in
                                                    Public Fund Account No<u> 4697108726 4 </u>of this<br> unit.</h6>
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
