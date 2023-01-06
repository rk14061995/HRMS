<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>HRMS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="frontend/images/fevicon.png' type='image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ url('frontend/css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ url('frontend/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ url('frontend/css/custom.css') }}" />
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{ url('frontend/calender/style.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/calender/demo.min.css') }}" />
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css"
        integrity="sha512-KVdV5HNnN1f6YOANbRuNxyCnqyPICKUmQusEkyeRg4X0p8K1xCdbHs32aA7pWo6WqMZk0wAzl29cItZh8oBPYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif !important;
        }

        .form-control {
            font-size: 12px !important;

        }
        select.form-control:not([size]):not([multiple]) {
            height: unset !important;
        }
        .selection{
            width: 100% !important;
        }
    </style>

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div class="sidebar_blog_2">
                    <h4><a href="{{ route('empdashboard') }}" id="super">Employee Panel</a></h4>
                    <ul class="list-unstyled components">

                        <li class="active">
                            <a href="#attendace" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                                aria-controls="attendace"><i class="fa fa-sign-out" style="color:#808B96;"></i>
                                <span>Attendace</span></a>
                            <ul class="collapse list-unstyled" id="attendace">
                                <li>
                                    <a href="{{ route('empattendancelist') }}"> <i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Attendance List</span></a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#SalaraySlip" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="SalaraySlip"><i class="fa fa-book"
                                    style="color:#808B96;"></i>
                                <span>Salaray Slip</span></a>
                            <ul class="collapse list-unstyled" id="SalaraySlip">
                                <li>
                                    <a href="{{ route('empsalslip') }}"><i class="fa fa-file-text-o"
                                        style="color:#808B96;"></i>
                                    <span>Deductions</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empsalslip') }}"><i class="fa fa-file-text-o"
                                        style="color:#808B96;"></i>
                                    <span>Salaray Slip</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('grade-salary') }}"> <i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Grade</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empsalslipcreation') }}"><i class="fa fa-file-pdf-o"
                                        style="color:#808B96;"></i>
                                    <span>Generate Salaray Slip</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('unit-details') }}"> <i class="fa fa-list"
                                    style="color:#808B96;"></i><span>Unit</span></a>
                        </li>
                        
                        <li class="">
                            <a href="#empDetails" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="empDetails"><i class="fa fa-users"
                                    style="color:#808B96;"></i>
                                <span>Employee</span></a>
                            <ul class="collapse list-unstyled" id="empDetails">
                                <li>
                                    <a href="{{ route('createEmpPage') }}"> <i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Add Employee Details</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('employee-listing') }}"> <i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Employee List</span></a>
                                </li>
                                <li class="d-none">
                                    <a href="{{ route('employee-skills') }}"> <i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Employee Skill</span></a>
                                </li>
                                <li class="d-none"  >
                                    <a href="{{ route('employee-job-history') }}"> <i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Employee Job History</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empleaveapply') }}"><i class="fa fa-plus"
                                            style="color:#808B96;"></i><span>Apply Leave</span></a>
                                    
                                </li>
                                <li>
                                    <a href="{{ route('empleavelist') }}"><i class="fa fa-list"
                                            style="color:#808B96;"></i><span>Leave History</span></a>
                                </li>


                            </ul>
                        </li>
                        <li class="">
                            <a href="#Claims" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="Claims"><i class="fa fa-users"
                                    style="color:#808B96;"></i>
                                <span>Claims</span></a>
                            <ul class="collapse list-unstyled" id="Claims">
                                <li class="d-none">
                                    <a href="{{ route('empltcclaim') }}"><i class="fa fa-unlock"
                                        style="color:#808B96;"></i>
                                    <span>LTC Claim</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empltcclaim-o') }}"><i class="fa fa-unlock"
                                        style="color:#808B96;"></i>
                                    <span>LTC Claim <sup class="text-danger">*</sup></span></a>
                                </li>
                                <li class="d-none">
                                    <a href="{{ route('empretamountcal') }}"><i class="fa fa-money"
                                        style="color:#808B96;"></i>
                                    <span>LTC Withdrawl</span></a>
                                </li>
                                <li><a href="{{ route('empmedicalclaim') }}"><i class="fa fa-heartbeat"
                                    style="color:#808B96;"></i>
                                <span>Medical Claim</span></a></li>
                                <li><a href="{{ route('empceaclaim') }}"><i class="fa fa-heartbeat"
                                    style="color:#808B96;"></i>
                                <span>CEA Claim</span></a></li>
                                


                            </ul>
                        </li>
                       

                        <li class="d-none">
                            <a href="#LeaveManagement" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="LeaveManagement"><i class="fa fa-user"
                                    style="color:#808B96;"></i>
                                <span>Leave Management</span></a>
                            <ul class="collapse list-unstyled" id="LeaveManagement">
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#Retirement" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="Retirement"><i class="fa fa-dashboard"
                                    style="color:#808B96;"></i>
                                <span>Retirement</span></a>
                            <ul class="collapse list-unstyled" id="Retirement">
                                <li>
                                    <a href="{{ route('pension-application') }}"><i class="fa fa-table"
                                        style="color:#808B96;"></i>
                                    <span>Pension Application</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empret') }}"><i class="fa fa-table"
                                        style="color:#808B96;"></i>
                                    <span>GPF/OPS</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empret') }}"><i class="fa fa-table"
                                        style="color:#808B96;"></i>
                                    <span>NPS</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empretamountcal') }}"><i class="fa fa-table"
                                            style="color:#808B96;"></i>
                                        <span>Retirement Amount Calculator</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-none"><a href="{{ route('formUpload') }}"><i class="fa fa-heartbeat"
                                    style="color:#808B96;"></i>
                                <span>Forms Upload</span></a></li>
                        </li>
                       
                        <li class="d-none">
                            <a href="#LTC" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                                aria-controls="LTC"><i class="fa fa-globe" style="color:#808B96;"></i>
                                <span>LTC</span></a>
                            <ul class="collapse list-unstyled" id="LTC">
                                
                            </ul>
                        </li>
                        <li class="d-none">
                            <a href="#GPF" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                                aria-controls="GPF"><i class="fa fa-dashboard" style="color:#808B96;"></i>
                                <span>GPF</span></a>
                            <ul class="collapse list-unstyled" id="GPF">
                                <li>
                                    {{-- <a href="{{ route('empltcclaim') }}"><i class="fa fa-table" style="color:#808B96;"></i>
                                    <span>GPF Claim</span></a> --}}
                                    <a href="{{ route('empgpfwithdraw') }}"><i class="fa fa-table"
                                            style="color:#808B96;"></i>
                                        <span>GPF Withdrawl</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-none">
                            <a href="#Pension" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                                aria-controls="Pension"><i class="fa fa-dashboard" style="color:#808B96;"></i>
                                <span>Pension</span></a>
                            <ul class="collapse list-unstyled" id="Pension">
                                <li>
                                    {{-- <a href="{{ route('empltcclaim') }}"><i class="fa fa-table" style="color:#808B96;"></i>
                                    <span>GPF Claim</span></a> --}}
                                    <a href="{{ route('empgpfwithdraw') }}"><i class="fa fa-table"
                                            style="color:#808B96;"></i>
                                        <span>OPS</span></a>
                                    <a href="{{ route('empgpfwithdraw') }}"><i class="fa fa-table"
                                            style="color:#808B96;"></i>
                                        <span>NPS</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('empltcclaim') }}"><i class="fa fa-exchange"
                                    style="color:#808B96;"></i>
                                <span>Transaction</span></a>
                        </li>
                      
                        <li>
                            <a href="{{ route('Annual-Budget-Report') }}"><i class="fa fa-briefcase"
                                    style="color:#808B96;"></i>
                                <span>Budget Report</span></a>
                        </li>
                       
                        

                        <li class="d-none">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="dashboard"><i class="fa fa-dashboard"
                                    style="color:#808B96;"></i>
                                <span>Employee Profile</span></a>
                            <ul class="collapse list-unstyled" id="dashboard">
                                <li>
                                    <a href="{{ route('empstatus') }}"><span>Status Of Work</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empattendance') }}"><span>Attendance</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empmedical') }}"><span>Medical Claim Sheet</span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="d-none">
                            <a href="#dashboard1" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle" aria-controls="dashboard"><i class="fa fa-dashboard"
                                    style="color:#808B96;"></i>
                                <span>Leave Approval</span></a>
                            <ul class="collapse list-unstyled" id="dashboard1">
                                <li>
                                    <a href="{{ route('empapplyleave') }}"><span>Apply For Leave</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empattendance') }}"><span>Past Leave</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empmedical') }}"><span>Salary Slip</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('empmedical') }}"><span>Current Status</span></a>
                                </li>

                            </ul>
                        </li>

                        <li class="d-none"><a href="{{ route('empregulancer') }}"><i class="fa fa-table"
                                    style="color:#808B96;"></i>
                                <span>Attendance Regulation</span></a></li>

                        <li class="d-none"><a href="{{ route('empportfolio') }}"><i class="fa fa-map"
                                    style="color:#808B96;"></i>
                                <span>Portfolio</span></a></li>
                        <li class="d-none"><a href="{{ route('empcontact') }}"><i class="fa-solid fa-paper-plane"
                                    style="color:#808B96;"></i> <span>Contact</span></a></li>

                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"
                                    style="color:#EAECEE;"></i></button>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="logo_section">
                                        <h1 style="color: aliceblue; padding-top:14px;"><b><a
                                                    href="{{ route('empdashboard') }}"
                                                    id="super">&nbsp;&nbsp;HRMS
                                                    Dashboard</a></b></h1>
                                        {{-- <a href="javascript:void(0)" class="btn btn-success">Check In</a> --}}
                                        <!-- <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a> -->
                                    </div>
                                </div>
                                <div class="col-md-5 pt-2">
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="right_topbar">
                                        <div class="icon_info">

                                            {{-- <ul style="font-size: 12px"> --}}
                                            {{-- <li><a href="javascript:void(0)" class="btn btn-success">Check In</a></li>
                                              <li><a href="javascript:void(0)" class="text text-info">Attendace Marked</a></li> --}}
                                            {{-- <li><a href="#modalScrollableCenter" data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="left" title="Notification"><i class="fa-solid fa-bell" style="color:#808B96;"></i></a><span class="badge">2</span></a></li> --}}
                                            {{-- <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Help"><i class="fa fa-question-circle" style="color:#808B96;"></i></a></li> --}}
                                            {{-- <li><a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="right" title="Message"><i class="fa-regular fa-message" style="color:#808B96;"></i><span class="badge">3</span></a></li> --}}
                                            {{-- </ul> --}}
                                            <ul class="user_profile_dd">
                                                <li>
                                                    <a class="dropdown-toggle" data-toggle="dropdown"><span
                                                            class="name_user">{{ Auth::user()->name }}</span></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="profile.html">My Profile</a>
                                                        <a class="dropdown-item" href="settings.html">Settings</a>
                                                        <a class="dropdown-item" href="help.html">Help</a>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <di --}}

                        </div>
                    </nav>
                </div>