
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
<!-- Add the Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Add the Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<style>
 td{
        font-weight:500;
    }

a{
    color:#000;
}

a:hover{
    color:#000;
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
                  <h3>Good evening, {{$user->name}}!👋</h3>
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
              <div class="col-sm-7">

             
                <div class="card">
                <div class="card-body">
                <h5 style="font-weight:700;font-size:16px;float:right"><i class="fa fa-pencil" data-bs-toggle="modal" data-bs-target="#clientprofileexampleModalCenter"></i></h5>
                <br>
                <div class="modal fade" id="clientprofileexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="clientprofileexampleModalCenter" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" style="font-weight:700">Update Profile</h5>
                            </div>
                            <div class="modal-body">
                            <form class="theme-form" method="POST" action="{{ route('updateclientprofiles') }}" enctype="multipart/form-data">
                                @csrf
                              <input type="text" class="form-control" name="name" value="{{$user->name}}" id="name" placeholder="Name">
                              <input type="text" class="form-control mt-2" name="phone" value="{{$user->phone}}" id="phone" placeholder="Mobile Number">

                              

                              <input type="email" class="form-control mt-2" name="email" id="email" value="{{$user->email}}" placeholder="Login Email" disabled>

                              
                              <input type="hidden" class="form-control mt-2" name="client_id" id="client_id" value="{{$user->id}}">

                           

                             

                                        
                              <input type="hidden" class="form-control mt-2" name="role" id="role" value="Client">

                              <input type="text" class="form-control mt-2" name="brand_name" id="brand_name" value="{{$user->brand_name}}" placeholder="Brand name">

                                        

                              <input type="textarea" class="form-control mt-2" name="client_correspondence_address" value="{{$user->client_correspondence_address}}" id="client_correspondence_address" placeholder="Correspondence address">


                                <input type="textarea" class="form-control mt-2" name="client_registered_office_address" id="client_registered_office_address" value="{{$user->client_registered_office_address}}" placeholder="Registered office address">

                                <select id="plan_type" class="form-select mt-2" placeholder="Plan type" name="plan_type">
                                <option  disabled Selected>Select Your Plan</option>
                                <option value="Basic" {{ $user->plan_type === 'Basic' ? ' selected' : '' }}>Basic</option>
                                <option value="Gold" {{ $user->plan_type === 'Gold' ? ' selected' : '' }}>Gold</option>
                                <option value="Premium" {{ $user->plan_type === 'Premium' ? ' selected' : '' }}>Premium</option>
                              </select>

<!--                              <input type="text" class="form-control mt-2" id="tenure_start_date" name="tenure_start_date" value="{{$user->tenure_start_date}}" placeholder="Tenure start date">-->

<!--<input type="text" class="form-control mt-2" id="tenure_end_date" name="tenure_end_date" placeholder="Tenure end date" value="{{$user->tenure_end_date}}">-->

<input type="text" class="form-control mt-2" name="authorised_signatory_name" id="authorised_signatory_name" value="{{$user->authorised_signatory_name}}" placeholder="Authorised Signatory Name">

<!--<input type="text" class="form-control mt-2" name="authorised_signatory_contact_no" id="authorised_signatory_contact_no" value="{{$user->authorised_signatory_contact_no}}" placeholder="Authorised Signatory contact no">-->

<!--<input type="email" class="form-control mt-2" name="authorised_signatory_email_id" id="authorised_signatory_email_id" value="{{$user->authorised_signatory_email_id}}" placeholder="Authorised Signatory email id">-->
                                        
                                        <input type="file" class="form-control mt-2" name="profile_picture" id="profile_picture">
                          
                            

                                  <div class="modal-footer">
                                    <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Add</button>
                                  </div>
                                          </form>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                <h5 style="font-weight:700;font-size:16px;">Company Master Details</h5>
                <br>

                <div class="row">
                    <div class="col-sm-4 " style="border-right:solid 1px lightgrey;">
                    @if($user->profile_picture)
                    <img src="{{ asset('/' . $user->profile_picture) }}" class="text-center" style="height:150px;" >
                    @else
                        <p>No profile picture available.</p>
                    @endif
                    <h6 class="ml-2 mt-3">{{$user->name}}</h6>
                  
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                         <div class="col-4" style="font-size:13px;font-weight:600"><i class="fa fa-envelope-o"></i>  Email</div> <div class="col-1">:</div> <div class="col-7" style="font-size:13px;font-weight:600">{{$user->email}}</div></span> <br>
                         <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-phone"></i>  Mobile</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$user->phone}}</div></span> <br>
    <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-address-card " ></i>  Plan</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$user->plan_type}}</div></span> <br>

    <div class="col-4 mt-3" style="font-size:13px;font-weight:600"><i class="fa fa-map-marker"></i>  Company Address</div> <div class="col-1  mt-3">:</div> <div class="col-7  mt-3" style="font-size:13px;font-weight:600">{{$user->client_registered_office_address}}</div></span> <br>

                        </div>


                    </div>
                </div>

                 </div>


                </div>

               

              </div>


             <div class="col-sm-5">
                <div class="card">

                <div class="card-body">

                <h5 style="font-weight:700;font-size:16px;">Upcoming Compliance</h5><br>

           @foreach($events as $event)
    <h2>{{ $event->title }}</h2>
    <ul>
        <li>
            <p>Start Date: {{ $event->start }}</p>
            <p>Description: {{ $event->description }}</p>
        </li>
    </ul>
@endforeach


                </div>

                </div>

              </div>

              {{-- Another --}}

               <div class="col-sm-6">
                <div class="card">

                <div class="card-body">

                <h5 style="font-weight:700;font-size:16px;">Laws and Amendments</h5><br>

                   <div class="alert " style="border:solid 1px lightgrey;"><small>Dates for filing ITR have been extended by the Income Tax department</small> <span class="pull-right"><a style="text-decoration: underline;font-size:10px">Know More</a></span></div>

                 <div class="alert " style="border:solid 1px lightgrey;"><small>Dates for filing ITR have been extended by the Income Tax department</small> <span class="pull-right"><a style="text-decoration: underline;font-size:10px">Know More</a></span></div>

                <div class="alert " style="border:solid 1px lightgrey;"><small>Dates for filing ITR have been extended by the Income Tax department</small> <span class="pull-right"><a style="text-decoration: underline;font-size:10px">Know More</a></span></div>

                <div class="alert " style="border:solid 1px lightgrey;"><small>Dates for filing ITR have been extended by the Income Tax department</small> <span class="pull-right"><a style="text-decoration: underline;font-size:10px">Know More</a></span></div>


                </div>

                </div>

              </div>


                {{-- Documents --}}

               <div class="col-sm-3">
                <div class="card">

                <div class="card-body">

                <h5 style="font-weight:700;font-size:16px;">Charter Documents</h5><br>

                @if ($user->role === 'Client' && $clientdata)
                <div class="alert bg-light-info text-dark" style="font-weight:600">GST Document
    <span class="pull-right">
        
        <a href="{{ asset($clientdata->gst_document) }}" download><i class="fa fa-download"></i></a>
           
       
    </span>
</div>

<div class="alert bg-light-primary text-dark" style="font-weight:600">PAN Document
    <span class="pull-right">
        
            <a href="{{ asset($clientdata->pan_document) }}" download><i class="fa fa-download"></i></a>
       
    </span>
</div>

<div class="alert bg-light-info text-dark" style="font-weight:600">TAN Document
    <span class="pull-right">
        
            <a href="{{ asset($clientdata->tan_document) }}" download><i class="fa fa-download"></i></a>
       
    </span>
</div>

<div class="alert bg-light-primary text-dark" style="font-weight:600">Address Proof Document
    <span class="pull-right">
       
            <a href="{{ asset($clientdata->address_proof_document) }}" download><i class="fa fa-download"></i></a>
        
    </span>
</div>
@endif

                </div>

                </div>

              </div>


                {{-- Escalation Matrix --}}

               <div class="col-sm-3">
                <div class="card">

                <div class="card-body">

                <h5 style="font-weight:700;font-size:16px;">Escalation Matrix</h5><br>


                <div class="" style="font-weight:500;font-size:16px;border-left:solid 2px lightblue;padding-left:15px;" >John Doe <br>
                <small>Sr. Associate</small>
                </div>

                <div ><i class="fa fa-circle " style="font-size:8px;margin-left:-3px;color:lightblue"></i></div>

                <div class="" style="font-weight:500;font-size:16px;border-left:solid 2px lightblue;padding-left:15px;" >John Doe <br>
                <small>Sr. Associate PA</small>
                </div>

                <div ><i class="fa fa-circle " style="font-size:8px;margin-left:-3px;color:lightblue"></i></div>

                 <div class="" style="font-weight:500;font-size:16px;border-left:solid 2px lightblue;padding-left:15px;" >Helly Depp <br>
                <small>Jr. Associate</small>
                </div>

                <div ><i class="fa fa-circle " style="font-size:8px;margin-left:-3px;color:lightblue"></i></div>


                 <div class="" style="font-weight:500;font-size:16px;border-left:solid 2px lightblue;padding-left:15px;" >Chirs Pratt <br>
                <small>Jr. Associate PA</small>
                </div>



                </div>

                </div>

              </div>


              {{-- DSE Status --}}

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="pull-left">DSC Status</h4>



                            </div>

                            <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="basic-1">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Director’s Name</th>
                                            <th>DIN Number</th>
                                            <th>Valid from</th>
                                            <th>Valid till</th>
                                            <th>Expiry Status</th>
                                            <th>Renewal</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>98754621</td>
                                        <td>06/22</td>
                                        <td>06/23</td>
                                        <td><button class="btn bg-light-success text-success btn-xs" style="font-weight:600">Stay Relaxed</button></td>
                                        <td style="font-weight:600">N/A</td>
                                        </tr>

                                         <tr>
                                        <td>2</td>
                                        <td>John Doe</td>
                                        <td>98754621</td>
                                        <td>06/22</td>
                                        <td>06/23</td>
                                        <td><button class="btn bg-light-warning text-warning btn-xs" style="font-weight:600">Expiring Soon</button></td>
                                        <td class="text-primary" style="font-weight:600;text-decoration:underline">Get in touch</td>
                                        </tr>

                                         <tr>
                                        <td>3</td>
                                        <td>John Doe</td>
                                        <td>98754621</td>
                                        <td>06/22</td>
                                        <td>06/23</td>
                                        <td><button class="btn bg-light-danger text-danger btn-xs" style="font-weight:600">Expired</button></td>
                                        <td style="font-weight:600">N/A</td>
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
