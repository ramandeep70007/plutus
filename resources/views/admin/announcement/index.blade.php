
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

<!-- Add DataTables JavaScript (jQuery is required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
</style>

<script src="https://code.jquery.com/jquery-1.12.3.js"></script>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
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
    <span>Client Announcements</span>
    <ul class="announcement-list">
        @foreach($announcements as $announcement)
            <li>{{ $announcement->announcements_for_clients }}</li>
        @endforeach
    </ul>
    <span>Employee Announcements</span>
    <ul class="announcement-list">
        @foreach($announcements as $announcement)
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
        @include('admin.includes.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Announcement</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Announcement</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid basic_table">
            <div class="row">

                 {{-- Another --}}

               <div class="col-sm-12">
                <div class="card">

                <div class="card-body">

                <h5 style="font-weight:700;font-size:16px;">Make Announcement (max 100 characters)</h5><br>

                   <div class="alert p-2 " style="border:solid 1px lightgrey;font-weight:500">
                   <form class="theme-form" method="POST" action="{{ route('storeannouncementofclients') }}">
                                @csrf
                   <textarea type="text" name="announcements_for_clients" class="form-control" placeholder="Publish Announcements for clients " maxlength="100"></textarea><input type="hidden" name="role" value="Client"> <span class="pull-right"><button class="btn btn-primary btn-sm" style="border-radius:5px;"><i class="icon-announcement"></i> Make Announcement</button></span></div>
                   
                   </form>
                     <div class="alert p-2 " style="border:solid 1px lightgrey;font-weight:500">
                     <form class="theme-form" method="POST" action="{{ route('storeannouncementofemployees') }}">
                                @csrf
                     <textarea type="text" name="announcements_for_employee" class="form-control" placeholder="Publish Announcements for employees " maxlength="100"></textarea><input type="hidden" name="role" value="Employee"> <span class="pull-right"><button class="btn btn-primary btn-sm" style="border-radius:5px;"><i class="icon-announcement"></i> Make Announcement</button></span></div>
                     </form>


                </div>

                </div>

              </div>


              {{-- END --}}

                <div class="col-sm-12">
                  <div class="card">

                    <div class="card-body">

                    <h5 style="font-weight:700;font-size:16px;">Published Announcements </h5><br>
                    <h5>Clients</h5>

                    <div class="table-responsive theme-scrollbar">
                                        <table class="display" id="basic111">
                                              <thead>
                                                  <tr>
                                                      <th>Announcements for Clients</th>
                                                      <th>Created at</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($clientsannouncements as $client)
                                                  <tr>
                                                      <td>{{$client->announcements_for_clients}}</td>
                                                      <td>{{$client->created_at}}</td>
                                                      <td> <ul class="action">
                                                    
                                                     <li class="delete">
                                                            <a href="#" class="deletess-button" data-announcement-id="{{ $client->id }}" data-toggle="modal" data-target="#deletessModal">
                                                            <i class="icon-trash"></i>
                                                            </a>
                                                        </li>
                                            </ul>
                                        </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
<!-- Include jQuery -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

<!-- Include Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include Bootstrap CSS (for modal styling) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                                          <script>
                            $(document).ready( function() {
    $('#basic111').DataTable( {
        dom: 'Bfrtip',
         buttons: [
            {
                extend: 'excelHtml5',
                customize: function (xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    $('row c[r^="C"]', sheet).attr('s', '2');
                },
                 text: '<i class="fa fa-download"></i> Download As Excel',
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-download"></i> Download As CSV', // Custom HTML content
            }
        ]
        });
    });
                                    </script>
    <script>
    $(document).ready(function() {
        var announcementIdToDelete;

        // Listen for a click on a delete button with the "delete-button" class
        $('.deletess-button').on('click', function() {
            announcementIdToDelete = $(this).data('announcement-id');
            $('#deleteForm').attr('action', '/announcements/' + announcementIdToDelete);
        });

        // Reset the announcementIdToDelete when the modal is closed
        $('#deleteModal').on('hidden.bs.modal', function() {
            announcementIdToDelete = null;
        });
    });
</script>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deletessModal" tabindex="-1" role="dialog" aria-labelledby="deletessModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletessModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this announcement?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


                    </div>





                     </div>
                  </div>

                </div>
                <div class="col-sm-12">
                    <div class="card">

                                        <div class="card-body">
                              <h5>Employees</h5>

                        <div class="table-responsive theme-scrollbar">
                                                            <table  id="myTable" class="table table-bordered table-striped display">
                                <thead>
                                    <tr>
                                        <th>Announcements for Employees</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employeesannouncements as $employee)
                                    <tr>
                                        <td>{{$employee->announcements_for_employee}}</td>
                                        <td>{{$employee->created_at}}</td>
                                        <td> <ul class="action">
                                                    
                                                   <a href="#" class=" deletessd-button" data-announcements-id="{{ $employee->id }}" data-toggle="modal" data-target="#deletessdModal">
                                                   <i class="icon-trash"></i>
                                                            </a>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <script>
                            $(document).ready( function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
         buttons: [
            {
                extend: 'excelHtml5',
                customize: function (xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    $('row c[r^="C"]', sheet).attr('s', '2');
                },
                 text: '<i class="fa fa-download"></i> Download As Excel',
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-download"></i> Download As CSV', // Custom HTML content
            }
        ]
        });
    });
                                    </script>
                                      <script>
    $(document).ready(function() {
        var announcementIdToDeleted;

        // Listen for a click on a delete button with the "delete-button" class
        $('.deletessd-button').on('click', function() {
            announcementIdToDeleted = $(this).data('announcements-id');
            $('#deletedForm').attr('action', '/announcementsd/' + announcementIdToDeleted);
        });

        // Reset the announcementIdToDelete when the modal is closed
        $('#deletedModal').on('hidden.bs.modal', function() {
            announcementIdToDelete = null;
        });
    });
</script>
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deletessdModal" tabindex="-1" role="dialog" aria-labelledby="deletessdModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletessdModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this announcement?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deletedForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
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
<!-- latest jquery-->
<!-- <script src="/../assets/js/jquery-3.6.0.min.js"></script> -->
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
<!-- <script src="/../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="/../assets/js/datatable/datatables/datatable.custom.js"></script> -->
<script src="/../assets/js/tooltip-init.js"></script>

<script src="/../assets/js/notify/bootstrap-notify.min.js"></script>
<script src="/../assets/js/notify/notify-script.js"></script>


<script src="/../assets/js/sweet-alert/sweetalert.min.js"></script>
<script src="/../assets/js/sweet-alert/app.js"></script>
<!-- Template js-->
<script src="/../assets/js/script.js"></script>
<script src="/../assets/js/theme-customizer/customizer.js">  </script>

    <script>
    @if(session('success'))
        Swal.fire({
            title: 'Success',
            text: '{{ session('success') }}',
            icon: 'success',
        }).then(() => {
            window.location.href = '/admin/announcement'; // Redirect after clicking OK
        });
    @endif
</script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

<style>
    a.dt-button.buttons-csv.buttons-html5 {
    background: transparent;
    color: #333333 !important;
    font-size: 12px !important;
    border-radius: 7px !important;
    font-weight: 500 !important;
    border: none;
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.3);
}
a.dt-button.buttons-excel.buttons-html5 {
background: transparent;
    color: #333333 !important;
    font-size: 12px !important;
    border-radius: 7px !important;
    font-weight: 500 !important;
    border: none;
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.3);
}
i.icon-trash {
    color: #f81f58 !important;
}
</style>
    <!-- login js-->
  </body>

</html>
