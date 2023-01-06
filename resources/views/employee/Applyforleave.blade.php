@extends('employee.layouts.main')
               @section('main')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Apply For Leave</h2>
                           </div>
                        </div>
                     </div>


<!-- row div start -->
                     <from action="" method="POST">
                        @csrf
                     <div class="row">
                        <div class="col-md-6">
  <div class="form-group">
    <label for="email">First Name:</label>
    <input type="text" class="form-control" placeholder="Enter First Name" name="name" required>
  </div>
  <div class="form-group">
    <label for="pwd">Last Name:</label>
    <input type="text" class="form-control" placeholder="Enter Last Name" name="designation" required>
  </div>


<div class="row mx-1">
  <div class="form-group" style="with">
    <label for="email"> Date From:</label>
    <input type="date" class="form-control"  name="mobile" style="width: 162px;" required>
  </div>

  <div class="form-group mx-3">
    <label for="email"> Date To:</label>
    <input type="date" class="form-control" name="mobile" style="width: 162px;" required>
  </div>
</div>


  <div class="form-group">
    <label for="pwd">Reason:</label>
    <input type="text" class="form-control" placeholder="Enter Reason" name="email" required>
  </div>



  <div class="form-group">
    <label for="pwd">Document:</label>
    <input type="file" class="form-control"  name="email" required>
  </div>
  
  <button type="Submit" class="btn btn btn-outline-success">Submit</button>
  <a href="{{ route('empdashboard')}}" class="btn btn-outline-danger mx-2">Chancel</a>
  
</div>




                     
                  <!-- footer -->
                 @endsection