@extends('manager.layouts.main')
               @section('main')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Attendance</h2>
                           </div>
                        </div>
                     </div>
                    
                   <div class="row">

                     <form method="get">
                      <div class="col-md-3">
                        <h5>Employee:</h5>
                        <input type="text"name=""/></br></br>
                  
                    
                        <h5>Name:</h5>
                        <input type="text"name="">
                    
                    
                    <div class="form-check" style="margin-top: 8px;" >
                      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                       <label class="form-check-label" for="check1"><b>Attendance</b></label>
                     </div>
                     



                     
                     <div class="button_block"> <button type="button" class="btn cur-p btn-outline-success" style="margin-top: 11px;">Check</button></div>
                      
                     <a href="/dasboard" class="btn cur-p btn-outline-danger" style="margin-left:89px; margin-top:-47px;">Back</a>
                           

                   
                       
                   
                     </div>
</form>
                        <div class="col-md-9" >
                           <div style="padding-left: 141px;">
                           <h5>Employee ID:</h5></br>
                           <h5>Name:</h5>
                          </div><br>

                           <div class="wrapper">
       <div class="container-calendar">
        <h3 id="monthAndYear"></h3>
        <div class="button-container-calendar">
            <button id="previous" onclick="previous()">&#8249;</button>
            <button id="next" onclick="next()">&#8250;</button>
        </div>
        <table class="table-calendar" id="calendar" data-lang="en">
            <thead id="thead-month"></thead>
            <tbody id="calendar-body"></tbody>
        </table>
        <div class="footer-container-calendar">
             <label for="month">Jump To: </label>
             <select id="month" onchange="jump()">
                 <option value=0>Jan</option>
                 <option value=1>Feb</option>
                 <option value=2>Mar</option>
                 <option value=3>Apr</option>
                 <option value=4>May</option>
                 <option value=5>Jun</option>
                 <option value=6>Jul</option>
                 <option value=7>Aug</option>
                 <option value=8>Sep</option>
                 <option value=9>Oct</option>
                 <option value=10>Nov</option>
                 <option value=11>Dec</option>
             </select>
             <select id="year" onchange="jump()"></select>       
        </div>
     </div>
     
</div>
               <!--  row tag--> 
      <div class="row"> 

            <div class="col-md-6" style="padding-left: 141px;">
                      <label class="container"><p><b>Present:</b></p>
                     <input type="checkbox" checked="checked">
                       <span class="checkmark"></span>
                        </label>
                       <label class="container"><p><b>Absent:</b></p>
                        <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                       </label>    
  
                  </div> 
       

                   <!--Container fuiled-->


                   <div class="col-md-4">
                   <p class="m-0"><b>Total Working Day:</b></p>
                     <p class="m-0"><b>Total Persent:</b></p>
                     <p class="m-0"><b>Total Absent:</b></p>
                 </div>
      </div>


                </div>
               </div>

                     <script type="text/javascript" src="{{url('frontend/calender/script.js')}}"></script>
                    @endSection