@extends('employee.layouts.main') 
@section('main')
<!-- end topbar -->
<!-- dashboard inner -->
<div class="midde_cont py-2">
    <div class="container-fluid">
        <div class="row my-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5>Financial Year</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form id="add-financial-year">
                            <div class="row">
                                <div class="col-md-10">
                                    {{-- <label>Financial Year</label> --}}
                                    <input type="text" name="financial_year" class="form-control" placeholder="2022-23">
                                </div>
                                <div class="col">
                                    {{-- <label>Financial Year</label> --}}
                                    <input type="submit" value="Submit" class="btn btn-success  w-100">
                                </div>
                            </div>
                            
                        </form>
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
                                <th>Financial Year</th>
                                <th>Current Status</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$item->financial_year}}</td>
                                        <td>
                                            @if ($item->current_status==1)
                                                <span class="text-success">Active</span>
                                            @else
                                                <span class="text-danger">In-Active</span>
                                            @endif
                                            
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)"  class="text-primary" ><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a href="javascript:void(0)"  class="text-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        <div class="row d-none">
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
                                
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

    

       
    </div>
</div>
@endsection