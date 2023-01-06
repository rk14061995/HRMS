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
                            Add Employee Deatils
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
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Basic
                                        Details</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Bank Details</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Dependent</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Skills</a>
                                </li>

                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-new-emp-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Employee Data</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Name</label>
                                                        <input type="text" name="empName" class="form-control">
                                                    </div>

                                                    <div class="col">
                                                        <label>Date of Birth</label>
                                                        <input type="date" name="empDob" id="empDob"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Gender</label>
                                                        <select class="form-control" name="empGender">
                                                            <option value="0">Select</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Prefer Not To Say</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Employee ID</label>
                                                        <input type="text" name="empId" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Employee Type</label>
                                                        <select class="form-control" name="empType">
                                                            <option value="0">Select</option>
                                                            <option value="1">Permanent</option>
                                                            <option value="2">Apprentice</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Grade </label>
                                                        <select class="form-control" name="empGrade" id="empGrade">
                                                            <option value="0">Select</option>
                                                            @foreach ($grade as $gd)
                                                                <option value="{{$gd->id}}">{{$gd->grade_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Date of Joining</label>
                                                        <input type="date" name="empDoj" id="empDoj"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Date of Retirement</label>
                                                        <input type="date" name="empDort" id="empDort"
                                                            class="form-control">
                                                    </div>
                                                    


                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Job Type</label>
                                                        <select class="form-control" name="jobType">
                                                            <option value="0">Select</option>
                                                            <option value="IP">IP</option>
                                                            <option value="NIP">NIP</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Pension Plan</label>
                                                        <select class="form-control" name="pensionPlan">
                                                            <option value="0">Select</option>
                                                            <option value="GPF">GPF/OPS</option>
                                                            <option value="NPS">NPS</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>GPF/OPS/NPS No.</label>
                                                        <input type="text" name="empGpf" class="form-control">
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>PAN No.</label>
                                                        <input type="text" name="empPan" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <label class="font-weight-bold"> Pay Information</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Basic Pay </label>
                                                        <input type="text" name="empPay" id="empPay" value="0"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>TA/DA </label>
                                                        <input type="text" name="empPaytada" id="empPaytada"
                                                            value="0" class="form-control" readonly>
                                                    </div>
                                                    <div class="col">
                                                        <label>HRA </label>
                                                        <input type="text" name="empPayHra" id="empPayHra"
                                                            value="0" class="form-control" readonly>
                                                    </div>
                                                    <div class="col">
                                                        <label>TPT </label>
                                                        <input type="text" name="empPayTpt" id="empPayTpt"
                                                            value="0" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Pers Pay </label>
                                                        <input type="text" name="empPayPersPay" id="empPayPersPay"
                                                            value="0" class="form-control">
                                                    </div>
                                                    <div class="col ">
                                                        <label>Govt Perks </label>
                                                        <input type="text" name="empPaygprk" id="empPaygprk"
                                                            value="0" class="form-control">
                                                    </div>
                                                    <div class="col ">
                                                        <label>Total Pay</label>
                                                        <input type="text" name="empPayTotal" id="empPayTotal"
                                                            value="0" class="form-control" readonly>
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
                                                        <label>Email</label>
                                                        <input type="email" name="empEmail" class="form-control">
                                                    </div>

                                                    <div class="col">
                                                        <label>Mobile No.</label>
                                                        <input type="text" name="empMobNo" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Alternative No.</label>
                                                        <input type="text" name="empAltNo" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Temporary Address</label>
                                                        <textarea name="empTempAddress" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Permanent Address</label>
                                                        <textarea name="empPerAddress" class="form-control"></textarea>

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-2">
                                                        <label>Marriage Status</label>



                                                    </div>
                                                    <div class="col-md-3">

                                                        <input type="radio" name="empMrgStatus" value="single"
                                                            id="flexRadioDefault1" />Single

                                                        <input " type="radio" name="empMrgStatus"
                                                                value="married"  />Married
                                                          
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
                                <div class="tab-pane " id="tabs-2" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-bank-details-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Employee Bank Details</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label>Employee Id</label><br>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <select class="empSearch" style="width:100% !important" name="empId" id="empIdForBankDetail">
                                                                    <option value="0">Select</option>
                                                                        @foreach ($data as
                                                                        $emp)
                                                                    <option value="{{ $emp->emp_id }}">{{ $emp->name }} (
                                                                        {{ $emp->emp_id }} )</option>
                                                                    @endforeach

                                                                    {{-- <option value="2">Apprentice</option> --}}
                                                                </select>
                                                            </div>
                                                        </div>



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
                                                    <div class="col">
                                                        <label>Branch</label>
                                                        <input type="text" name="empBranch" id="empBranch" class="form-control">
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
                                            <div class="row">
                                                <div class="col">
                                                    <table class="table table-bordered myTable " id="jsTable">
                                                        <thead>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Emp ID</th>
                                                            <th class="text-center">Emp Name</th>
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
                                                            @foreach ($bankDetails as $bDtl)
                                                                <tr>
                                                                    <td>{{ $i }}</td>
                                                                    <td>{{ $bDtl->emp_id }}</td>
                                                                    <td>{{ $bDtl->empdetails->name }}</td>
                                                                    <td>{{ $bDtl->bank_name }}</td>
                                                                    <td>{{ $bDtl->acc_holder }}</td>
                                                                    <td>{{ $bDtl->acc_no }}</td>
                                                                    <td>{{ $bDtl->bank_isfc }}</td>
                                                                    <td>
                                                                        <a href="javascript:void(0)"
                                                                            class="text-danger deleteEmpBankData"
                                                                            data-id="{{ $bDtl->id }}"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></a>
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
                                <div class="tab-pane " id="tabs-3" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Dependent</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Employee Id</label>
                                                        <select class="form-control">
                                                            <option value="0">Select</option>
                                                            @foreach ($data as $emp)
                                                                <option value="{{ $emp->emp_id }}">{{ $emp->name }} (
                                                                    {{ $emp->emp_id }} )</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card mt-1">
                                        <div class="card-body">

                                            <form id="markAttendance">
                                                <div class="row ">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Dependent Details</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table">
                                                            <tbody id="addDependData">
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" name="dependentName[]"
                                                                            class="form-control"
                                                                            placeholder="Enter Dependent Name">
                                                                    </td>
                                                                    <td>
                                                                        <select class="form-control">
                                                                            <option value="0">Select Relation</option>
                                                                            <option value="1">Father</option>
                                                                            <option value="2">Mother</option>
                                                                            <option value="3">Child</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="dependentIdNo[]"
                                                                            class="form-control"
                                                                            placeholder="Enter Dependent Id No.">
                                                                    </td>
                                                                    <td>
                                                                        <input type="file" name="dependentFile[]">
                                                                    </td>
                                                                    <td>
                                                                        <a href="javascript:void(0)"
                                                                            class="btn btn-outline-success w-100 text-center addDependField">Add
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>


                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <button type="Submit" class="btn btn-success">UPdate </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane " id="tabs-4" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="emp-skill-data">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Skill</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Employee Id</label>
                                                        <select class="form-control" name="empId">
                                                            <option value="0">Select</option>
                                                            @foreach ($data as $emp)
                                                                <option value="{{ $emp->emp_id }}">{{ $emp->name }} (
                                                                    {{ $emp->emp_id }} )</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Primary Technology Vertical</label>
                                                        <input type="text" name="empPrmySkill" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label class="font-weight-bold">Secondary Technology Vertical</label>
                                                        <input type="text" name="empScndSkill" class="form-control">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <hr>
                                                        <input type="submit" class="btn btn-success" value="Add Skill">
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
