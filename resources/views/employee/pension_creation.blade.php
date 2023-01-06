@extends('employee.layouts.main')
@section('main')

    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont mt-2">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                             <span class="font-weight-bold text-primary" style="font-size:15px">Retirement and Pension</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2 d-none">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <label class="font-weigh-bold text-success">Total Employee: 12</label>
                        </div>
                    </div>
                    
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <label class="font-weigh-bold text-primary">Total LTC Request: 2</label>
                        </div>
                    </div>
                    
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <label class="font-weigh-bold text-danger">Total Medical Request: 4</label>
                        </div>
                    </div>
                    
                </div>
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <label class="font-weigh-bold text-primary">Total CEA Request: 5</label>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#ret_req" role="tab">Retirement Application</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#ret_app_list" role="tab">Employee Retirement List</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#pension_req" role="tab">Pension Withdrawl Request</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-toggle="tab" href="#pension_req_list" role="tab">Pension Withdrawl Request List</a>
                                </li>
                                
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#emp_skills" role="tab">Skills</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#emp_job_history" role="tab">Job History</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link " data-toggle="tab" href="#emp_apply_cghs" role="tab">CHGS</a>
                                </li>

                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="ret_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-new-ret-req-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Create Employee Retirement Request</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    
                                                    <div class="col">
                                                        <label>Employee Name</label><sup class="text-danger">*</sup>
                                                        <select class="empSearch" style="width:100% !important" name="empId" required>
                                                            <option value="0">Select</option>
                                                                @foreach ($Employees as  $emp)
                                                                
                                                                <option value="{{ $emp->emp_id }}">{{ $emp->name }} (
                                                                    {{ $emp->emp_id }} )</option>
                                                                                                                            @endforeach

                                                            {{-- <option value="2">Apprentice</option> --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <button type="Submit" class="btn btn-success">Submit Request</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                        
                                        
                                </div>
                                <div class="tab-pane " id="ret_app_list" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-new-unit-detail-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold"> Employee Retirement Request List</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <table class="table myTable">
                                                            <thead>
                                                                <th>S.no</th>
                                                                <th>Employee</th>
                                                                <th>D.O.J</th>
                                                                <th>D.O.R</th>
                                                                <th>Service Years</th>
                                                                <th>Action</th>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                @foreach ($retReq as $item)
                                                                    <tr>
                                                                        <td>{{$i}}</td>
                                                                        <td>{{$item->empdetails->name}} ({{$item->emp_id}}) </td>
                                                                        <td> {{$item->empdetails->do_joining}}</td>
                                                                        <td>{{$item->empdetails->do_retirement}}</td>
                                                                        <td>
                                                                            @php
                                                                                $time1 = new DateTime($item->empdetails->do_retirement);
                                                                                $time2 = new DateTime($item->empdetails->do_joining);
                                                                                $interval = $time1->diff($time2);
                                                                                // print_r($interval);
                                                                                
                                                                            @endphp 
                                                                            {{  $interval->format('%y years, %m months, %d days')}}    
                                                                        </td>
                                                                        <td>
                                                                            <a href="javascript:void(0)" class="text-danger" data-id="{{$item->id}}"><i
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
                                               
                                        
                                            </form>
                                        </div>
                                    </div>
                                        
                                        
                                </div>
                                <div class="tab-pane " id="pension_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-pension-req-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Create Employee Pension Request</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <label>Employee Name</label><sup class="text-danger">*</sup>
                                                        <select class="empSearch" style="width:100% !important" name="empId" required>
                                                            <option value="0">Select</option>
                                                            @foreach ($Employees as  $emp)
                                                                
                                                                <option value="{{ $emp->emp_id }}">{{ $emp->name }} (
                                                                    {{ $emp->emp_id }} )</option>
                                                             @endforeach

                                                            {{-- <option value="2">Apprentice</option> --}}
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Pension Case</label><sup class="text-danger">*</sup>
                                                        <select class="form-control" name="ret_case">
                                                            <option value="0">Select</option>
                                                            <option value="REG">Regular</option>
                                                            <option value="DTH">Death Case</option>
                                                        </select>
                                                    </div>

                                                    
                                                    
                                                </div>
                                               
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <button type="Submit" class="btn btn-success">Create Pension Request</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                        
                                        
                                </div>
                                <div class="tab-pane " id="pension_req_list" role="tabpanel">
                                    
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-new-unit-detail-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold"> Employee Retirement Request List</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <table class="table myTable">
                                                            <thead>
                                                                <th>S.no</th>
                                                                <th>Employee</th>
                                                                <th>D.O.J</th>
                                                                <th>D.O.R</th>
                                                                <th>Service Years</th>
                                                                <th>Action</th>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $k=1;
                                                                @endphp
                                                                @foreach ($pensionReq as $re)
                                                                <tr>
                                                                    @if ($re->case_type=='REG')
                                                                        @php
                                                                            $route='show-regular-pension';
                                                                        @endphp
                                                                    @else
                                                                        @php
                                                                            $route='show-other-case-pension';
                                                                        @endphp
                                                                        
                                                                    @endif
                                                                    <td>{{$k}}</td>
                                                                    <td><a href="{{route($route,$re->emp_id)}}" class="text-primary"> {{$re->empdetails->name}} ({{$re->emp_id}}) </a></td>
                                                                    <td> {{$re->empdetails->do_joining}}</td>
                                                                    <td>{{$re->empdetails->do_retirement}}</td>
                                                                    <td>
                                                                        @php
                                                                            $time1 = new DateTime($re->empdetails->do_retirement);
                                                                            $time2 = new DateTime($re->empdetails->do_joining);
                                                                            $interval = $time1->diff($time2);
                                                                            // print_r($interval);
                                                                            
                                                                        @endphp 
                                                                        {{  $interval->format('%y years, %m months, %d days')}}    
                                                                    </td>
                                                                    <td>
                                                                        <a href="javascript:void(0)" class="text-danger" data-id="{{$re->id}}"><i
                                                                            class="fa fa-trash" aria-hidden="true"  ></i></a>
                                                                    </td>
                                                                </tr>
                                                                    @php
                                                                        $k++;
                                                                    @endphp
                                                                @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                               
                                        
                                            </form>
                                        </div>
                                    </div>
                                        
                                        
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection
