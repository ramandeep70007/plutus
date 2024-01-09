@include('employee/includes.header');

<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/sweetalert2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- App css-->
<link rel="stylesheet" type="text/css" href="/../assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Add the Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">
<style>
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
        @include('employee/includes.sidebar');
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Open Issue Tracker</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Employee</li>
                                <li class="breadcrumb-item active">Issue Tracker</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Zero Configuration  Starts-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="pull-left">All Issues</h4>
                                <button class="btn btn-primary pull-right btn-sm" style="border-radius:5px;" data-bs-toggle="modal" data-bs-target="#issueClientModal"><i class="fa fa-plus"></i> Add Issue</button></h4>
                                <div class="modal fade" id="issueClientModal" tabindex="-1" role="dialog" aria-labelledby="issueClientModal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" style="font-weight:700">Issue</h5>
                                            </div>
                                            <div class="modal-body">
                                                    <form class="theme-form" method="POST" action="{{ route('issueClient') }}">
                                                        @csrf
                                                        <label for="clientSelect">Select Client:</label>
                                                        <select class="form-control" id="clientSelect" name="client_id" required>
                                                            @foreach($clients as $client)
                                                                <option value="{{ $client->client_id }}">{{ $client->name }}</option>
                                                            @endforeach
                                                        </select>
                                                         @foreach($clients as $client)
                                                        <input type="hidden"  name="client_name" id="client_name" value="{{ $client->name }}" class="form-control mt-2">
                                                        @endforeach
                                                        <input type="text" placeholder="Issue Date" name="issue_date" id="issue_date" class="form-control mt-2" required>
                                                        <script>
                                                            // Calculate today's date
                                                            const today = new Date();
                                                            const todayFormatted = today.getFullYear() + "-" + (today.getMonth() + 1).toString().padStart(2, '0') + "-" + today.getDate().toString().padStart(2, '0');

                                                            // Initialize Flatpickr for Tenure Start Date
                                                            flatpickr("#issue_date", {
                                                                dateFormat: "Y-m-d", // Set the date format to match the server-side format
                                                                minDate: todayFormatted, // Set the minimum selectable date to today
                                                            });

                                                           
                                                        </script>
                                                        <input type="text" placeholder="Responsibility" name="responsibility" id="responsibility" class="form-control mt-2" required>
                                                        <input type="text" placeholder="Area" name="area" id="area" class="form-control mt-2" required>
                                                        <input type="text" placeholder="Particulars" name="particulars" id="particulars" class="form-control mt-2" required>
                                                        <select class="form-control mt-2" id="status" name="status">
                                                           
                                                                <option value="">Select Status</option>
                                                                <option value="Closed">Closed</option>
                                                                <option value="Wip">Wip</option>
                                                                <option value="Open">Open</option>
                                                            
                                                        </select>
                                                        <input type="textarea" placeholder="Remarks" name="remarks" id="remarks" class="form-control mt-2" required>
                                                        <input type="hidden" value="{{$user->id}}"  id="employeeIdInput" name="employee_id"><br>
                                                         <input type="hidden"  name="employee_name" id="employee_name" value="{{ $user->name }}" class="form-control mt-2" required>
                                                        <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Update Issue</button>
                                                    </form>
                                            </div>
                                       


                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                        </div>
                                    </div>
                             </div>

                            </div>

                            <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="basic-1">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Issue Date</th>
                                            <th>Responsibility</th>
                                            <th>Area</th>
                                            <th>Particulars</th>
                                            <th>Status</th>
                                            <th>Remarks</th>


                                        </tr>
                                        </thead>
                                        <tbody>
@foreach($issue as $iss)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$iss->issue_date}}</td>
                                        <td>{{$iss->responsibility}}</td>
                                        <td>{{$iss->area}}</td>
                                        <td>{{$iss->particulars}}</td>
                                        @if($iss->status == 'Closed')
                                        <td><button class="btn bg-light-success text-success btn-xs" style="font-weight:600">{{$iss->status}}</button></td>
                                        @elseif($iss->status == 'Wip')
                                        <td><button class="btn bg-light-warning text-warning btn-xs" style="font-weight:600">WIP</button></td>
                                        @elseif($iss->status == 'Open')
                                        <td><button class="btn bg-light-danger text-danger btn-xs" style="font-weight:600">Open</button></td>
                                        @else
                                        @endif
                                        <td>{{$iss->remarks}}</td>

                                        </tr>
@endforeach
                                         

                                        


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Zero Configuration  Ends-->

                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <script>
            $(document).ready(function (){
                @if(Session::has('success'))
                showToast('{{Session::get('success')}}','success');
                @endif

                $(".delete").click(function (){
                    var id = $(this).attr('id');

                    var tr = $(this).closest('tr');

                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to revert this!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {

                                const url = "/admin/vendors/" + id;

                                $.ajax({
                                    url: url,
                                    type: "GET",
                                    success: function (response) {

                                        tr.remove();
                                        showToast('Vendor Deleted Successfully..','success');
                                        swal.close();

                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        console.error(errorThrown);

                                        showToast('Error while deleting vendor..','danger');
                                        swal.close();

                                    }
                                });


                            } else {

                                //do nothing

                            }
                        })


                });
            });
        </script>
        <!-- footer start-->
        @include('user/includes.footer');
    </div>
</div>
<!-- latest jquery-->
<script src="/../assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap js-->
<script src="/../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="/../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/../assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="/../assets/js/scrollbar/simplebar.js"></script>
<script src="/../assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="/../assets/js/config.js"></script>
<script src="/../assets/js/sidebar-menu.js"></script>
<script src="/../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="/../assets/js/datatable/datatables/datatable.custom.js"></script>
<script src="/../assets/js/tooltip-init.js"></script>

<script src="/../assets/js/notify/bootstrap-notify.min.js"></script>
<script src="/../assets/js/notify/notify-script.js"></script>


<script src="/../assets/js/sweet-alert/sweetalert.min.js"></script>
<script src="/../assets/js/sweet-alert/app.js"></script>
<!-- Template js-->
<script src="/../assets/js/script.js"></script>
<script src="/../assets/js/theme-customizer/customizer.js">  </script>
<!-- login js-->
</body>

</html>
