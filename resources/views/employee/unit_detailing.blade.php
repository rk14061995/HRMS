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
                             <span class="font-weight-bold text-primary" style="font-size:15px">Unit Details Page</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
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
                                    <a class="nav-link active" data-toggle="tab" href="#basic_unitdetails" role="tab">Unit
                                        Details</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#dependent_details" role="tab">Dependent</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#bank_details" role="tab">Bank Details</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#pf_details" role="tab">PF Account</a>
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
                                <div class="tab-pane active" id="basic_unitdetails" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-new-unit-detail-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Unit Data</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <label>Unit Name</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="empUnitName" value="{{!empty($data->unit_name) ? $data->unit_name: 'Station Workshop EME' }}" placeholder="eg. Station Workshop EME" class="form-control" required>
                                                    </div>

                                                    <div class="col">
                                                        <label>Unit No/Code</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="empUnitNo" value="{{!empty($data->unit_no) ? $data->unit_no: '3303' }}" placeholder="eg. 3303" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label>Unit Incharge</label><sup class="text-danger">*</sup>
                                                        <select class="empSearch" style="width:100% !important" name="unitInchg " id="unitInchg" required>
                                                            <option value="0">Select</option>
                                                                @foreach ($Employees as  $emp)
                                                                @if ($data->unit_incharge_id==$emp->emp_id)
                                                                <option value="{{ $emp->name }}" selected>{{ $emp->name }} (
                                                                    {{ $emp->emp_id }} )</option>
                                                                @else
                                                                <option value="{{ $emp->name }}">{{ $emp->name }} (
                                                                    {{ $emp->emp_id }} )</option>
                                                                @endif
                                                                
                                                            @endforeach

                                                            {{-- <option value="2">Apprentice</option> --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Unit Address</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="unitAddress" value="{{!empty($data->unit_address) ? $data->unit_address: 'Delhi Cantt' }}" placeholder="eg. Delhi Cantt" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label>City</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="unitCity" value="{{!empty($data->unit_city) ? $data->unit_city: 'New Delhi' }}" placeholder="eg. New Delhi" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label>Pin Code</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="unitPcode" value="{{!empty($data->unit_pincode) ? $data->unit_pincode: '110010' }}" placeholder="eg. 110010" class="form-control" required>
                                                    </div>
                                                    
                                                   

                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>InCharge Designation</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="unitInchgDesig" value="{{!empty($data->unit_incharge_Designation) ? $data->unit_incharge_Designation: 'AEE' }}" placeholder="eg. AEE" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label>Office Name</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="unitOfficename" value="C{{!empty($data->unit_name) ? $data->unit_name: 'Station Workshop EME' }}iv Est officer" placeholder="eg. Civ Est officer" class="form-control" required>
                                                    </div>
                                                    
                                                   

                                                </div>
                                               
                                               
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <label class="font-weight-bold"> Contact Information</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Office Email</label>
                                                        <input type="email" name="ofcEmail" value="{{!empty($data->unit_name) ? $data->unit_name: 'Station Workshop EME' }}" class="form-control">
                                                    </div>

                                                    <div class="col">
                                                        <label>Office Telephone No.</label><sup class="text-danger">*</sup>
                                                        <input type="text" name="ofcTpno" value="{{!empty($data->unit_name) ? $data->unit_name: 'Station Workshop EME' }}" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label>Alternative No.</label>
                                                        <input type="text" name="ofcAlttNo" value="{{!empty($data->unit_name) ? $data->unit_name: 'Station Workshop EME' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Temporary Address</label>
                                                        <textarea name="empTempAddress" aria-valuemax="{{!empty($data->unit_name) ? $data->unit_name: 'Station Workshop EME' }}" class="form-control"></textarea>
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
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection
