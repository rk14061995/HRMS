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
                            Employee Deatils - <span class="font-weight-bold text-primary" style="font-size:15px">{{$data->name}} ({{$id}})</span>
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
                                    <a class="nav-link active" data-toggle="tab" href="#basic_details" role="tab">Basic
                                        Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#dependent_details" role="tab">Dependent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bank_details" role="tab">Bank Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pf_details" role="tab">PF Account</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#emp_skills" role="tab">Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#emp_job_history" role="tab">Job History</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link " data-toggle="tab" href="#emp_apply_cghs" role="tab">CHGS</a>
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
                                                        <input type="text" name="empName" value="{{$data->name}}" class="form-control">
                                                    </div>

                                                    <div class="col">
                                                        <label>Date of Birth</label>
                                                        <input type="date" name="empDob" id="empDob"
                                                            class="form-control" value="{{$data->dob}}">
                                                    </div>
                                                    <div class="col">
                                                        <label>Gender</label>
                                                        @php
                                                            $gender=array('M'=>"Male",'F'=>"Femail",'O'=>"Prefer Not To Say");
                                                        @endphp
                                                        <select class="form-control" name="empGender">
                                                            <option value="0">Select</option>
                                                            @foreach ($gender as $gd => $value)
                                                                @if ($data->gender==$gd)
                                                                <option value="{{$gd}}" selected>{{$value}}</option>
                                                                @else
                                                                <option value="{{$gd}}" >{{$value}}</option>
                                                                @endif
                                                            @endforeach
                                                            {{-- <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Prefer Not To Say</option> --}}
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Employee ID</label>
                                                        <input type="text" name="empId" class="form-control" value="{{$data->emp_id}}" readonly>
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
                                                            @if ($data->grade==$gd->id)
                                                                <option value="{{$gd->id}}" selected>{{$gd->grade_name}}</option>
                                                            @else
                                                                <option value="{{$gd->id}}">{{$gd->grade_name}}</option>
                                                            @endif
                                                                
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row my-1">
                                                    <div class="col">
                                                        <label>Date of Joining</label>
                                                        <input type="date" name="empDoj" id="empDoj"
                                                            class="form-control" value="{{$data->do_joining}}">
                                                    </div>
                                                    <div class="col">
                                                        <label>Date of Retirement</label>
                                                        <input type="date" name="empDort" id="empDort"
                                                            class="form-control" value="{{$data->do_retirement}}">
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
                                                        <input type="text" name="empGpf" class="form-control" value="{{$data->gpf_no}}">
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
                                <div class="tab-pane " id="bank_details" role="tabpanel">
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
                                                            @foreach ($bankDetails as $bDtl)
                                                                <tr>
                                                                    <td>{{ $i }}</td>
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
                                <div class="tab-pane " id="dependent_details" role="tabpanel">
                                    
                                    <div class="card mt-1">
                                        <div class="card-body">

                                            <form id="add-new-emp-dependant-form">
                                                @csrf
                                                <div class="row ">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Add Dependent Details</label>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label>
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>
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
                                                                        <select class="form-control" name="rel[]">
                                                                            <option value="0">Select Relation</option>
                                                                            <option value="Father">Father</option>
                                                                            <option value="Mother">Mother</option>
                                                                            <option value="Wife">Wife</option>
                                                                            <option value="Husband">Husband</option>
                                                                            <option value="Child">Child</option>
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
                                                        <button type="Submit" class="btn btn-success">Add </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Dependent Name</th>
                                                    <th class="text-center">Dependent RelationShip</th>
                                                    <th class="text-center">Dependent ID</th>
                                                    <th class="text-center">Document</th>
                                                    <th class="text-center">Action</th>
                                                </thead>
                
                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($dependntDetails as $d)
                                                      
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$d->dep_name}}</td>
                                                            <td>{{$d->relation}}</td>
                                                            <td>{{$d->id_no}}</td>
                                                            <td>{{$d->doc_path}}</td>
                                                           
                               
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
                                <div class="tab-pane " id="emp_skills" role="tabpanel">
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
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>
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
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Primary Skill</th>
                                                    <th class="text-center">Secondary Skill</th>
                                                    <th class="text-center">Action</th>
                                                </thead>
                
                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($skillDetails as $d)
                                                      
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$d->primary_skill}}</td>
                                                            <td>{{$d->secondary_skill}}</td>
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
                                <div class="tab-pane  " id="emp_job_history" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-job-details-form">
                                                        
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>

                                                    </div>
                                                    <div class="col">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" id="designation" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Unit No.</label>
                                                        <input type="text" name="unitNo" id="UnitNo" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Unit Name</label>
                                                        <input type="text" name="unitName" id="unitName" class="form-control">
                                                    </div>
                                                    
                                                   
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Unit Incharge</label>
                                                        <input type="text" name="unitIncharge" id="unitIncharge" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Job Status</label>
                                                        <select class="form-control" name="job_status" id="job_status">
                                                            <option value='1'>Current Working</option>
                                                            <option value='0'>Previous Post</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="col prevDate d-none">
                                                        <label>From</label>
                                                        <input type="date" name="from_prev" class="form-control">
                                                    </div>

                                                    <div class="col prevDate d-none">
                                                        <label>To</label>
                                                        <input type="date" name="to_prev" class="form-control">
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
                                                    <th class="text-center">Job Status</th>
                                                    <th class="text-center">Action</th>
                                                </thead>
                
                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($jobDetails as $d)
                                                      
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$d->emp_id}}</td>
                                                            <td>{{$d->empdetails->name}}</td>
                                                            <td>{{$d->designation}}</td>
                                                            <td>{{$d->unit_no}}</td>
                                                            <td>{{$d->unit_name}}</td>
                                                            <td>
                                                              
                                                                   {{$d->unit_incharge_id}} 
                                                               
                                                            </td>
                                                            <td>
                                                                @if ($d->unit_job_status==1)
                                                                    <span class="text-success">Current Posting</span>
                                                                @else
                                                                <span class="text-dange">Previous Posting</span>
                                                                @endif
                                                            </td>
                                                            
                               
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
                                <div class="tab-pane " id="pf_details" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="add-emp-pf-details-form">
                                                        
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Employee Id</label><br>
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>

                                                    </div>
                                                    
                                                    <div class="col">
                                                        <label>Account No.</label>
                                                        <input type="text" name="accNo" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label>Nominee</label>
                                                        <select class="form-control" name="nominee">
                                                            <option value="0">Select</option>
                                                            @foreach ($dependntDetails as $dpd)
                                                                <option value="{{$dpd->id}}">{{$dpd->dep_name}} ({{$dpd->relation}})</option>
                                                            @endforeach
                                                        </select>
                                                        
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
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Account</th>
                                                    <th class="text-center">Nominee</th>
                                                    
                                                    <th class="text-center">Action</th>
                                                </thead>
                
                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($pfDetails as $d)
                                                      
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$d->pf_acc_no}}</td>
                                                            <td> 
                                                                @if ($d->nomineeDetails->dep_name)
                                                                    {{$d->nomineeDetails->dep_name}} ({{$d->nomineeDetails->relation}})
                                                                @else
                                                                    NA
                                                                @endif
                                                                
                                                            </td>
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
                                <div class="tab-pane " id="emp_apply_cghs" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="emp-cghs-data">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="font-weight-bold">CGHS Facility</label>
                                                       
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" value="1" name="isCghsTrue" id="isCghsTrue"> Apply For CGHS
                                                        
                                                    </div>
                                                </div>
                                                <div class="row d-none">
                                                    <div class="col">
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row my-2 cghsForm d-none">
                                                    <div class="col">
                                                        <label class="font-weight-bold">Employee Id</label>
                                                        <input type="text" class="form-control" name="empId" value="{{$id}}" readonly>
                                                    </div>

                                                  

                                                </div>
                                                <div class="row cghsForm d-none">
                                                    <div class="col">
                                                        <table class="table">
                                                            <thead>
                                                                <th>S.No</th>
                                                                <th>Dependent Name</th>
                                                                <th>Dependent D.O.B</th>
                                                                <th>Action</th>
                                                                
                                                            </thead>
                                                            <tbody id="addDependDataForCghs">

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <select class="form-control" name="dependent[]">
                                                                            <option value="0">Select Dependent</option>
                                                                            @foreach ($dependntDetails as $d)
                                                                                <option value="{{$d->id}}">{{$d->dep_name}} ({{$d->relation}})</option>
                                                                                
                                                                                @php
                                                                                    $i++;
                                                                                @endphp
                                                                            @endforeach
                                                                          
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input type="date" name="dob[]"
                                                                            class="form-control"
                                                                            placeholder="Enter Dependent Id No.">
                                                                    </td>
                                                                    <td>
                                                                        <a href="javascript:void(0)"
                                                                            class="btn btn-outline-success w-100 text-center addCGSHDependField">Add
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>


                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row d-none">
                                                    <div class="col">
                                                        <hr>
                                                        <input type="submit" class="btn btn-success" value="Add Skill">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card d-none">
                                        <div class="card-body">
                                            <table class="table table-bordered myTable ">
                                                <thead>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Primary Skill</th>
                                                    <th class="text-center">Secondary Skill</th>
                                                    <th class="text-center">Action</th>
                                                </thead>
                
                                                <tbody class="text-center">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($skillDetails as $d)
                                                      
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$d->primary_skill}}</td>
                                                            <td>{{$d->secondary_skill}}</td>
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
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection
