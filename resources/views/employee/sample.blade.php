<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <title>Retirement Case</title>
    {{-- <link rel="stylesheet" href="ser.css"> --}}
    <style>
        body{
            font-size: 12px;
        }
        .col-md-4{width:33.33333333%}
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5><u>RETIREMENT CASE</u></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

                <p>Telephone:{telephone}</p>
                <p>50608/Civ/JP</p> 
                <p>{la}</p>
                <p>{unit} {base_unit}</p>
                <p>{city} - {pincode}</p>
            </div>
            <div class=" col-md-4"></div>
            <div class=" col-md-4" style="text-align: right;">
                <h6><u>PRIORITY/REGD BY-POST</u></h6>
                <P>{unit_name}</P>
                <p>{city} - {pincode}</p>
                <p>{year_ret} {year_ret}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h6><u>GRANT OF PENSION, GRATUITY AND COMPUTATION VALUE</u></h6>
                <h6><u>IN RESPECT OF T.NO 42 VM {sr_smt} {emp_name}</u></h6>
                <h6><u>RETIRED FROM SERVICE WEF {ret_date} {ret_month} {ret_year}</u></h6>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <p class="">1.Pension application (IAFA-356) in duplicate in respect of <strong>T.NO 42 VM(HS
                        II) {sr_smt} {emp_name} </strong> of this
                    unit who is due for retirement from service wef<b> {ret_date} {ret_month} {ret_year} (AN)</b>
                    along with other connected documents/papers relating to grant of pension/gratuity and
                    commutation
                    value is submitted herewith as per Appx &#39;A&#39; to this letter duly audited by audit
                    authority is fwd
                    herewith for your necessary action please. Service book along with leave record has already been
                    fwd to you vide this office letter to. 50608/Civ/audit dated {audit_date} {audit_month}
                    {audit_year}. You are requested to
                    :- eWm the service book along with pension document after your necessary action please,</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>2.Early action is requested please.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <p>Encls : As above.</p>
                <p>Copy to :-</p>
            </div>
            <div class="col-xs-4"></div>

            <div class="col-xs-4" style="text-align: right;">
                <p>({incharge})</p>
                <h5 class="m-0">{incharge_des_one}</h5>
                <p class="m-0">{incharge_des_two}</p>
                <p class="m-0">for {incharge_des_three}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <p class="m-0">Pension liaison Cell C/O</p>
                <p class="m-0">{base_unit_no} {base_unit_camp}</p>
                <p class="m-0">{base_unit_city} ({base_unit_state})</p>
            </div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4" style="text-align:right;">
                <p class="m-0">for info. You are requested to liaise</p>
                <p class="m-0">with PCDA (P) Allahabad for speedy</p>
                <p class="m-0">action.</p>
            </div>
        </div>

            {{-- {!! $form->form_body !!} --}}
       


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
