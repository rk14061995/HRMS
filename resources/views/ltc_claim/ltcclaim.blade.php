<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Serkari.website</title>
    <link rel="stylesheet" href="sarkari.css">
</head>
<script></script>

<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 col-ms-8 col-lg-6  justify-content-start">
                    <h6>Telephone:36584</h6>
                    <h6>50601/Civ/LTC/RK</h6>
                    <h6>Area Accounts Office(Pay)</h6>
                    <h6>Delhi Cantt-110010</h6>
                </div>

                <div class="col-md-12 col-ms-8 col-lg-6  float-right">
                    <h6><b><u>Unit Code: {{$ltcData[0]->ltc['jobDetails']->unit_no}}</u></b></h6>
                    <h6>{{$ltcData[0]->ltc['jobDetails']->unit_name}}</h6>
                    <h6>{{$ltcData[0]->ltc['jobDetails']->unit_address}} - {{$ltcData[0]->ltc['jobDetails']->unit_pincode}}</h6>
                    <h6 class="mt-3">Sep2022</h6>
                </div>


            </div>

        </div>
    </section>
    <div class="col-md-12 d-flex justify-content-center mt-5">
        <h2><b><u>LTC CLAM(FINAL):T.NO.459 T/MATE {{$ltcData[0]->ltc['empDetails']->name}}</u></b></h2>
    </div>
    <div class="col-md-12 d-flex justify-content-center m-0">
        <h2><b><u>(PRAN NO {{$ltcData[0]->ltc['empPfDetails']->pf_acc_no}})</u></b></h2>
    </div>



    <div class="container">
        <p><span>1.</span> claim for the block year 2018-21 for All India Journey with carry forwarded in the year 2022
            for Rs {{$ltcData[0]->claim_amount}}/- (Rupees four thousand one hundred sixty only) in respect of above mentioned indl is 2f
            submitted herewith alongwith following documents for your audit and early payment please :-
        </p>




        <p class="m-0"> <span>(a.)</span> Annexure A</p>
        <p class="m-0"><span>(b.)</span> CTC copy of Pt — II Order.</p>
        <p class="m-0"> <span>(c.)</span> 02 x E-ticket for Rs {{$ltcData[0]->claim_amount}}/- (___________________________________________________)</p>

        <p class="mt-4"><span>2.</span>Cheque for the amount may please be issued in favour of SBI, Delhi Cantt for
            creditiing
            the same<br> in Public Fund Account No<span><u>{{$ltcData[0]->ltc['empPfDetails']->pf_acc_no}} </u>of this unit.</span>
        </p>




        <div class="row">
            <div class="col-md-6 mt-5">
                <h6>Encls : As above.</h6>
            </div>

            <div class="col-md-6 ">
                <h6>({{$ltcData[0]->ltc['jobDetails']->incharge_name}})</h6>
                <h6>{{$ltcData[0]->ltc['jobDetails']->unit_incharge_Designation}}</h6>
                <h6>Civ Est Office</h6>
                <h6>for omm ding Officer</h6>
            </div>
        </div>








        <div class="col-md-12 d-flex justify-content-center mt-5 m-0">
            <h2><b><u>LTC CLAIM FOR THE BLOCK YEAR 2018-2021</u></b></h2>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <h2><b><u>FOR ALL INDIA JOURNEY</u></b></h2>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <h2><b><u>(with carry forwarded in yrs 2022</u></b></h2>
        </div>


        <div class="row mt-5">
            <div class="col-md-4">
                <h6>1.<U>PERSONAL DETAILS</U></h6>

                <ol type="a">
                    <li>Name:<input  value="{{$ltcData[0]->ltc['empDetails']->name}}" class="mx-4 mt-2" style="width:200px;"></li>
                    <li>T.No & Dsgn: <input value="{{$ltcData[0]->ltc['jobDetails']->designation}}" class="mt-2" style="width:170px;"></li>
                    <li>Unit:<input value="{{$ltcData[0]->ltc['jobDetails']->unit_no}}" class="mt-2 mx-5"></li>
                    <li>Basic Pay:<input value="{{$ltcData[0]->ltc['empDetails']->pay}}"    class="mt-2 mx-2" style="width:195px;"></li>
                </ol>
            </div>


            <div class="col-md-4">

                <h6>2.<U>LEAVE DETAILS</U></h6>

                <ol type="a">
                    <li>Lve Period :<input text="" class="mx-3 mt-2" style="width:211px;"></li>
                    <li>Auth : Dopt II No-: <input text="" class="mt-2" style="width:173px;"></li>
                    <li>Declared Lve Station :<input text="" class="mt-2 " style="width:155px;"></li>
                    All Indian Journey:
                    <li>Claimed preffered on :<input text="" class=" mx-2" style="width:145px;"></li>
                </ol>


            </div>


            <div class="col-md-4">
                <h6>3.<U>Family Details for whom LTC Claimed</U></h6>

                <table>
                    <tr>
                        <th>S.NO</th>
                        <th> Name</th>
                        <th>Relationship</th>
                    </tr>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($ltcData[0]->ltc['journeyDetail'] as $jd)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$jd->passenger_name}}</td>
                            <td>{{$jd->passender_rel}}</td>
                        </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                    
                </table>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <span>(f)<b><u>OURNEYd_ADET ILS DEPARTURE</u></b></span>
            </div>
            <div class="col-md-4">
                <b><u>ARRIVAL</u></b>
            </div>

        </div>


        <table border="1">
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
            <tbody >
                @php
                    $i=1;
                @endphp
                @foreach ($ltcData[0]->ltc['journeyDetail'] as $jd)
                <tr>
                    <td>{{$jd->date_of_journey}}</td>

                    <td>{{$jd->departure_time}}</td>

                    <td>New delhe</td>

                    <td>{{$jd->date_of_journey  }}</td>

                    <td>{{$jd->date_of_journey}}</td>

                    <td>sh mata vaisno devi Katra</td>

                    <td>{{$jd->arrival_time}}</td>

                    <td>655</td>

                    <td>1040:00</td>

                    <td>02</td>

                    <td>2080:00</td>

                    <td>ps222441156824</td>

                    <td>e-Tkt</td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach
                

            </tbody>
            
        </table>







        <div class="row">
            <div class="col-md-8 col-ms-8 col-lg-6   mt-5">
                <h6>Total amount claimed : Rs. {{$ltcData[0]->claim_amount}}</h6>
                <h6> (- Advance drawn : Nil</h6>
                <h6>Balance Recovery/Due : Rs. 4160.00</h6>

            </div>


            <div class="col-md-8 col-ms-8 col-lg-6   mt-5">
                <h6>Name: {{$ltcData[0]->ltc['empDetails']->name}}</h6>
                <h6>T. No. 469, T/Mate</h6>


            </div>
        </div>


        <div class="col-md-12 d-flex justify-content-center">
            <h2><b><u>RECEIVED PAYT/IENT</u></b></h2>
        </div>


        <div class="col-md-4">
            <u>
                <h6>Mode of payment</h6>
            </u>
        </div>
        <div class="col-md-12 ">
            <h6 class="broder">Cheque may please be issued in favour of SBI, RRRC, Delhi Cantt for crediting the same in
                Public Fund Account No<u> {{$ltcData[0]->ltc['empPfDetails']->pf_acc_no}} </u>of this<br> unit.</h6>
        </div>

        <div class="col-md-12 d-flex justify-content-center">
            <h6><b><u>COUNTERSIGNED AS CORRECT CLAIM</u></b></h6>
        </div>



        <div class="col-md-12 d-flex justify-content-center mt-5">
            <h2><b><u>DEPENDENT CERTIFICATE</u></b></h2>
        </div>
        <P>1.Certified that u/m family members are un-employed, and wholly dependent upon me.</P>


        <div class=" d-flex justify-content-center">
            <table class=" mt-5">
                <tr class="">
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Relation</th>
                    <th>Status</th>
                </tr>
            @foreach ($ltcData[0]->ltc['dependent'] as $dep)
            <tr>
                <td>(a)</td>
                <td>{{$dep->dep_name}}</td>
                <td>{{$dep->relation}}</td>

                <td>54 yrs</td>
            </tr>
            @endforeach
                
            </table>
        </div>
        <p class="mt-5">2. It is also certified that they are living with me at my duty station and their income from
            all sources is not more than 9000/- pm.</p>

        <div class="row mt-5">
            <div class="col-md-6">
                <h6>Dated : Sep 2022</h6>
            </div>


            <div class="col-md-6">
                <h6>({{$ltcData[0]->ltc['empDetails']->name}}) </h6>
                <h6>T.No 459 T/Mate</h6>
            </div>
        </div>


        <div class="col-md-12 d-flex justify-content-center mt-5">
            <h6><b><u>COUNTERSIGNED</u></b></h6>
        </div>
        <div class=" d-flex justify-content-center mt-5">
            <p>({{$ltcData[0]->ltc['jobDetails']->incharge_name}})<br> {{$ltcData[0]->ltc['jobDetails']->unit_incharge_Designation}}<br>
                Civ Est Officer<br>
                for Commanding Officer </p>
        </div>

        <!-- <h6 class="mt-5">(Tushar Joshi) AEE</h6>
    <h6>Civ Est Officer</h6>
       <h6> for Commanding Officer </h6>
   -->

        <div class=" d-flex justify-content-center mt-5">
            <h6><u>COUNTERSIGNED AS CONRRECT CLAIM </u></h6>
        </div>

        <p>Certified that :-</p>
        <p>I have not submitted any other claim for mysolf ly iilitlers in r/o for ..................</p>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
