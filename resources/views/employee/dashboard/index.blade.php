
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
<!-- Include jQuery (required by SweetAlert2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <style>
    .img-30 {
    width: 30px !important;
    margin-right: -16px;
    border: solid 2px #ffffff;
    }
    td{
        font-weight:500;
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
              <!-- <div class="col-sm-12">
                    <div class="alert alert-danger">You have missed and important financial compliance. Click here to Know more  <span style="float:right">&times;</span></div>
              </div> -->
                <div class="col-sm-6">
                  <h3>Good evening, {{$user->name}}!👋</h3>
                  @php
        use Carbon\Carbon;
        $currentDate = Carbon::now()->format('Y-m-d');
    @endphp

    @foreach ($results as $result)
        @if ($result->date == $currentDate && ($result->timespent < 480 || is_null($result->timespent)))
        <!--<div class="alertdata">-->
        <!--    <div class="alert alert-danger">-->
        <!--        Reminder for Filing Timesheet for your Client: {{ $result->client_name }}-->
        <!--    </div>-->
        <!--    </div>-->
          <script>
        var alertData = @json($results);
        
        // Wait for the document to be ready
        $(document).ready(function () {
            alertData.forEach(function (result) {
                if (result.date === '{{$currentDate}}' && (result.timespent < 480 || result.timespent === null)) {
                    // Show a SweetAlert2 popup
                    Swal.fire({
                        title: 'Reminder',
                        text: `Reminder for Filing Timesheet for your Client: ${result.client_name}`,
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    </script>
        @endif
    @endforeach
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">User</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid basic_table">
            <div class="row">



                {{-- Documents --}}

               <div class="col-sm-7">
                <div class="card">
          
                <div class="card-header">
                              <h5 class="modal-title" style="font-weight:700">Timesheet Reminders</h5></div>

                <div class="card-body">


                            <img src="../assets/images/alert.png" style="height:200px;margin-left:29%;" >

                            <p class="text-danger text-center">Please make sure to fill up the timesheets for your clients within the next three days or before friday.</p> <br>
<br>


                              <a href="{{url('/employee/timesheet')}}"><button class="btn btn-primary btn-block"   style="border-radius:5px;margin-left:29%;" type="button">View Timesheets</button></a>






                </div>
                

                </div>

              </div>

<div class="col-sm-5">
  <h3> Download Policy Manuals</h3>
<div class="table-responsive theme-scrollbar">
        
        <table class="display" id="basic-1">
<thead>
  <tr>
      <th>File Name</th>
      <th>Download</th>
      
  </tr>
</thead>
<tbody>
  @foreach($policy as $pol)
    <tr>
        <td>{{ $pol->file_name }}</td>
        <td>
        <a href="{{ route('download-policy-file', ['id' => $pol->id, 'fileName' => urlencode($pol->file_name)]) }}">
    <i class="icon-download"></i>
</a>
        </td>
     
    </tr>
@endforeach
</tbody>
</table>
</div>
</div>

              {{-- Founders --}}

                    <div class="col-sm-12">
                        <div class="card bg-primary">

                            <div class="card-body">


                            <div class="row">
                            <div class="col-7">
                            <h4>Our Founders</h4><br>
                            <p>What started as a journey in 1972 has reached a milestone where we look back and can proudly offer to stand firmly
                            for our clients. Being a full service chartered accountancy firm with sound principles and values we felt the need
                             to re-born in this new era to be able to work closest to our clients and businesses of this century and hence
                              decided to segregate the advisory & consulting arm to work with the most amazing CXO’s and teams in the name of
                               Plutus Consulting. This would give us an opportunity to innovate and digitise our services to meet the client
                                needs faster and better than earlier and create more value for them.</p>
                            </div>

                             <div class="col-5">
                                <img src="../assets/images/p-one.png" class="mt-4" style="height:150px;">

                                <img src="../assets/images/p-two.png" class="mt-4" style="height:150px;margin-left:20px;">
                            </div>

                            </div>
                        </div>
                    </div>


                     {{-- TEAM --}}

                    <div class="col-sm-12">
                        <div class="card bg-primary">

                            <div class="card-body">


                            <div class="row">
                            <div class="col-7">
                            <h4>Our Team</h4><br>
                            <p>With over 55 years of man experience at leadership level our team comprises CA, DISA, CS, LLB etc. Each division is being led by competent professionals with average experience of more than 12 years each. A strong network of experts in all areas enable us to cater to different needs of the clients at one place. With deep rooted professional ethics and focus on quality our clients have good things to say about us.
Expertise and control over our domain of services makes us stand apart from others.</p>
                            </div>

                             <div class="col-5">
                                <img src="../assets/images/team.png" class="mt-4" style="height:250px;">

                            </div>

                            </div>
                        </div>
                    </div>

                    </div>

                    </div>



            </div>


          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('admin.includes.footer')
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
        .alertdata {
    padding: 20px 0 0 0;
}
.page-wrapper .page-body-wrapper .page-title {
     padding-bottom: 0px !important; 
}
    </style>
    <!-- login js-->
  </body>

</html>
