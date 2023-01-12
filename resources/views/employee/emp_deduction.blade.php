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
                            <p class="font-weight-bold ">Deduction</span> </p>
                        </div>
                    </div>
                </div>
            </div>


       
            <div class="row my-1">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('empdeductionpost') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col text-center">
                                        <span class="font-weight-bold"> Deduction Slip</span>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Unit Id</label>
                                        <input type="text" class="form-control" name="uid" placeholder="Unit Id">
                                    </div>
                                    <div class="col">
                                        <label>GPF</label>
                                        <input type="text" class="form-control" name="gpf"><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>GPF Ref</label>
                                        <input type="text" class="form-control" name="gpf_ref">
                                    </div>
                                    <div class="col">
                                        <label>EIHS</label>
                                        <input type="text" class="form-control" name="eihs"><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>F ADV</label>
                                        <input type="text" class="form-control" name="f_adv">
                                    </div>
                                    <div class="col">
                                        <label>RENT REC</label>
                                        <input type="text" class="form-control" name="rent_rec"><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <label>MISC</label>
                                        <input type="text" class="form-control" name="misc">
                                    </div>
                                    <div class="col">
                                        <label>TAX</label>
                                        <input type="text" class="form-control" name="tax"><br>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>CGHS</label>
                                        <input type="text" class="form-control" name="cghs">
                                    </div>
                           </div>
                                


                                <hr>
                                <input type="submit" value="Submit" class="btn btn-success">
                                {{-- <input type="date" class="form-control" > --}}
                            </form>
                        </div>
                    </div>
                </div>
               



            </div>
           
            

            <!-- row -->


        </div>
    </div>
@endsection
