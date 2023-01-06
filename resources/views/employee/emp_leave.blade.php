@extends('employee.layouts.main') 
@section('main')
<!-- end topbar -->
<!-- dashboard inner -->
<div class="midde_cont py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                    <span class="font-weight-bold ">Employee Leave History</span>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered myTable">
                            <thead>
                                <th>S.No</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>0001</td>
                                        <td>Raj</td>
                                        <td>Php developer</td>
                                        <td>Noida Sector-37</td>
                                        <td>9721181225</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- row -->

       
    </div>
</div>
@endsection