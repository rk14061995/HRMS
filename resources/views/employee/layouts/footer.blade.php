   <div class="container-fluid">
       <div class="row">
           <div class="col">
               
           </div>
       </div>

   </div>
   </div>
   <!-- end dashboard inner -->
   </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
       integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
       integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
       integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
   </script>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
   </script>
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"
       integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   {{-- </div> --}}
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
       $(document).ready(function() {
           $('.myTable').DataTable();
       });
   </script>

   <!-- jQuery -->
   <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script src="frontend/js/jquery.min.js"></script>
   <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( '_formBody' );
    </script>
   <script>
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
        function printDiv() 
        {

        var divToPrint=document.getElementById('DivIdToPrint');

        var newWin=window.open('','Print-Window');

        newWin.document.open();
        
        var html='<html><head><link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/bootstrap.min.css" /><style>@media print {.pagebreak { page-break-before: always; } /* page-break-after works, as well */}body{margin: 50px 30px 50px 30px;padding:50px 20px 50px 20px;}p{font-size: 18px;font-family: sans-serif;}h5{font-size: 18px;}</style></head><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>';
        // console.log(html);
        newWin.document.write(html);

        newWin.document.close();

        // setTimeout(function(){newWin.close();},10);

        }
        function printPdf(container) 
        {

        var divToPrint=document.getElementById(container);

        var newWin=window.open('','Print-Window');

        newWin.document.open();
        
        var html='<html><head><link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/bootstrap.min.css" /><style>@media print {.pagebreak { page-break-before: always; } /* page-break-after works, as well */}</style></head><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>';
        // console.log(html);
        newWin.document.write(html);

        newWin.document.close();

        // setTimeout(function(){newWin.close();},10);

        }

        
       //OnChange Logics Starts

       $(document).on('change', '#empCheckoutID', function() {
           $('#attendId').val($(this).val());
       });
       $(document).on('change', '#onModeChange', function() {
           console.log($(this).is(':checked'));
           if($(this).is(':checked')){
            $('#sidebar h4').css("background-color",'#149b6a');
            $('#sidebar').css("background-color",'#1c6148');
            $('.topbar').css('background-color','#149b6a');
            $('.card').css('background-color','#fff');
            $('.card-body').css('background-color','#fff');
            
            $('.topbar .navbar').css('background-color','#149b6a');
            $('.sidebar_toggle').css('background-color','#149b6a');
            $('.icon_info ul.user_profile_dd>li').css('background-color','#149b6a');
           }else{
            $('#sidebar h4').css("background-color",'#17202A');
            $('#sidebar').css("background-color",'#273746');
            
            $('#content').css("background-color",'#625d5d');
            $('.card').css('background-color','#17202A');
            $('.card-body').css('background-color','#17202A');
            $('.topbar').css('background-color','#17202A');
            $('.topbar .navbar').css('background-color','#17202A');
            $('.sidebar_toggle').css('background-color','#17202A');
            $('.icon_info ul.user_profile_dd>li').css('background-color','#17202A');
            
           }
        //    $('#sidebar h4').css('background-color','red');
        // $('.topbar .navbar').css('background-color','red');
        // $('.sidebar_toggle').css('background-color','red');
        // $('.icon_info ul.user_profile_dd>li').css('background-color',);
        // $('#sidebar').css('background-color',);
        // $('#sidebar').css('background-color',);
        // $('#sidebar').css('background-color',);


        //    #sidebar h4 .topbar .navbar .sidebar_toggle .icon_info ul.user_profile_dd>li {

       });
       
       $(document).on('change', '#empIdForBankDetail', function() {
           var EmpId = $(this).val();
           $.ajax({
               url: "getEmpBankDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: {
                EmpId: EmpId
               }, // Setting the data attribute of ajax with file_data
               type: 'post',

               success: function(res) {
                   if (res.status) {

                    //    
                    // console.log(res.data[0].acc_holder);
                    $('#empAccHolder').val(res.data[0].acc_holder);
                    $('#empBankName').val(res.data[0].bank_name);
                    $('#empAccNo').val(res.data[0].acc_no);
                    $('#empIsfc').val(res.data[0].bank_isfc);
                    //    swal(res.message, {
                    //        icon: "success",
                    //    });
                   }
               }
           });

       });
        
       $(document).on('change','#empGrade',function(){
        var gradeId = $(this).val();
           $.ajax({
               url: "getGradeDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: {
                id: gradeId
               }, // Setting the data attribute of ajax with file_data
               type: 'post',

               success: function(res) {
                   if (res.status) {

                    $('#empPay').val(res.data.basic_pay);
                    // if($('#empPay').val()!=""){
                    // console.log($(this).val());
                        var bp=parseInt(res.data.basic_pay);
                        // console.log('Basic Pay: '+bp);
                        var ta_da=parseInt((0.34*bp));;
                        // console.log('DA: '+ta_da);
                        var hra=parseInt((0.27*bp));
                        // console.log('DA: '+hra);
                        var new_sal=bp+ta_da+hra;
                        // console.log('Salary: '+new_sal);
                        // Salary=new_sal;
                        $('#empPaytada').val(ta_da);
                        $('#empPayHra').val(hra);
                        $('#empPayTotal').val(new_sal);
                    // } 
                   }
               }
           });
       });
       $(document).on('change','#job_status',function(){
        if($(this).val()==1){
            $('.prevDate').addClass('d-none');
        }else{
            $('.prevDate').removeClass('d-none')
        }
       });
       $(document).on('change','#empIdCEA',function(){
        var emp_id = $(this).val();
           $.ajax({
               url: "getDependent", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: {
                emp_id: emp_id
               }, // Setting the data attribute of ajax with file_data
               type: 'post',

               success: function(res) {
                   if (res.status) {
                    $('#cea_child_name').empty();
                    var opt='<option value="0">Select </option>';
                    for(let i=0; i< res.data.length; i++){
                        if(res.data[i].relation=='Child'){
                            opt+='<option value="'+res.data[i].id+'">'+res.data[i].dep_name +'</option>';
                        }
                        console.log(res.data[i].dep_name);
                    }
                    $('#cea_child_name').append(opt);
                    // console.log($(this).val());
                   }
               }
           });
       });
       //OnChange Logics Ends Here
       // In your Javascript (external .js resource or <script> tag)
       $(document).ready(function() {
           
           $('.empSearch').select2();
       });
       $(document).on('click','#generateEmpSalary',function(){
        $.ajax({
               url: "generate-salary", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },// Setting the data attribute of ajax with file_data
               type: 'get',
               success: function(res) {

                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                
               }
           });
       });
       $(document).on('click', '#markMyAttendance', function() {
           console.log('Mark My Attendance');
           var user_id = '{{ Auth::user()->id }}';
           // user_id=parseInt(user_id);
           // console.log(user_id);
           $.ajax({
               url: "markMyAttendance", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: {
                   user_id: user_id
               }, // Setting the data attribute of ajax with file_data
               type: 'post',
               success: function(res) {
                   //   console.log(res);
                   //   res=JSON.parse(res);
                   //   console.log(res);
                   //   break;
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                //    setTimeout(() => {
                //     location.reload();
                //    }, 1500);
                   //   if(data==1){
                   //       swal("Data has been updated!", {
                   //           icon: "success",
                   //           });
                   //   }else{
                   //       swal("Failed to update", {
                   //           icon: "error",
                   //           });
                   //   }
                   //   setTimeout(() => {
                   //               location.reload();
                   //           }, 1500);
                   // if(data.file!=null){
                   //     $('#party_logo_path').val(data.file);
                   //     $('#logoPreview').attr('src', cdn+data.file);
                   // }else{

                   // }
                   // Do something after Ajax completes 
               }
           });
           // $.ajax({
           //    url:'',
           //    type:'post',
           //    data: {user_id:user_id},
           //    success:function(res){
           //       swal("Attendance marked Successfully", {
           //                       icon: "success",
           //                       });
           //    }
           // });

       });
       //Modal Show  
       
       $(document).on('click', '.viewLtcDoc', function() {
            // var empId=$(this).attr('data-empid');
           $('#ltcModalDocList').modal('show');
       });
       $(document).on('click', '.viewEmpClaimReq', function() {
           $('#ClaimRequestModal').modal('show');
            var patient_name=$(this).attr('data-ptnt');
            var emp_name=$(this).attr('data-emp-name');
            var emp_id=$(this).attr('data-empid');
            var req_id=$(this).attr('data-id');
            var clm_amt=$(this).attr('data-amount');
            var doc=$(this).attr('data-doc-path')

            $('#empId').text(emp_id);
            $('#empName').text(emp_name);
            $('#emppntName').text(patient_name);
            $('#clmAmt').text(clm_amt);
            $('#claimedamt').val(clm_amt);
            $('#claimedreqid').val(req_id);
            
       });
       $(document).on('click', '.editLtcEmpClaimReq', function() {
           $('#LtcClaimRequestModal').modal('show');
       });
       $(document).on('click', '#claimAmount', function() {
            $('#empCLmId').text($('#empId').text());
            $('#clmdamount').val($('#claimedamt').val());
            $('#clmReqId').val($('#claimedreqid').val());
            


           $('#ClaimRequestModal').modal('hide');
           $('#ClaimRequestAmountModal').modal('show');
       });
       $(document).on('click', '.addDependField', function() {
            var tr='<tr><td><input type="text" name="dependentName[]" class="form-control" placeholder="Enter Dependent Name"></td><td><select class="form-control" name="rel[]"><option value="0">Select Relation</option><option value="Father">Father</option><option value="Mother">Mother</option><option value="Wife">Wife</option><option value="Husband">Husband</option><option value="Child">Child</option></select></td><td><input type="text" name="dependentIdNo[]" class="form-control" placeholder="Enter Dependent Id No."></td><td><input type="file" name="dependentFile[]"></td><td><a href="javascript:void(0)" class="btn btn-outline-danger w-100 text-center removeDependField" >Remove</a></td></tr>';
            $('#addDependData').append(tr);
       }); 
       $(document).on('click', '.removeDependField', function() {
            $(this).parent().parent().remove();
       });
       $(document).on('click', '.addCGSHDependField', function() {
            var tr='<tr><td>2</td><td><select class="form-control" name="rel[]"><option value="0">Select Relation</option><option value="Father">Father</option><option value="Mother">Mother</option><option value="Wife">Wife</option><option value="Husband">Husband</option><option value="Child">Child</option></select></td><td><input type="date" name="age[]" class="form-control"></td><td><a href="javascript:void(0)" class="btn btn-outline-danger w-100 text-center removeCGSHDependField" >Remove</a></td></tr>';
            $('#addDependDataForCghs').append(tr);
       }); 
       $(document).on('click', '.removeCGSHDependField', function() {
            $(this).parent().parent().remove();
       });
       //Modal Show Ends

      
       //Date of Retirement
       $(document).on('change','#isCghsTrue',function(){
        console.log(' -- > '+$(this).is(':checked'));
        if($(this).is(':checked')){
            $('.cghsForm').removeClass('d-none');
        }else{
            $('.cghsForm').addClass('d-none');
        }

        // 2022-12-21
        // var dtRe=$('#empDob').val() +

       });
       //Date of Retirement
       $(document).on('change','#empDoj',function(){
        console.log($('#empDob').val());
        // 2022-12-21
        // var dtRe=$('#empDob').val() +

       });
       //Salary Calculation Starts Here
    //    var Salary=0;
        $(document).on('keyup','#empPay',function(){
            if($(this).val()!=""){
                // console.log($(this).val());
                var bp=parseInt($(this).val());
                // console.log('Basic Pay: '+bp);
                var ta_da=parseInt((0.34*bp));;
                // console.log('DA: '+ta_da);
                var hra=parseInt((0.27*bp));
                // console.log('DA: '+hra);
                var new_sal=bp+ta_da+hra;
                // console.log('Salary: '+new_sal);
                // Salary=new_sal;
                $('#empPaytada').val(ta_da);
                $('#empPayHra').val(hra);
                $('#empPayTotal').val(new_sal);
            } 
             
        });
        $(document).on('keyup','#empPayTpt',function(){
            if($(this).val()!=""){
                var bp  = parseInt($('#empPay').val());
                var persPay  = parseInt($('#empPayPersPay').val());
                var ta_da   = parseInt($('#empPaytada').val());
                var hra = parseInt($('#empPayHra').val());
                var tpt = parseInt($(this).val());
                var prk = parseInt($('#empPaygprk').val());

                $('#empPayTotal').val(bp+ta_da+hra+tpt+persPay+prk);
            } 
            
        });
        $(document).on('keyup','#empPayPersPay',function(){
            if($(this).val()!=""){
                var bp  = parseInt($('#empPay').val());
                var persPay  = parseInt($(this).val());
                var ta_da   = parseInt($('#empPaytada').val());
                var hra = parseInt($('#empPayHra').val());
                var tpt = parseInt($('#empPayTpt').val());
                var prk = parseInt($('#empPaygprk').val());
                $('#empPayTotal').val(bp+ta_da+hra+tpt+persPay+prk);
            } 
        });
        $(document).on('keyup','#empPaygprk',function(){
            if($(this).val()!=""){
                var bp  = parseInt($('#empPay').val());
                var persPay  = parseInt($('#empPayPersPay').val());
                var ta_da   = parseInt($('#empPaytada').val());
                var hra = parseInt($('#empPayHra').val());
                var tpt = parseInt($('#empPayTpt').val());
                var prk = parseInt($('#empPaygprk').val());
                $('#empPayTotal').val(bp+ta_da+hra+tpt+persPay+prk);
            } 
        });
       //Salary Calculation Ends Here
       
       $(document).on('submit', '#approveMedicalClaim', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "approveMedicalClaim", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#add-financial-year', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addNewFinancialYear", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#add-new-leave-category', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addLeaveCategory", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#add-emp-sal-deduction', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addEmpDeductions", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#add-new-emp-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addNewEmpDeatils", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });

       $(document).on('submit', '#add-emp-bank-details-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addEmpBankDeatils", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#markAttendance', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           console.log('Mark My Attendance');
           var user_id = '{{ Auth::user()->id }}';
           // user_id=parseInt(user_id);
           // console.log(user_id);
           $.ajax({
               url: "markMyAttendance", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#claimMedicalBenifit', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           console.log('Mark My Attendance');
           var user_id = '{{ Auth::user()->id }}';
           // user_id=parseInt(user_id);
           // console.log(user_id);
           $.ajax({
               url: "claimMedicalBenifit", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#emp-skill-data', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addEmpSkills", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#add-new-emp-dependant-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addEmpDependDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#add-grade-details-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addGradeSalaryDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#add-emp-pf-details-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addPfAccDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       
       $(document).on('submit', '#claimCEABenifit', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addCeaClaimRequest", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#claimLTCBenifit', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addLTCClaimRequest", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#add-new-unit-detail-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addUnitDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#add-emp-job-details-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addEmpJobDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       $(document).on('submit', '#add-new-ret-req-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addRetReqDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });
       
       $(document).on('submit', '#add-pension-req-form', function(e) {
           e.preventDefault();
           var formData = new FormData($(this)[0]);
           $.ajax({
               url: "addPensionReqDetails", // Upload Script
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: formData, // Setting the data attribute of ajax with file_data
               type: 'post',
               processData: false,
               cache: false,
               contentType: false,
               success: function(res) {
                   if (res.status) {
                       swal(res.message, {
                           icon: "success",
                       });
                   } else {
                       swal(res.message, {
                           icon: "warning",
                       });
                   }
                   setTimeout(() => {
                    location.reload();
                   }, 1500);

               }
           });
       });


       //Delete Common API 
       $(document).on('click', '.deleteEmpAttendanceData', function() {
           var id = $(this).attr('data-id');
           console.log(id);
           swal({
                   title: "Are you sure?",
                   text: "Once deleted, you will not be able to recover this imaginary file!",
                   icon: "warning",
                   buttons: true,
                   dangerMode: true,
               })
               .then((willDelete) => {
                   if (willDelete) {
                       $.ajax({
                           url: "softDeleteEmpAttendance", // Upload Script
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           },
                           data: {
                               id: id
                           }, // Setting the data attribute of ajax with file_data
                           type: 'get',

                           success: function(res) {
                               if (res.status) {
                                   swal(res.message, {
                                       icon: "success",
                                   });
                               } else {
                                   swal(res.message, {
                                       icon: "warning",
                                   });
                               }
                               setTimeout(() => {
                                   location.reload();
                               }, 1500);
                           }
                       });

                   } else {
                       swal("Your imaginary file is safe!");
                   }
               });

           $(this).parent().parent().remove();
       });
       $(document).on('click', '.deleteEmpBankData', function() {
           var id = $(this).attr('data-id');
           console.log(id);
           swal({
                   title: "Are you sure?",
                   text: "Once deleted, you will not be able to recover this imaginary file!",
                   icon: "warning",
                   buttons: true,
                   dangerMode: true,
               })
               .then((willDelete) => {
                   if (willDelete) {
                       $.ajax({
                           url: "softDeleteEmpBankDetails", // Upload Script
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           },
                           data: {
                               id: id
                           }, // Setting the data attribute of ajax with file_data
                           type: 'get',

                           success: function(res) {
                               if (res.status) {
                                   swal(res.message, {
                                       icon: "success",
                                   });
                               } else {
                                   swal(res.message, {
                                       icon: "warning",
                                   });
                               }
                               setTimeout(() => {
                                   location.reload();
                               }, 1500);
                           }
                       });

                   } else {
                       swal("Your imaginary file is safe!");
                   }
               });

           $(this).parent().parent().remove();
       });

    //   changes aditya
       

var selDiv = "";
      var storedFiles = [];
      $(document).ready(function () {
        $("#img").on("change", handleFileSelect);
        selDiv = $("#dd");
      });

      function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function (f) {
          if (!f.type.match("image.*")) {
            return;
          }
          storedFiles.push(f);

          var reader = new FileReader();
          reader.onload = function (e) {
            var html =
              '<img src="' +
              e.target.result +
              "\" data-file='" +
              f.name +
              "alt='Category Image' height='100px' width='200px'>";
            selDiv.html(html);
          };
          reader.readAsDataURL(f);
        });
      }

 var selDivs = "";
      var storedFiless = [];
      $(document).ready(function () {
        $("#img1").on("change", handleFileSelectt);
        selDivs = $("#ff");
      });

      function handleFileSelectt(e) {
        var files = e.target.files;
        var filesArrr = Array.prototype.slice.call(files);
        filesArrr.forEach(function (f) {
          if (!f.type.match("image.*")) {
            return;
          }
          storedFiless.push(f);

          var readers = new FileReader();
          readers.onload = function (e) {
            var htmll =
              '<img src="' +
              e.target.result +
              "\" data-file='" +
              f.name +
              "alt='Category Image' height='100px' width='200px'>";
            selDivs.html(htmll);
          };
          readers.readAsDataURL(f);
        });
      }

      $(function() {
          mark_empAttnDate.max = new Date().toISOString().split("T")[0];
    });
      $(function() {
        mark_checkOutAttnd.max = new Date().toISOString().split("T")[0];
    });
    



   </script>
   <script src="frontend/js/popper.min.js"></script>
   <script src="frontend/js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="frontend/js/animate.js"></script>
   <!-- select country -->
   <script src="frontend/js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="frontend/js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="frontend/js/Chart.min.js"></script>
   <script src="frontend/js/Chart.bundle.min.js"></script>
   <script src="frontend/js/utils.js"></script>
   <script src="frontend/js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="frontend/js/perfect-scrollbar.min.js"></script>
   <script>
       var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="frontend/js/custom.js"></script>
   <script src="frontend/js/chart_custom_style1.js"></script>
   </body>

   </html>
