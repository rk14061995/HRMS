@extends('employee.layouts.main')
@section('main')
    <style>
       
    </style>
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <span class="font-weight-bold ">Employee Job History</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered myTable ">
                                <thead>
                                    <th class="text-center">S.No</th>
                                    <th class="text-center">Emp ID</th>
                                    <th class="text-center">Emp Name</th>
                                    <th class="text-center">Designation</th>
                                    <th class="text-center">Unit No</th>
                                    <th class="text-center">Unit name</th>
                                    <th class="text-center">Unit Incharge</th>
                                    <th class="text-center">Action</th>
                                </thead>

                                <tbody class="text-center">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                      
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$d->emp_id}}</td>
                                            <td>{{$d->empdetails->name}}</td>
                                            <td>{{$d->designation}}</td>
                                            <td>{{$d->unit_no}}</td>
                                            <td>{{$d->unit_name}}</td>
                                            <td>{{$d->unit_no}}</td>
               
                                            <td>
                                                <a href="javascript:void(0)" class="text-success editEmployeeDetails" data-id="{{$d->id}}"><i
                                                    class="fa fa-edit" aria-hidden="true"  ></i></a>
                                                <a href="javascript:void(0)" class="text-danger deleteEmpAttendanceData" data-id="{{$d->id}}"><i
                                                        class="fa fa-trash" aria-hidden="true"  ></i></a>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
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
