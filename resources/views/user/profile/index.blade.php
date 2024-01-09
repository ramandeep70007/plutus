
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
                      <div class="flex-shrink-0"></div>
                      <div class="flex-grow-1">
                      <span>Client Annoucements</span>
                        <ul class="announcement-list">
                            @foreach($cli_announcements as $announcement)
                                <li>{{ $announcement->announcements_for_clients }}</li>
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


<!-- 
                <li class="profile-nav onhover-dropdown">
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
        @include('user/includes.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Profile</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">Profile</li>
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
                <h5 style="font-weight:700;font-size:16px;float:right"><i class="fa fa-pencil"></i></h5>
                <br>

                <div class="row">
                    <div class="col-sm-2 " style="border-right:solid 1px lightgrey;">
                    <img src="/../assets/images/dashboard_profile.png" class="text-center" style="height:150px;" >
                    <h6 class="ml-2 mt-3">Satyam</h6>
                    <small>Head of operations <b>@netflix</b></small>
                    </div>

                    <div class="col-sm-5" style="border-right:solid 1px lightgrey;">

                        <div class="row">
                         <div class="col-4" style="font-size:13px;font-weight:600"><i class="fa fa-envelope-o"></i>  Email</div> <div class="col-1">:</div> <div class="col-7" style="font-size:13px;font-weight:600">satyam@companyname.com</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-phone"></i>  Mobile</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">+91 9876543210</div></span> <br>

     <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-address-card " ></i>  GSTIN</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">29AAAAA0000A1Z5</div></span> <br>

     <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-map-marker"></i>  Company Name</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">Netflix</div></span> <br>

 <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-inbox "></i> Mail of SPOC</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">spocname@gmail.com</div></span> <br>


 <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-vcard-o "></i> SPOC for Plutus</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">SPOC NAME</div></span> <br>

                        </div>


                    </div>

                        <div class="col-sm-5" >

                        <div class="row">
                         <div class="col-4" style="font-size:13px;font-weight:600"><i class="fa fa-envelope-o"></i>  CIN</div> <div class="col-1">:</div> <div class="col-7" style="font-size:13px;font-weight:600">156487925631</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-user-md "></i>  No. of directors</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">21</div></span> <br>

     <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-id-card-o " ></i>  PAN</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">BXCRS6789R</div></span> <br>

     <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-file-pdf-o "></i>  TAN</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">BHVCG456897L</div></span> <br>

 <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-money "></i> GSTIN</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">1212456789123</div></span> <br>


 <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-map-pin "></i> Registered Address</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">14th main, 2nd block, Bengaluru , Karnataka , 560099</div></span> <br>

                        </div>


                    </div>

                </div>

                 </div>

                </div>

              </div>





              {{-- DSE Status --}}

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="pull-left">Directors in your Company</h4>



                            </div>

                            <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="basic-1">
                                        <thead class="bg-light-primary text-dark">
                                        <tr>
                                            <th>FullName</th>
                                            <th>Start </th>
                                            <th>DIN</th>
                                            <th>PAN</th>
                                            <th>Status</th>
                                            <th>DOB</th>
                                            <th>Action</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                        <td>John Doe</td>
                                        <td>21-03-2023</td>
                                        <td>BYEVD2509S</td>
                                        <td>2023 2023 2023</td>
                                        <td >Active</td>
                                        <td>02-03-1982</td>
                                        <td><button class="btn bg-light-primary text-primary btn-xs" style="font-weight:500">View More</button></td>
                                        </tr>

                                            <tr>
                                        <td>John Doe</td>
                                        <td>21-03-2023</td>
                                        <td>BYEVD2509S</td>
                                        <td>2023 2023 2023</td>
                                        <td >Active</td>
                                        <td>02-03-1982</td>
                                        <td><button class="btn bg-light-primary text-primary btn-xs" style="font-weight:500">View More</button></td>
                                        </tr>

                                            <tr>
                                        <td>John Doe</td>
                                        <td>21-03-2023</td>
                                        <td>BYEVD2509S</td>
                                        <td>2023 2023 2023</td>
                                        <td >Active</td>
                                        <td>02-03-1982</td>
                                        <td><button class="btn bg-light-primary text-primary btn-xs" style="font-weight:500">View More</button></td>
                                        </tr>

                                            <tr>
                                        <td>John Doe</td>
                                        <td>21-03-2023</td>
                                        <td>BYEVD2509S</td>
                                        <td>2023 2023 2023</td>
                                        <td >Active</td>
                                        <td>02-03-1982</td>
                                        <td><button class="btn bg-light-primary text-primary btn-xs" style="font-weight:500">View More</button></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    <!-- login js-->
  </body>

</html>
