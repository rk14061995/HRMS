@extends('manager.layouts.main')
@section('main')
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Add Employee Profile</h2>
                    </div>
                </div>
            </div>


            <form action="{{ route('mstore') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Designation:</label>
                            <input type="text" class="form-control" placeholder="Enter Designation" name="designation">
                        </div>



                        <div class="form-group">
                            <label for="email">Mobile:</label>
                            <input type="number" class="form-control" placeholder="Enter Mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Email:</label>
                            <input type="text" class="form-control" placeholder="Enter Email" name="email">
                        </div>



                        <div class="form-group">
                            <label for="email">Grade:</label>
                            <select class="form-control" name="grade">
                                <option>Choose...</option>
                                <option value="A"name="grade">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Status:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="single"
                                    id="flexRadioDefault1" />
                                <label class="form-check-label" for="flexRadioDefault1">Single</label>
                            </div>

                            <!-- Default checked radio -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="married"
                                    id="flexRadioDefault2" />
                                <label class="form-check-label pt-1" for="flexRadioDefault2">Married</label>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Depandend:</label>
                            <input type="text" class="form-control" placeholder="Enter Depandend" name="depandend">
                        </div>
                        <div class="form-group">
                            <label for="pwd">DOB:</label>
                            <input type="date" class="form-control" name="dob">
                        </div>




                        <div class="form-group">
                            <label for="email">Location:</label>
                            <input type="text" class="form-control" placeholder="Enter Location" name="location">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Address:</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address">
                        </div>




                        <div class="form-group">
                            <label for="email">BasicPay:</label>
                            <input type="number" class="form-control" placeholder="Enter BasicPay" name="basicpay">
                        </div>


                    </div>

                </div>
                <button type="Submit" class="btn btn btn-outline-success">Submit</button>
                <a href="{{ route('mdashboard') }}" class="btn btn-outline-danger mx-2">Chancel</a>
            </form>
            <!-- footer -->
        @endsection
