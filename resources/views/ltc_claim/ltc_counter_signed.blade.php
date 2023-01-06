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
                                   
                                    <div class="col-md-8 px-2 " id="DivIdToPrint">

                                        <div class="row">
                                            <div class="col text-center">
                                                <h6><b><u>COUNTERSIGNED</u></b></h6>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p>(Tushar Joshi)<br> AEE<br>
                                                    Civ Est Officer<br>
                                                    for Commanding Officer </p>

                                            
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
                                                <p>I have not submitted any other claim for mysolf ly iilitlers in r/o for ................................</p>
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
                                                <p>.......................................................................................................</p>
                                                <p>That the family members in respect of whose journey the amount has been claimed were entirely dependent and
                                                    actually residing with me at the time of the journey undertaken</p>
                                                <p>That the journey was actually performed to and from my certified home town/any place in India by the class of
                                                    accommodation for which the LTC has been claimed
                                                    Certified that the fare claimed in this bill are by the shortest routes.<br>
                                                    Certified that the journey was performed by the Mail/Exp train/by Bus/by Air.<br>
                                                    Certified that the students concession has been availed/has not been availed.
                                                </p>

                                                <p>(Signature of the individual)</p>
                                                <p>T.No. </p>
                                                <p>Trade</p>

                                                <p>(a). That the journey was performed actually to the Declared home town/any place in india of the Govl
                                                    servant recorded in tha service boot viz</p>

                                                <p>(b). That the tickets for the journey have been produced by the Govt servant and
                                                    the numbers, date and amount has been noted where the Advance has been availed.</p>
                                                <p>(c). That the concession was not availed for more than one in current year or the calender year.</p>
                                                <p>(d). That the journey have been performed by..............................during regular leave.</p>
                                                <p>(e). That ..........................................as rendered continuous service for one year or more on
                                                    the date of commencement of outward journey.</p>
                                                <p>(f). That the necessary entries as required under Rule heve been made in the service book
                                                    of...................................... </p>
                                                <p>(g). That the c!aim has not been preferred and paid earlier.</p>

                                                <p>on : Delhi Cantt — 110010</p>

                                                <p>Civ Est Officer
                                                    for Commanding Officer</p>
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
