@extends('employee.layouts.main')
@section('main')
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont py-2">
        <div class="container-fluid">
            <div class="row d-none">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="font-weight-bold ">LTC Claim Request : <span class="text-info"> Pending</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5>LTC Claim Request Form</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#applyLtc" role="tab">Apply</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pend_ltc_req" role="tab">LTC
                                        Requests</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#app_cea_req" role="tab">CEA Approved
                                        Requests</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#rej_cea_req" role="tab">CEA Rejected
                                        Requests</a>
                                </li>


                            </ul><!-- Tab panes -->


                            <div class="tab-content">
                                <div class="tab-pane active" id="applyLtc" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="claimLTCBenifit">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="font-weight-bold">Employee</label>
                                                        <select class="form-control empSearch" style="width:100%" name="empId">
                                                            <option value="0">Select Employee</option>
                                                            @foreach ($Employees as $emp)
                                                                <option value="{{ $emp->emp_id }}">{{ $emp->name }}
                                                                    ({{ $emp->emp_id }})
                                                                </option>
                                                            @endforeach
                
                                                        </select>
                                                    </div>
                                                   <div class="col">
                                                        <label class="font-weight-bold">Transport</label>
                                                        <select class="form-control"  name="motrans" id="motrans">
                                                            <option value="0">Select </option>
                                                            <option value="Bus">Bus</option>
                                                            <option value="Flight">Flight</option>
                                                            <option value="Train">Train</option>
                                                        </select>
                                                   </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Claim Amount</label>
                                                        <input type="text" name="amount" class="form-control"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Document Upload</label>
                                                        <input type="file" name="claimDoc">
                                                    </div>
                                                   
                                                </div>
                                                <div class="row mt-2 d-none" id="trainTicket">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Train No</label>
                
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Train Name</label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">PNR No</label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Seat Class</label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Seat No.</label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Passenger Name</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col pt-3">
                                                      <hr>
                
                                                        <input type="submit" value="Request Claim" class="btn btn-success">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="pend_ltc_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col text-center">
                                                    
                                                            <span class="font-weight-bold ">Employee LTC Claim Request List</span>
                                                        
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    
                                                            <table class="table table-bordered myTable">
                                                                <thead>
                                                                    <th>S.No</th>
                                                                    <th>Emp. Id</th>
                                                                    <th>Name</th>
                                                                    <th>Claim Amount</th>
                                                                    <th class="text-center">Details</th>
                                                                    <th class="text-center">Status</th>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data as $d)
                                                                        <tr>
                                                                            <td>{{ $d->id }}</td>
                                                                            <td><a href="{{route('view-ltc-form',$d->id)}}" class="text-primary">{{$d->emp_id }}</a></td>
                                                                            <td>{{ $d->empdetails->name }}</td>
                                                                            <td>Rs. {{ $d->claim_amount }}</td>
                                                                            <td><a href="{{route('view-ltc-form',$d->id)}}" class="text-primary">View Details</a></td>
                                                                            <td class="text-center">
                                                                                <a href="javascript:void(0)" class="text-info editLtcEmpClaimReq"><i
                                                                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                                                                <a href="javascript:void(0)" class="text-danger deleteEmpClaimReq"><i
                                                                                        class="fa fa-trash" aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                
                                                                </tbody>
                                
                                                            </table>
                                                        
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
        

            <!-- row -->


        </div>
    </div>
@endsection


<!-- Modal -->
