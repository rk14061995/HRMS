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
                                    <div class="col-md-8  px-5" id="DivIdToPrint">

                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                <h5>Telephone:36584</h5>
                                                <h5>50601/Civ/LTC/RK</h5>
                                                <h5>Area Accounts Office(Pay)</h5>
                                                <h5>Delhi Cantt-110010</h5>
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <h5><b><u>Unit Code:3573</u></b></h5>
                                                <h5>Station Workshop EME</h5>
                                                <h5>Delhi Cantt-110010</h5>
                                                <h5>Sep2022</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col text-center">
                                                <h4><b><u>LTC CLAM(FINAL):T.NO.459 T/MATE SHRAJ KUMAR</u></b></h4>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col">
                                                <h4><b><u>(PRAN NO 110020727833)</u></b></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p><span>1.</span> claim for the block year 2018-21 for All India Journey
                                                    with carry
                                                    forwarded in the year 2022
                                                    for Rs 4160/- (Rupees four thousand one hundred sixty only) in respect
                                                    of above
                                                    mentioned indl is 2f
                                                    submitted herewith alongwith following documents for your audit and
                                                    early
                                                    payment please :-
                                                </p>


                                                <p class="m-0"> <span>(a.)</span> Annexure A</p>
                                                <p class="m-0"><span>(b.)</span> CTC copy of Pt — II Order.</p>
                                                <p class="m-0"> <span>(c.)</span> 02 x E-ticket for Rs 4160/- (Rupees
                                                    four
                                                    thousand one sixty only)</p>

                                                <p class="mt-4"><span>2.</span>Cheque for the amount may please be issued
                                                    in
                                                    favour of SBI, Delhi Cantt for
                                                    creditiing
                                                    the same<br> in Public Fund Account No<span><u>10469772684 </u>of this
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
                                                <h5>(Tusher Joshi)</h5>
                                                <h5>AEE</h5>
                                                <h5>Civ Est Office</h5>
                                                <h5>for omm ding Officer</h5>
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
