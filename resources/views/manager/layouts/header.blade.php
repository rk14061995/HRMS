<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HRMS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="frontend/images/fevicon.png' type='image/png"/>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{url('frontend/css/style.css')}}"/>
      <!-- responsive css -->
      <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}"/>
      <!-- color css -->
      <link rel="stylesheet" href="{{url('frontend/css/colors.css')}}"/>
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{url('frontend/css/bootstrap-select.css')}}"/>
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{url('frontend/css/perfect-scrollbar.css')}}"/>
      <!-- custom css -->
      <link rel="stylesheet" href="{{url('frontend/css/custom.css')}}"/>
        <!-- Calendar css -->
      <link rel="stylesheet" href="{{url('frontend/calender/style.css')}}"/>
      <link rel="stylesheet" href="{{url('frontend/calender/demo.min.css')}}"/>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
      <script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
   
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               
               <div class="sidebar_blog_2">
                  <h4><a href="{{ route('mdashboard')}}" id="super">Manager Admin Panel</a></h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" aria-controls="dashboard"><i class="fa fa-dashboard" style="color:#808B96;"></i> <span>Employee Profile</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                              <a href="{{ route('maddemp')}}"><span>Add Employee</span></a>
                           </li>
                           <li>
                              <a href="{{ route('mstatus')}}"><span>Status Of Work</span></a>
                           </li>
                           <li>
                              <a href="{{ route('mattendance')}}"><span>Attendance</span></a>
                           </li>
                           <li>
                              <a href="{{ route('mmedical')}}"><span>Medical Claim Sheet</span></a>
                           </li>
                          
                        </ul>
                     </li>
                     <li><a href="{{ route('mleave')}}"><i class="fa-solid fa-pen-to-square" style="color:#808B96;"></i></i> <span>Leave Approval</span></a></li>
                     
                     <li><a href="{{ route('mregulancer')}}"><i class="fa fa-table" style="color:#808B96;"></i> <span>Attendance Regulation</span></a></li>
                    
                     <li><a href="{{ route('mportfolio')}}"><i class="fa fa-map" style="color:#808B96;"></i> <span>Portfolio</span></a></li>
                     <li><a href="{{ route('mcontact')}}"><i class="fa-solid fa-paper-plane" style="color:#808B96;"></i> <span>Contact</span></a></li>
                     
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
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars" style="color:#EAECEE;"></i></button>
                        <div class="logo_section">
                           <h1 style="color: aliceblue; padding-top:14px;"><b><a href="/dasboard" id="super">&nbsp;&nbsp;HRMS DashBoard</a></b></h1>
                           <!-- <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a> -->
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#modalScrollableCenter" data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="left" title="Notification"><i class="fa-solid fa-bell" style="color:#808B96;"></i></a><span class="badge">2</span></a></li>
                                 <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Help"><i class="fa fa-question-circle" style="color:#808B96;"></i></a></li>
                                 <li><a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="right" title="Message"><i class="fa-regular fa-message" style="color:#808B96;"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">{{ Auth::user()->name }}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>

 <!-- Model popup Notification Start -->

               <div id="modalScrollableCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Notification</h5>
                    <a href=""data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></a>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum. Vivamus fermentum in arcu in aliquam. Quisque aliquam porta odio in fringilla. Vivamus nisl leo, blandit at bibendum eu, tristique eget risus. Integer aliquet quam ut elit suscipit, id interdum neque porttitor. Integer faucibus ligula.</p>
                <p>Quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn cur-p btn-outline-primary">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Model popup Notification end-->