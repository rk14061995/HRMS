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
                            <p class="font-weight-bold ">Leave Request : <span class="text-info"> Pending</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none row my-1">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="font-weight-bold ">Total Leaves Remaining (Current Year) : <span class="text-info">
                                    60</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="font-weight-bold ">Total Leaves Remaining (Lifetime) : <span class="text-info">
                                    600</span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5>Leave Request Form</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form id="apply-for-retirement">
                                <label>Month</label>
                                <select class="form-control">
                                    <option>Select</option>
                                </select>

                                <hr>
                                <input type="submit" value="Submit" class="btn btn-success">
                                {{-- <input type="date" class="form-control" > --}}
                            </form>
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
