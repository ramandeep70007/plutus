@include('user/includes.header');

<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/sweetalert2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- App css-->
<link rel="stylesheet" type="text/css" href="/../assets/css/style.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Add the Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Add the Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">
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
                              
                      </div>
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
        @include('admin.includes.sidebar');
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Clients</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active">Clients</li>
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
                                <h4 class="">All Clients

                            <button class="btn btn-primary pull-right btn-sm" style="border-radius:5px;" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-plus"></i> Add Client</button></h4>

                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" style="font-weight:700">Add Client</h5>
                            </div>
                            <div class="modal-body">
                            <form class="theme-form" method="POST" action="{{ route('storeclients') }}">
                                @csrf
                              <input type="text" class="form-control" name="name" id="name" placeholder="Legal Entity Name *" required>
                              <input type="text" class="form-control mt-2" name="phone" id="phone" placeholder="Mobile Number *" required>

                              

                              <input type="email" class="form-control mt-2" name="email" id="email" placeholder="Login Email *" required>

                              <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Password *" required>
                              <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required  placeholder="Confirm Password *">
                              <input type="hidden" class="form-control mt-2" name="role" id="role" value="Client">

                              <input type="text" class="form-control mt-2" name="brand_name" id="brand_name" placeholder="Brand name *" required>

                              <input type="text" class="form-control mt-2" name="client_correspondence_address" id="client_correspondence_address" required placeholder="Correspondence address *">


                              <input type="text" class="form-control mt-2" name="client_registered_office_address" id="client_registered_office_address" required placeholder="Registered office address *">

                              <select id="plan_type" class="form-select mt-2" placeholder="Plan type" name="plan_type" required>
                                <option  disabled>Select Your Plan *</option>
                                <option value="Basic">Basic</option>
                                <option value="Gold">Gold</option>
                                <option value="Premium">Premium</option>
                              </select>


                              <input type="text" class="form-control mt-2" name="authorised_signatory_name" required id="authorised_signatory_name" placeholder="Authorised Signatory Name *">


                            </div>
                           


                            <div class="modal-footer">
                              <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Add</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                            </div>
                            
                            <div class="card-body">
                            
                                <div class="table-responsive theme-scrollbar">
        
                                    <table id="example11" class="display nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Legal Entity Name </th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Brand Name </th>
                                            <th>Correspondence Address </th>
                                            <th>Registered Office Address </th>
                                            <th>Authorised Signatory Name </th>
                                         
                                            <th>Plan</th>
                                           
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clients as $client)

                                        <tr>
                                        <td >{{ $loop->iteration }}</td>
                                        <td class="break-after-two-words" value="{{$client->name}}">
        {{ $client->name }}
    </td>
                                        <td value="{{$client->phone}}">{{$client->phone}}</td>
                                        <td value="{{$client->email}}">{{$client->email}}</td>
                                         <td value="{{$client->password}}">{{$client->password}}</td>
                                        <td class="break-after-two-words" value="{{$client->brand_name}}">{{$client->brand_name}}</td>
                                        <td value="{{$client->client_correspondence_address}}"> <?php
    $address = $client->client_correspondence_address;
    $lines = explode(",", $address);
    foreach ($lines as $line) {
        echo trim($line) . "<br>";
    }
    ?></td>
                                        <td value="{{$client->client_registered_office_address}}"> <?php
    $address1 = $client->client_registered_office_address;
    $lines1 = explode(",", $address1);
    foreach ($lines1 as $line1) {
        echo trim($line1) . "<br>";
    }
    ?></td>
                                        <td class="break-after-two-words" value="{{$client->authorised_signatory_name}}">{{$client->authorised_signatory_name}}</td>
                                        
                                         <td value="{{$client->plan_type}}">{{$client->plan_type}}</td>
                                       
                                         <td><ul class="action">
                                             <li class="edit">
                                                            <a href="#" class=" edit-button" data-client-id="{{ $client->user_id }}" data-toggle="modal" data-target="#editModal{{ $client->user_id }}" data-plan_type="{{$client->plan_type}}" data-authorised_signatory_name="{{$client->authorised_signatory_name}}" data-name="{{$client->name}}" data-client_registered_office_address="{{$client->client_registered_office_address}}" data-phone="{{$client->phone}}" data-email="{{$client->email}}" data-password="{{$client->password}}" data-brand_name="{{$client->brand_name}}" data-client_correspondence_address="{{$client->client_correspondence_address}}" data-id="{{$client->user_id}}">
                                                            <i class="icon-pencil-alt text-primary"></i>
                                                            </a>
                                                        </li>
                                                        <li class="delete" id="delete-{{ $client->user_id }}">
                                                        <form method="POST" action="{{ route('client.delete', ['id' => $client->user_id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this client?')">
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    
                                            </ul>
                            </td>
                                        </tr>
 
 <!-- Delete Confirmation Modal -->
