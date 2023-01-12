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
                    <p class="font-weight-bold ">Leave Request : <span class="text-info"> Pending</span>    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-1 d-none">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <p class="font-weight-bold ">Total Leaves Remaining (Current Year) : <span class="text-info"> 60</span>    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <p class="font-weight-bold ">Total Leaves Remaining (Lifetime) : <span class="text-info"> 600</span>    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5>Leave Request Form</h5>
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
                                <a class="nav-link active" data-toggle="tab" href="#lv_Cate" role="tab">Leave Categories</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" data-toggle="tab" href="#add_cate" role="tab">Add Category</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" data-toggle="tab" href="#app_lv" role="tab">Apply For Leave</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" data-toggle="tab" href="#emp_lv_lst" role="tab">Employee Leave Request</a>
                            </li>
                            
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane " id="lv_Cate" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="font-weight-bold">Leave Category</label>
                                        <hr>
                                        <table class="table table-bordered myTable">
                                            <thead>
                                                <th>S.No</th>
                                                <th>Category Name</th>
                                                <th class="text-center">Days</th>
                                                <th class="text-center">Action</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $l=1;
                                                    $ttlLvs=0;
                                                @endphp
                                                @foreach ($lvCategory as $cate)
                                                    @php
                                                        $ttlLvs+=$cate->days_count;
                                                    @endphp
                                                    <tr>
                                                        <td>{{$l}}</td>
                                                        <td>{{$cate->category_name}}</td>
                                                        <td class="text-center">{{$cate->days_count}}</td>
                                                        <td class="text-center">
                                                            <a href="javascript:void(0)"  class="text-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $l++;
                                                    @endphp
                                                @endforeach
                                                
                                            </tbody>

                                        </table>
                                        <table  class="mt-3 table table-bordered">
                                            <tr class="text-right">
                                                <th colspan="4">Total Leaves : {{$ttlLvs}}</th>
                                            </tr>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="add_cate" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                       <form id="add-new-leave-category">
                                            <div class="row">
                                                <div class="col">
                                                    <label>Category Name</label>
                                                    <input type="text" class="form-control" name="category_name">
                                                </div>
                                                <div class="col">
                                                    <label>Days</label>
                                                    <input type="text" class="form-control" name="days_count">
                                                </div>
                                                <div class="col">
                                                    <label>Special Leave</label>
                                                    <select class="form-control" name="reserved_for">
                                                        <option value="0">Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <hr>
                                                    <input type="submit" value="Submit" class="btn btn-success">
                                                </div>
                                                
                                            </div>
                                       </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active" id="app_lv" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label>Employee Leave Details</label>
                                                <hr>
                                                <table class="table table-bordered "  style="font-size:12px">
                                                    <thead>
                                                      
                                                        <th>Category Name</th>
                                                        <th class="text-center">Days</th>
                                                        <th class="text-center">Pending Leaves</th>
                                                        
                                                    </thead>
                                                    <tbody>
                                                       @php
                                                           $ttlLvs=0;
                                                       @endphp
                                                        @foreach ($lvCategory as $cate)
                                                            @php
                                                                $ttlLvs+=$cate->days_count;
                                                            @endphp
                                                            <tr>
                                                             
                                                                <td>{{$cate->category_name}}</td>
                                                                <td class="text-center">{{$cate->days_count}}</td>
                                                                <td class="text-center">4</td>
                                                                
                                                            </tr>
                                                            
                                                        @endforeach
                                                        
                                                    </tbody>
        
                                                </table>
                                                <table class="table table-bordered">
                                                    <tr class="text-center">
                                                        <th>Total Leaves: {{$ttlLvs}}</th>
                                                        <th>Remaining Leaves: 49</th>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-8">
                                                <form id="apply-for-leave">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Apply For Leave</label>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Employee Id</label>
                                                            <select class="form-control empSearch" style="width:100%" name="empId">
                                                                <option value="0">Select</option>
                                                                @foreach ($data as $user)
                                                                    <option value="{{$user->emp_id}}">{{$user->name}} ({{$user->emp_id}})</option>
                                                                @endforeach     
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>Leave Category</label>
                                                            <select class="form-control" name="reserved_for">
                                                                <option value="0">Select</option>
                                                                @foreach ($lvCategory as $cate)
                                                                    <option value="{{$cate->category_name}}">{{$cate->category_name}}</option>
                                                                @endforeach     
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col">
                                                            <label>From</label>
                                                            <input type="date" name="form" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label>To</label>
                                                            <input type="date" name="to" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <hr>
                                                            <input type="submit" value="Submit" class="btn btn-success">
                                                        </div>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="emp_lv_lst" role="tabpanel">
                                <table class="table table-bordered myTable">
                                    <thead>
                                        <th>S.No</th>
                                        <th>Emp. Id</th>
                                        <th>Applicable From</th>
                                        <th>Reason</th>
                                        <th>Req Status</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>1</td>
                                                <td>123456789</td>
                                                <td>1st Jan, 2023</td>
                                                <td> Reason  Comes here</td>
                                                <td>
                                                    <span class="text-success">Approved</span>
                                                    <span class="text-info">Pending</span>
                                                    <span class="text-danger">Rejected</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-success">Approved</a>
                                                    <a href="javascript:void(0)" class="text-info">Pending</a>
                                                    <a href="javascript:void(0)" class="text-danger">Rejected</a>
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
@endsection