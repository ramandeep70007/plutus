
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Plutus</title><link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">


    <link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    
    <link rel="stylesheet" type="text/css" href="/../assets/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/sweetalert2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- App css-->
<link rel="stylesheet" type="text/css" href="/../assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add the Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    .ab{
        font-weight:500;
    }
/*    .profilepic {*/
/*    border: 2px solid black;*/
/*    border-radius: 50%;*/
/*}*/
p.noprofile {
    margin-top: 25px;
    text-align: center;
}
    </style>
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
        
<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>

            <div class="logo-header-main"><a href="#">Plutus</a></div>

        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <div class="left-menu-header">
           
 



            </div>
        </div>
        <div class="nav-right col-1 pull-right right-header p-0">
            <ul class="nav-menus">

                <li>
                    <div class="mode" ><i class="fa fa-moon-o"></i></div>
                </li>

                      <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell">            </i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <span>Employee Annoucements</span>
                        <ul class="announcement-list">
                            @foreach($empl_announcements as $announcement)
                                <li>{{ $announcement->announcements_for_employee }}</li>
                            @endforeach
                        </ul>
                      </div>
                      <style>
    .announcement-list {
        max-height: 150px; /* Adjust the height as needed */
        overflow-y: auto;
        border: 1px solid #ccc; /* Add a border for aesthetics */
        padding: 5px;
    }
