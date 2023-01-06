@extends('admin.layouts.main') @section('main')
<!-- end topbar -->
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Attendance Regulation</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col">

              <div class="card">
                <div class="card-body">
                  <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><b>Employee Id</b></th>
                            <th scope="col"><b>First Name</b></th>
                            <th scope="col"><b>Last Name</b></th>
                            <th scope="col"><b>Description</b></th>
                            <th scope="col"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">001.</td>
                            <td>Rahul</td>
                            <td>Singh</td>
                            <td>Sir,I am forget the punch</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn cur-p btn-outline-success"
                                >
                                    Approved
                                </button>
                                <button
                                    type="button"
                                    class="btn cur-p btn-outline-danger"
                                >
                                    Not Approved
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">002.</td>
                            <td>Rahul</td>
                            <td>Singh</td>
                            <td>Sir,I am forget the punch</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn cur-p btn-outline-success"
                                >
                                    Approved
                                </button>
                                <button
                                    type="button"
                                    class="btn cur-p btn-outline-danger"
                                >
                                    Not Approved
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
              </div>
                
            </div>
        </div>
        <!-- footer -->
        @endSection
    </div>
</div>
