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
                            Employee LTC Deatils - <span class="font-weight-bold text-primary" style="font-size:15px">{{$Employees->name}} ({{$id}})</span>
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
                                    <a class="nav-link active" data-toggle="tab" href="#pending_req" role="tab">Pending Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#apprvd_ltc" role="tab">Approved LTC</a>
                                </li>
                               

                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="pending_req" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">

                                            <table class="table table-bordered myTable">
                                                <thead>
                                                    <th>S.No</th>
                                                    <th>Claim Amount</th>
                                                    <th class="text-center">Details</th>
                                                    <th class="text-center">Status</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($claimData as $d)
                                                        <tr>
                                                            <td>{{ $d->id }}</td>
                                                            
                                                            <td >Rs. {{ $d->claim_amount }}</td>
                                                            <td class="text-center"><a href="javascript:void(0)" class="viewLtcDoc text-primary" data-empid="{{$d->emp_id}}">View Documents</a></td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0)"><i class="fa fa-print" aria-hidden="true"></i></a>
                                                                <a href="javascript:void(0)" class="text-info editLtcEmpClaimReq"><i
                                                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                                                <a href="javascript:void(0)" class="text-danger deleteEmpClaimReq"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                
                                                </tbody>
                
                                            </table>
                                            <form id="add-emp-bank-details-form" class="d-none">
                                                        
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>

                                                    </div>
                                                    <div class="col">
                                                        <label>Acc Holder Name</label>
                                                        <input type="text" name="accHolder" id="empAccHolder"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Bank Name</label>
                                                        <input type="text" name="bankName" id="empBankName" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Account No.</label>
                                                        <input type="text" name="accNo" id="empAccNo" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>IFSC</label>
                                                        <input type="text" name="isfc" id="empIsfc" class="form-control">
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
                                    
                                    <div class="card mt-1 d-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="font-weight-bold">Employee Bank Details</label>
                                                    <hr>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <table class="table table-bordered myTable " id="jsTable">
                                                        <thead>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Bank Name</th>
                                                            <th class="text-center">Account Holder</th>
                                                            <th class="text-center">Account No.</th>
                                                            <th class="text-center">ISFC</th>
                                                            <th class="text-center">Action</th>
                                                            {{-- <th>Designation</th>
                                                                <th>Address</th> --}}
                                                            {{-- <th>Mobile No.</th> --}}
                                                        </thead>

                                                        <tbody class="text-center">
                                                            @php
                                                                $i = 1;
                                                            @endphp
                                                            

                                                        </tbody>


                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane " id="apprvd_ltc" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-bank-details-form">
                                                        
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>

                                                    </div>
                                                    <div class="col">
                                                        <label>Acc Holder Name</label>
                                                        <input type="text" name="accHolder" id="empAccHolder"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Bank Name</label>
                                                        <input type="text" name="bankName" id="empBankName" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Account No.</label>
                                                        <input type="text" name="accNo" id="empAccNo" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>IFSC</label>
                                                        <input type="text" name="isfc" id="empIsfc" class="form-control">
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
                                    
                                    <div class="card mt-1">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="font-weight-bold">Employee Bank Details</label>
                                                    <hr>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <table class="table table-bordered myTable " id="jsTable">
                                                        <thead>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Bank Name</th>
                                                            <th class="text-center">Account Holder</th>
                                                            <th class="text-center">Account No.</th>
                                                            <th class="text-center">ISFC</th>
                                                            <th class="text-center">Action</th>
                                                            {{-- <th>Designation</th>
                                                                <th>Address</th> --}}
                                                            {{-- <th>Mobile No.</th> --}}
                                                        </thead>

                                                        <tbody class="text-center">
                                                            @php
                                                                $i = 1;
                                                            @endphp
                                                           

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
<div class="modal fade" id="ltcModalDocList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">LTC Claim Request</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <ul>
                    <li><a href="{{route('view-ltc-claim-req-form',$id)}}" class="text-primary">LTC Claim Request <i class="fa fa-print" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('view-ltc-claim-Final-form',$id)}}" class="text-primary">LTC Claim Final <i class="fa fa-print" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('view-ltc-claim-payment-rcvd-form',$id)}}" class="text-primary">Recieved Payment <i class="fa fa-print" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('view-ltc-claim-den-form',$id)}}" class="text-primary">Dependent Certificate <i class="fa fa-print" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('view-ltc-claim-counter-signed-form',$id)}}" class="text-primary">COUNTERSIGNED AS CONRRECT CLAIM <i class="fa fa-print" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