<div class="modal fade" id="editModal{{ $client->user_id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Client</h5>
                
            </div>
            <div class="modal-body">
                <form class="theme-form" method="POST" action="{{ route('updateclientprofiles') }}" enctype="multipart/form-data">
                                @csrf
                               
                              <input type="text" class="form-control" name="name" value="{{$client->name}}" id="name" placeholder="Name">
                              <input type="text" class="form-control mt-2" name="phone" value="{{$client->phone}}" id="phone" placeholder="Mobile Number">

                              

                              <input type="email" class="form-control mt-2" name="email" id="email" value="{{$client->email}}" placeholder="Login Email" disabled>
                              <input type="text" class="form-control mt-2" name="password" id="password" value="{{$client->password}}">
                              
                              <input type="hidden" class="form-control mt-2" name="client_id" id="client_id" value="{{$client->user_id}}">

                           

                             

                                        
                              <input type="hidden" class="form-control mt-2" name="role" id="role" value="Client">

                              <input type="text" class="form-control mt-2" name="brand_name" id="brand_name" value="{{$client->brand_name}}" placeholder="Brand name">

                                        

                              <input type="text" class="form-control mt-2" name="client_correspondence_address" value="{{$client->client_correspondence_address}}" id="client_correspondence_address" placeholder="Correspondence address">


                                <input type="text" class="form-control mt-2" name="client_registered_office_address" id="client_registered_office_address" value="{{$client->client_registered_office_address}}" placeholder="Registered office address">

                                <select id="plan_type" class="form-select mt-2" placeholder="Plan type" name="plan_type">
                                <option  disabled Selected>Select Your Plan</option>
                                <option value="Basic" {{ $client->plan_type === 'Basic' ? ' selected' : '' }}>Basic</option>
                                <option value="Gold" {{ $client->plan_type === 'Gold' ? ' selected' : '' }}>Gold</option>
                                <option value="Premium" {{ $client->plan_type === 'Premium' ? ' selected' : '' }}>Premium</option>
                              </select>

                        

<input type="text" class="form-control mt-2" name="authorised_signatory_name" id="authorised_signatory_name" value="{{$client->authorised_signatory_name}}" placeholder="Authorised Signatory Name">


                                        
                                        <input type="file" class="form-control mt-2" name="profile_picture" id="profile_picture">
                          
                            
                                  
                         
                               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                 <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Submit</button>
               
            </div>
            
                                          </form>
        </div>
    </div>
</div>


                                        
                                        @endforeach




                                        </tbody>
                                    </table>
<script>
    $(document).ready(function () {
        // Find all <td> elements with the class "break-after-two-words"
        $('.break-after-two-words').each(function () {
            // Get the text content of the <td> element
            var text = $(this).text();
            // Split the text into words
            var words = text.split(' ');
            // Create an array to store groups of two words
            var groups = [];
            for (var i = 0; i < words.length; i += 2) {
                groups.push(words.slice(i, i + 2).join(' '));
            }
            // Join the groups with line breaks and set it as the new content of the <td> element
            $(this).html(groups.join('<br>'));
        });
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 


<script>
                                        $(document).ready( function() {
    $('#example11').DataTable( {
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
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Zero Configuration  Ends-->

                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>



        
        <!-- footer start-->
        @include('admin.includes.footer');
    </div>
</div>
<!-- latest jquery-->
<!-- <script src="/../assets/js/jquery-3.6.0.min.js"></script> -->
<!-- Bootstrap js-->
<script src="/../assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<script src="/../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/../assets/js/icons/feather-icon/feather-icon.js"></script>

<script src="/../assets/js/scrollbar/simplebar.js"></script>
<script src="/../assets/js/scrollbar/custom.js"></script>
 
<script src="/../assets/js/config.js"></script>
<script src="/../assets/js/sidebar-menu.js"></script>
<!-- <script src="/../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>-->
<!--<script src="/../assets/js/datatable/datatables/datatable.custom.js"></script> -->
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
            window.location.href = '/admin/clients'; // Redirect after clicking OK
        });
    @endif
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
tr.odd {
    font-size: 14px !important;
}
tr.even {
    font-size: 14px !important;
}
</style
<!-- login js-->
</body>

</html>
