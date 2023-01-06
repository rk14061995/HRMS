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
                            <h5>Govt Form Uploader</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('uploadFormBody')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label class="font-weight-bold">Form Category</label>
                                        <select class="form-control empSearch" style="width:100%" name="formCategory">
                                            <option value="0">Select</option>
                                            <option value="1">Retirement</option>
                                            <option value="2">Medical Claim</option>
                                            <option value="3">LTC</option>
                                            <option value="4">Child Education Allowance</option>
                                                
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="font-weight-bold">Form Name</label>
                                        <input  type="text" class="form-control" name="form_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="font-weight-bold">Form Identifier</label>
                                        <input  type="text" class="form-control" name="form_identifier">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="font-weight-bold">Form Body</label>
                                        <textarea name="formBody" class="form-control" rows="10"></textarea>
                                        
                
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                        <input type="submit" value="Claim" class="btn btn-success"
                                            >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="card">
                        <div class="card-body">
                            <span class="font-weight-bold ">Form List</span>
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
                                    <th>Form Category</th>
                                    <th>Form Name</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($forms as $d)
                                        <tr>
                                            <td>{{ $d->id }}</td>
                                            <td>{{ $d->form_category }}</td>
                                            <td>{{ $d->form_name }}</td>
                                           
                                            <td class="text-center">
                                                <a href="{{route('pdf',$d->id)}}" class="text-info "><i
                                                    class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="javascript:void(0)" class="text-info "><i
                                                        class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="javascript:void(0)" class="text-danger "><i
                                                        class="fa fa-trash" aria-hidden="true"></i></a>

                                                {{-- <a href="javascript:void(0)" class="text-success">Approved</a>
                                            <a href="javascript:void(0)" class="text-info">Pending</a>
                                            <a href="javascript:void(0)" class="text-danger">Rejected</a> --}}
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

