@extends('employee.layouts.main')
@section('main')
    <style>
       
    </style>
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <span class="font-weight-bold ">Mark Employee Attendace</span>
                            {{-- <hr> --}}
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
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Check IN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Check OUT</a>
                                </li>

                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <form id="markAttendance">
                                        <div class="row">
                                            <div class="col">
                                                {{-- <label>Employee</label>// --}}
                                                <select class="form-control empSearch" style="width:100%" name="empId">
                                                    <option value="0">Select Employee</option>
                                                    @foreach ($Employees as $emp)
                                                        <option value="{{ $emp->emp_id }}">{{ $emp->name }}
                                                            ({{ $emp->emp_id }}) </option>
                                                    @endforeach
        
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="date" name="date" id="mark_empAttnDate" 
                                                    class="form-control">
                                            </div>
                                            <div class="col">
                                                {{-- <label>Time</label> --}}
                                                <input type="time" name="time" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                {{-- <label> </label><br> --}}
                                                <input type="submit" value="Mark Attendance - Check IN" class="btn btn-success"
                                                    style="width:100%;heigh:100%">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <form id="markAttendance">
                                        <div class="row">
                                            
                                            <div class="col">
                                                {{-- <label>Employee</label>// --}}
                                                <input type="hidden" name="attendId" id="attendId" value=""
                                                    class="form-control">
                                                <select class="form-control empSearch" id="empCheckoutID" style="width:100%" name="empId">
                                                    <option value="0">Select Employee</option>
                                                    @foreach ($dataOut as $emp)
                                                        <option value="{{ $emp->id }}">{{ $emp->empdetails->empName }}
                                                            ({{ $emp->emp_id }}) </option>
                                                    @endforeach
        
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="date" name="date" id="mark_checkOutAttnd"
                                                    class="form-control">
                                                    
                                            </div>
                                            <div class="col">
                                                {{-- <label>Time</label> --}}
                                                <input type="time" name="time" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                {{-- <label> </label><br> --}}
                                                <input type="submit" value="Mark Attendance - Check OUT" class="btn btn-danger"
                                                    style="width:100%;heigh:100%">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <span class="font-weight-bold ">Employee Attendance History</span>
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
                                    <th class="text-center">Attendance Date</th>
                                    <th class="text-center">Attendance In-Time</th>
                                    <th class="text-center">Attendance Out-Time</th>
                                    <th class="text-center">Working Time</th>
                                    <th class="text-center">Attendance Status</th>
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
                                        @php
                                            // $empD=$d->empdetails;
                                            // echo '<pre>';
                                            // print_r($d->toArray());
                                        @endphp
                                        <tr>
                                            @php
                                                $time1 = new DateTime($d->attendance_time_in);
                                                $time2 = new DateTime($d->attendance_time_out);
                                                $interval = $time1->diff($time2);
                                                // print_r($interval);
                                                
                                            @endphp     
                                            <td>{{ $i }}</td>
                                            <td>{{ $d->emp_id }}</td>
                                            <td>{{ $d->empdetails->empName }}</td>
                                            <td>{{ date('d-m-Y', strtotime($d->attendance_date)) }}</td>
                                            <td>{{ date('h:i:s A', strtotime($d->attendance_time_in)) }}</td>
                                            <td>{{ date('h:i:s A', strtotime($d->attendance_time_out)) }}</td>
                                            <td>{{  $interval->format('%h h - %i m')}}</td>
                                            <td>

                                                @if ($d->absent_present == 1)
                                                    <span class="text-success">Present</span>
                                                @else
                                                    <span class="text-danger">Absent</span>
                                                @endif
                                                {{-- @if ($d->absent_present == 1) --}}
                                                @php
                                                    $atnArray = ['1', '0'];
                                                    // echo $d->absent_present = rand(1, 0);
                                                @endphp
                                                <select class="form-control text-center d-none" name="changeAttendance"
                                                    id="changeAttendance">
                                                    @foreach ($atnArray as $atn)
                                                        <?php
                                                        $atnStatus = ' ';
                                                        ?>

                                                        @if ($d->absent_present == $atn)
                                                            {{ $atnStatus }}
                                                            @if ($atn == 1)
                                                                @php
                                                                    $atnStatus = 'Present';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $atnStatus = 'Absent';
                                                                @endphp
                                                            @endif
                                                            <option value="{{ $atn }}" selected>
                                                                {{ $atnStatus }}
                                                            </option>
                                                        @else
                                                            @if ($atn == 1)
                                                                @php
                                                                    $atnStatus = 'Present';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $atnStatus = 'Absent';
                                                                @endphp
                                                            @endif
                                                            <option value="{{ $atn }}">{{ $atnStatus }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                    {{-- <option value="0">Absent</option> --}}
                                                </select>
                                            </td>
                                            {{-- <td>9721181225</td> --}}
                                            <td>
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
