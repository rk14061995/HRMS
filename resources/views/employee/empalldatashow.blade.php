<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ url('employee/Nip.css') }}">
    
    <title>Employee Details</title>

</head>
<body>
    
    <div class="container">

        <div class="d-flex justify-content-center">
            <h3><u>UNIT CODE : 3573</u></h3>
        </div>

<div class="row">

    <div class="col-md-6">
<p>Tele:36585</p>

<h6 class="mt-5">Area Accounts Office</h6>
<h6>Group IV</h6>
<h6>Delhi Cantt- 110010</h6>


    </div>


    
    <h6 style="text-align: end;"> Station Workshop EME<br>
    Delhi Cantt-110010<br>Sep 2022</h6>
</div>




<div class="d-flex justify-content-center mt-5">
    <h3><u>FWD OF REGULAR PAY BILL FOR THE MONTH OF SEP 2022</u></h3>
</div>



<div class="d-flex justify-content-center">
    <h3><u>IN RESPECT OF AEE SH TUSHAR JOSHI</u></h3>
</div>



<P>This unit Regular Pay Bill No 50601/Civ/AEE/R-     dated	Sep 2022 for the sum  of <b> Rs.  1,00,683/-  (Rupees  One  Lakh  Six  Hundred  Eighty  Three  Only) </b>  on account  of pay  and  allces for the month of  <b>Sep 2022  in r/o  AEE  Sh  Tushar  Joshi</b>  of this unit is fwd herewith along with DO Pt —II Order and connected schedules in
    lriclicate and other supporting docs for your audit and payment please.
    </P>


    <p>2	Please credit  the amount into indl concerned  Bank  Account  under  intimation  to
        this unit</p>


        <p>3. This unit Public Fund Account No.<b><u>10469772684</u></b> Bank:SBI Rajputana Rifel centre,Delhi Cantt,</p>
    
    


        <h6 style="text-align: end;">(Jasvinder Singh Saini)<br>
            Maj<br>OIC Adm Gp<br> for Commanding Officer</h6>
        




        <div class="d-flex justify-content-center mt-5">
            <h3><u>STATION WORKSHOP EME, DELHI CANTT-10</u></h3>
        </div>

    
<h6 >PAY BILL OF CIVILIANS(NON-INDUSTRIAL PERS-NPS)</h6>



<h6 style="text-align: end;">For the month: <u>Sep 2022</u><br>
     No of working days 31 (Aug 2022)</h6>

</div><!--container close-->

<!--table ad to canten start-->

<div class="container-fluid">
<div class="#">
    <table class="table table-hover">
    <tr>
        <th colspan="2"></th>
        <th colspan="2"></th>
        <th colspan="11">Entitlements</th>
        <th colspan="12">Deductions</th>
    </tr>

    <tr>
        <td rowspan="3">S No.</td>
        
        <td colspan="5">No.Trade. Name</td>
        <th rowspan="3" style="width: 57px;">BP<br> Level</th>
        <th rowspan="3" style="width: 57px;">DA <br>34%</th>
        <th rowspan="3" style="width: 57px;">HRA <br> 27%</th>
        <th rowspan="3" style="width: 57px;">TPT</th>
        <th rowspan="3" style="width: 57px;">Pers <br> Pay</th>
        <th rowspan="3" style="width: 57px;">WA</th>
        <th rowspan="3" style="width: 57px;">Misc</th>
        <th rowspan="3" style="width: 57px;">Total Pay</th>
        <th rowspan="3" style="width: 57px;">EOL(H</th>
        <th rowspan="3" style="width: 57px;">GPF</th>
        <th rowspan="3" style="width: 57px;">GPF<br>Ref</th>
        <th rowspan="3" style="width: 57px;">CGEIS</th>
        <th rowspan="3" style="width: 57px;">CGHS</th>
        <th rowspan="3" style="width: 57px;">F Adv</th>
        <th rowspan="3" style="width: 57px;">Rent <br> Rec</th>
        <th rowspan="3" style="width: 57px;">Misc<br>Ded</th>
        <th rowspan="3" style="width: 57px;">Tax<br> Ded</th>
        <th rowspan="3" style="width: 57px;">Total<br>Ded</th>
        <th rowspan="3" style="width: 57px;">Net Pay</th>
    </tr>
            
    <tr>
        
        <td>DOB</td>
        <td>GPF A/C</td>
        <td >EOL(D)</td>
        <td>EOL(H)</td>
    </tr>

    <tr>
<td>DOA</td>
<td>PAN NO</td>
<td colspan="2">AADHAR NO</td>
    </tr>

<tr>
    <td>&nbsp;</td>
</tr>
       

                     @php
                        $i=1;
                    @endphp
                    @foreach ($data as $da)
      
      <tr>
        <td rowspan="3">{{$i}}.</td>
        
        <th colspan="5">{{$da->name}}</th>
        <th rowspan="2" style="width: 57px;">{{ $da->basic_pay }}</th>
        <th rowspan="2" style="width: 57px;">{{ $da->ta_da }}</th>
        <th rowspan="2" style="width: 57px;">{{ $da->hra }}</th>
        <th rowspan="2" style="width: 57px;">{{ $da->tpt }}</th>
        <th rowspan="2" style="width: 57px;">{{ $da->pers_pay }}</th>
        <th rowspan="2" style="width: 57px;">0</th>
        <th rowspan="2" style="width: 57px;">120</th>
        <th rowspan="2" style="width: 57px;">0</th>
        <th rowspan="2" style="width: 57px;">2578</th>
        <th rowspan="2" style="width: 57px;">25489</th>
        <th rowspan="2" style="width: 57px;">251875</th>
        <th rowspan="2" style="width: 57px;">24589</th>
        <th rowspan="2" style="width: 57px;">225561</th>
        <th rowspan="2" style="width: 57px;">25451</th>
        <th rowspan="2" style="width: 57px;">254586</th>
        <th rowspan="2" style="width: 57px;">588</th>
        <th rowspan="2" style="width: 57px;">326478</th>
        <th rowspan="2" style="width: 57px;">254689</th>
        <th rowspan="2" style="width: 57px;">24561</th>
    </tr>

    <tr>
        
        <td>{{$da->dob}}</td>
        <td>{{$da->gpf_no}}</td>
        <td>0</td>
        <td>0</td>
    </tr>

    <tr>
<td>{{$da->do_joining}}</td>
<td>AZVPK8085H</td>
<td colspan="2">25458487458845</td>
<th colspan="22">Remarks: IT @ 5200/- (1)</th>
</tr>
@php
                        $i++;
                    @endphp
                    @endforeach
<tr>
<td colspan="25"> Page Total 1</td>
    </tr>


<!--table Row second start-->






</table>
</div>


<!--table ad to canten end-->




    </div>



<!-- best cantainer end-->
</div>
<script src="{{ url('employee/nip.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>