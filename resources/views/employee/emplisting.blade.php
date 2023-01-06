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
                            <span class="font-weight-bold ">Employee List</span>
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
                                    <th class="text-center">Date of Joining</th>
                                    <th class="text-center">Date of Retirement</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Mobile No</th>
                                    <th class="text-center">Alternative No</th>
                                    {{-- <th class="text-center">Attendance Status</th> --}}
                                    <th class="text-center">Action</th>
                                    {{-- <th>Designation</th>
                                <th>Address</th> --}}
                                    {{-- <th>Mobile No.</th> --}}
                                </thead>

                                <tbody class="text-center">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                      
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td><a href="{{route('employeDetails',$d->emp_id)}}" class="text-primary">{{$d->emp_id}}</a></td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->do_joining}}</td>
                                            <td>{{$d->do_retirement}}</td>
                                            
                                            <td>{{$d->gender}}</td>
                                            
                                            <td>{{$d->primary_mob}}</td>
                                            <td>{{$d->alternat_mob}}</td>
                                           
                                            {{-- <td>9721181225</td> --}}
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
