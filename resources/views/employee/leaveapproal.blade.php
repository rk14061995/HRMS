@extends('employee.layouts.main')
               @section('main')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Leave Approval</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="col-md-12">
      <div class="row">
      <table class="table">
  <thead>
    <tr>
      <th scope="col"><b>Employee ID</b></th>
      <th scope="col"><b>First Name</b></th>
      <th scope="col"><b>Last Name</b></th>
      <th scope="col"><b>Description</b></th>
      <th scope="col"><b>Date</b></th>
      <th scope="col"><b>Action</b></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">01.</td>
      <td>Rahul</td>
      <td>Singh</td>
      <td>Sir,I am forget the punch</td>
      <td><label for="birthday" class="size">From:</label>
  <input type="date"name="birthday"></br>
   <label for="birthday" class="size">To:</label>
  <input type="date" name="birthday" style="margin-left: 17px;"></td>
      <td><button type="button" class="btn cur-p btn-outline-success">Approved</button>
  <button type="button" class="btn cur-p btn-outline-danger"> Not Approved</button></td>
    </tr>
    <tr>
      <td scope="row">02.</td>
      <td>Rahul</td>
      <td>Singh</td>
      <td>Sir,I am forget the punch</td>
      <td><label for="birthday" class="size">From:</label>
  <input type="date" name="birthday"></br>
   <label for="birthday" class="size">To:</label>
  <input type="date" name="birthday" style="margin-left: 17px;"></td>
      <td><button type="button" class="btn cur-p btn-outline-success">Approved</button>
  <button type="button" class="btn cur-p btn-outline-danger"> Not Approved</button></td>
    </tr>
    
  </tbody>
</table>


                  </div>
               </div>
                     <!-- footer -->
                    @endSection