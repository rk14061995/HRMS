@extends('employee.layouts.main')
@section('main')
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont py-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="font-weight-bold ">Generate Salary Slip</span> </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row my-1">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form id="apply-for-retirement">
                                <div class="row">
                                    <div class="col text-center">
                                        <span class="font-weight-bold"> Generate Slip</span>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Employee Id</label>
                                        <input type="text" class="form-control" name="empId">
                                    </div>
                                    <div class="col">
                                        <label>Month</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Employee Id</label>
                                        <input type="text" class="form-control" name="empId">
                                    </div>
                                    <div class="col">
                                        <label>Month</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Employee Id</label>
                                        <input type="text" class="form-control" name="empId">
                                    </div>
                                    <div class="col">
                                        <label>Month</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <label>Employee Id</label>
                                        <input type="text" class="form-control" name="empId">
                                    </div>
                                    <div class="col">
                                        <label>Month</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>


                                <hr>
                                <input type="submit" value="Submit" class="btn btn-success">
                                {{-- <input type="date" class="form-control" > --}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.hrcabin.com/wp-content/uploads/2022/09/Salary-slip-format-in-Excel-download.png" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <span class="font-weight-bold ">Employee Salary Slip</span>
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
                                            <td> Reason Comes here</td>
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

            <!-- row -->


        </div>
    </div>
@endsection
