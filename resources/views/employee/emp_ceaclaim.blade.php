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
                            <p class="font-weight-bold ">Child Education Allowance Claim Request : <span class="text-info"> Pending</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5>Child Education Allowance Claim Request Form</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form id="claimCEABenifit">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="font-weight-bold">Employee</label>
                                        <select class="form-control empSearch" style="width:100%" name="empId" id="empIdCEA">
                                            <option value="0">Select Employee</option>
                                            @foreach ($Employees as $emp)
                                                <option value="{{ $emp->emp_id }}">{{ $emp->name }}
                                                    ({{ $emp->emp_id }})
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                   <div class="col">
                                        <label class="font-weight-bold">Child</label>
                                        <select class="form-control"  name="child_name" id="cea_child_name">
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
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <span class="font-weight-bold ">Employee LTC Claim Request List</span>
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
                                    <th>Emp. Id</th>
                                    <th>Name</th>
                                    <th>Claim Amount</th>
                                    <th>Details</th>
                                    <th class="text-center">Status</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $d->id }}</td>
                                            <td><a href="{{route('empcealaim',$d->id)}}" class="text-primary">{{$d->emp_id }}</a></td>
                                            <td>{{ $d->empdetails->name }}</td>
                                            <td>Rs. {{ $d->amount_claimed }}</td>
                                            <td><a href="{{route('empcealaim',$d->id)}}" class="text-primary" >View Forms</a></td>
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

            <!-- row -->


        </div>
    </div>
@endsection


<!-- Modal -->
<div class="modal fade" id="LtcClaimRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">LTC Claim Request</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <form id="claimMedicalReqChange">
                    <div class="row text-center">
                        <div class="col">
                            <h5 >Current Status: <span class="text-success">Pending</span></h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col text-right font-weight-bold">
                            Employee Id:
                        </div>
                        <div class="col text-left">
                            <span id="empId">EMP018475</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right font-weight-bold">
                            Employee Name:
                        </div>
                        <div class="col text-left">
                            <span id="empName">Rahul Kumar</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right font-weight-bold">
                            Claimed Amount:
                        </div>
                        <div class="col text-left">
                            Rs. <span id="empName">5000</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right font-weight-bold">
                            Document Uploaded:
                        </div>
                        <div class="col text-left">
                            <a href="javascript:void(0)" class="text-danger">View</a>
                        </div>
                        <hr>
                    </div>
                    <div class="row d-none">
                       <div class="col-md-3"></div>
                        <div class="col text-center">
                            <select class="form-control">
                                <option value="0">Select</option>
                                <option value="1">Approve</option>
                                <option value="2">Reject</option>
                            </select>
                            {{-- <a href="javascript:void(0)" class="text-danger">View</a> --}}
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row px-5">
                        <div class="col">
                            <input type="submit" value="Approve" class="btn btn-success"
                                style="width:100%;heigh:100%">
                        </div>
                        <div class="col">
                            <input type="submit" value="Rejected" class="btn btn-danger"
                                style="width:100%;heigh:100%">
                        </div>
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