</style>
                    </div>
                  </li>
                 
                 
                </ul>
              </li>



                <!-- <li class="profile-nav onhover-dropdown">
                    <div class="account-user"><i data-feather="user"></i></div>
                    <ul class="profile-dropdown onhover-show-div">
                       
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf 
                                <button type="submit" class="logbtn"><i data-feather="log-out"></i><span>Logout</span></button>
                            </form>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">Vaibhav</div>
                </div>
            </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>

      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('employee.includes.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Employee Profile</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item active">Employee Profile</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid basic_table">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                <div class="card-body">
                <h5 style="font-weight:700;font-size:16px;float:right"><i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-target="#profileexampleModalCenter"></i></h5>
                <br>
                <div class="modal fade" id="profileexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="profileexampleModalCenter" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" style="font-weight:700">Update Profile</h5>
                            </div>
                            <div class="modal-body">
                            <form class="theme-form" method="POST" action="{{ route('updatesingleemployeeprofile') }}" enctype="multipart/form-data">
                                @csrf
                              <input type="text" class="form-control" name="name" value="{{$userInfo->name}}" id="name" placeholder="Name">
                              <input type="text" class="form-control mt-2" name="phone" value="{{$userInfo->phone}}" id="phone" placeholder="Mobile Number">

                              

                              <input type="email" class="form-control mt-2" name="email" id="email" value="{{$userInfo->email}}" placeholder="Login Email" disabled>
 <input type="text" class="form-control mt-2" id="password" value="{{$userInfo->password}}"  name="password" placeholder="Password *">
                              
                              <input type="hidden" class="form-control mt-2" name="employee_id" id="employee_id" value="{{$userInfo->user_id}}">

                           

                             

                                        
                              <input type="hidden" class="form-control mt-2" name="role" id="role" value="Employee">

                                        

                                        

                                        <input type="email" class="form-control  mt-2" name="personal_email_id" value="{{$userInfo->personal_email_id}}" id="personal_email_id" placeholder="Personal email id">


                                        <input type="text" class="form-control mt-2" name="designation" id="designation" value="{{$userInfo->designation}}" placeholder="Designation">

                                        <input type="text" class="form-control mt-2" name="department" id="department" value="{{$userInfo->department}}" placeholder="Department">

                                        <input type="text" class="form-control mt-2" id="joining_date" name="joining_date" value="{{$userInfo->joining_date}}" placeholder="Joining date">
                                        <script>
                                            // Calculate today's date
                                            const today = new Date();
                                            const todayFormatted = today.getFullYear() + "-" + (today.getMonth() + 1).toString().padStart(2, '0') + "-" + today.getDate().toString().padStart(2, '0');

                                            // Initialize Flatpickr for Tenure Start Date
                                            flatpickr("#joining_date", {
                                                dateFormat: "Y-m-d", // Set the date format to match the server-side format
                                               // Set the minimum selectable date to today
                                            });

                                            
                                            
                                        </script>

                                        <input type="text" class="form-control mt-2" name="immediate_reporting_manager" value="{{$userInfo->immediate_reporting_manager}}" id="immediate_reporting_manager" placeholder="Immediate Reporting Manager">

                                        <input type="text" class="form-control mt-2" name="correspondence_address_employee" id="correspondence_address_employee" value="{{$userInfo->correspondence_address_employee}}"  placeholder="Correspondence address">
                                        <input type="text" class="form-control mt-2" name="permanent_address_employee" id="permanent_address_employee" value="{{$userInfo->permanent_address_employee}}" placeholder="Permanent address as per aadhar card">
                                        <input type="text" class="form-control mt-2" name="aadhar_number_employee" id="aadhar_number_employee" value="{{$userInfo->aadhar_number_employee}}" placeholder="Aadhar Number">
                                        <label>
                                    Profile Picture
                                    
                                </label>
                            <input type="file" class="form-control mt-2" name="profile_picture" id="profile_picture">
                            <br>
                            <div class="documentsection">
                                <label>
                                    Appointment letters
                                    
                                </label>
                                <input type="file" class="form-control mt-2" name="appointment_letter" id="appointment_letter">
                                <br>
                                <label>
                                    Increment letters/ appraisals
                                </label>
                                <input type="file" class="form-control mt-2" name="increment_letter" id="increment_letter">
                                <br>
                                <label>
                                    KYC docs
                                </label>
                                <input type="file" class="form-control mt-2" name="kra_docs" id="kra_docs">
                                <br>
                                <label>
                                    Policy manuals of the company
                                </label>
                                <input type="file" class="form-control mt-2" name="policy_manuals" id="policy_manuals">
                            </div>
                            </div>
                            


                            <div class="modal-footer">
                              <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Add</button>
                            </div>
                                          </form>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                    <div class="col-sm-2 " style="border-right:solid 1px lightgrey;">
                        <div class="profilepic" data-bs-toggle="modal" data-bs-target="#profileexampleModalCenter">
                    @if($user->profile_picture)
                    <img src="{{ asset('/' . $user->profile_picture) }}" class="text-center" style="height:135px; width:135px; border-radius: 50%;" >
                    @else
                        <p class="noprofile">No profile picture available.</p>
                    @endif
                    </div>
                    <h6 class="ml-2 mt-3">{{$userInfo->name}}</h6>
                   
                    </div>

                    <div class="col-sm-5" style="border-right:solid 1px lightgrey;">

                        <div class="row">
                         <div class="col-4" style="font-size:13px;font-weight:600"><i class="fa fa-envelope-o"></i>  Email</div> <div class="col-1">:</div> <div class="col-7" style="font-size:13px;font-weight:600">{{$userInfo->email}}</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-phone"></i>  Mobile</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$userInfo->phone}}</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-envelope-o"></i>  Personal email id</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$userInfo->personal_email_id}}</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-briefcase"></i>  Designation</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$userInfo->designation}}</div></span> <br>
                         
                         





                    </div>
                       </div>
                       <div class="col-sm-5" >

                        <div class="row">
                         
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-building"></i>  Department</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$userInfo->department}}</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-calendar"></i>  Joining date</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$userInfo->joining_date}}</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-user"></i>  Immediate Reporting Manager</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$userInfo->immediate_reporting_manager}}</div></span> <br>
                         





                    </div>
                       </div>

                </div>
                
                
               

                </div>

                 </div>
                 
                 <div class="row">
                     <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                    <div class="col-lg-12">
                        <table class="display" id="basic-1">
    <thead>
        <tr>
            <th>Profile Picture</th>
            <th>Appointment letters</th>
            <th>Increment letters/appraisals</th>
            <th>KYC docs</th>
            <th>Policy manuals of the company</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                @if($user->profile_picture)
                    <!--<img src="{{ asset('/' . $user->profile_picture) }}" class="text-center" style="height: 100px; border-radius: 50%;">-->
                    <!--<br>-->
                    <a href="{{ asset('/' . $user->profile_picture) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No profile picture available.</p>
                @endif
            </td>
            <td>
                @if($userInfo->appointment_letter)
                    
                    <a href="{{ asset('/' . $userInfo->appointment_letter) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No Appointment letters available.</p>
                @endif
            </td>
            <td>
                @if($userInfo->increment_letter)
                    
                    <a href="{{ asset('/' . $userInfo->increment_letter) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No Increment letters/appraisals available.</p>
                @endif
            </td>
            <td>
                @if($userInfo->kra_docs)
                    
                    <a href="{{ asset('/' . $userInfo->kra_docs) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No  KYC docs available.</p>
                @endif
            </td>
            <td>
                @if($userInfo->policy_manuals)
                   
                    <a href="{{ asset('/' . $userInfo->policy_manuals) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No Policy manuals of the company available.</p>
                @endif
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
                    </div>
                </div>

                </div>

              </div>

 
              {{-- Another --}}

               
  </div>

            </div>


          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('user/includes.footer')
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Template js-->

<script src="/../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="/../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js">  </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <style>
        img.text-center {
    width: -webkit-fill-available;
}
    </style>
    <!-- login js-->
  </body>

</html>
