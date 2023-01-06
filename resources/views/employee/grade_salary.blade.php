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
                            <span class="font-weight-bold ">Grade Salary Listing</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <div class="card">
                        <div class="card-body">
                            <form id="add-grade-details-form">
                                        
                                <div class="row">
                                    <div class="col">
                                        <label>Grade Name</label>
                                        <input type="text" name="grade" placeholder="example Grade A" class="form-control">

                                    </div>
                                    
                                    <div class="col">
                                        <label>Basic Pay</label>
                                        <input type="text" name="basicPay"  class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Extra Pay One</label>
                                        <input type="text" name="extraPayone"  class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Extra Pay two</label>
                                        <input type="text" name="extraPaytwo"  class="form-control">
                                    </div>
                                   
                                   
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                        <button type="Submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
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
                                    <th class="text-center">Grade Name</th>
                                    <th class="text-center">Basic Pay</th>
                                    <th class="text-center">First</th>
                                    <th class="text-center">Second</th>
                                    <th class="text-center">Action</th>
                                </thead>

                                <tbody class="text-center">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                      
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$d->grade_name}}</td>
                                            <td>{{$d->basic_pay}}</td>
                                            <td>{{$d->extra_one}}</td>                                         
                                            <td>{{$d->extra_two}}</td>
                                            
                                            <td>
                                                <a href="javascript:void(0)" class="text-success " data-id="{{$d->id}}"><i
                                                    class="fa fa-edit" aria-hidden="true"  ></i></a>
                                                <a href="javascript:void(0)" class="text-danger " data-id="{{$d->id}}"><i
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
