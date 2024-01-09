@include('user/includes.header');

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
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    @if(session('success'))
        Swal.fire('Success', '{{ session('success') }}', 'success');
    @endif

    @if(session('error'))
        Swal.fire('Error', '{{ session('error') }}', 'error');
    @endif
</script>

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




<!-- Include the CSS file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

<!-- Include the JS file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<script>
    @if(session('success'))
        Swal.fire('Success', '{{ session('success') }}', 'success');
    @endif

    @if(session('error'))
        Swal.fire('Error', '{{ session('error') }}', 'error');
    @endif
</script>
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
                            <h3>Employees</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active">Employees</li>
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
                                <h4 class="">All Employees

                                <button class="btn btn-primary pull-right btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" style="border-radius:5px;"><i class="fa fa-plus"></i> Add Employee</button></h4>
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" style="font-weight:700">Add Employee</h5>
                                        </div>
                                        <div class="modal-body">
                                        <form class="theme-form" method="POST" action="{{ route('storeemployee') }}">
                                            @csrf
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                                        <input type="text" class="form-control mt-2" name="phone" id="phone" placeholder="Mobile Number" >

                                        

                                        <input type="email" class="form-control mt-2" name="email" id="email"  placeholder="Login Email *" required>

                                        <input type="password" class="form-control mt-2" id="password" required name="password" placeholder="Password *">
                                        <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password *">
                                        <input type="hidden" class="form-control mt-2" name="role" id="role" value="Employee">

                                        

                                        

                                        <input type="email" class="form-control  mt-2" name="personal_email_id" id="personal_email_id" placeholder="Personal email id" >


                                        <input type="text" class="form-control mt-2" name="designation" id="designation" placeholder="Designation" >

                                        <input type="text" class="form-control mt-2" name="department" id="department" placeholder="Department" >

                                        <input type="text" class="form-control mt-2" id="joining_date" name="joining_date" placeholder="Joining date" >

                                        <input type="text" class="form-control mt-2" name="immediate_reporting_manager" id="immediate_reporting_manager" placeholder="Immediate Reporting Manager">
                                        <input type="text" class="form-control mt-2" name="permanent_address_employee"  id="permanent_address_employee" placeholder="Permanent address as per aadhar card">
                                        <input type="text" class="form-control mt-2" name="correspondence_address_employee"  id="correspondence_address_employee" placeholder="Correspondence address">
                                        
                                        <input type="text" class="form-control mt-2" name="aadhar_number_employee"  id="aadhar_number_employee" placeholder="Aadhar Number">

                                        </div>
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


                                        <div class="modal-footer">
                                        <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Add</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="basic21">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Assign Clients</th>
                                            <th>Profile </th>
                                            <th>Phone </th>
                                            <th>Email </th>
                                            <th>Password </th>
                                            <th>Personal Email Id </th>
                                            <th>Designation </th>
                                            <th>Department </th>
                                            <th>Immediate Reporting Manager </th>
                                            <th>Date of Joining</th>
                                            <th>Correspondence Address</th>
                                            <th>Permanent Address</th>
                                            <th>Aadhaar Number</th>
                                            <th>Profile Picture</th>
                                            <th>Appointment letters</th>
                                            <th>Increment letters/appraisals</th>
                                            <th>KYC docs</th>
                                            <th>Policy manuals of the company</th>
                                            
                                            <th>Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $emp)

                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <button class="btn btn-info  btn-xs" data-employee-id="{{$emp->user_id}}" data-bs-toggle="modal" data-bs-target="#assignClientModal" style="border-radius:5px;font-size:14px;width:100px;">Assign</button>

                                        </td>

                                        <td> {{$emp->name}}</td>
                                        <td> {{$emp->phone}}</td>
                                        <td> {{$emp->email}}</td>
                                        <td> {{$emp->password}}</td>
                                        <td> {{$emp->personal_email_id}}</td>
                                        <td> {{$emp->designation}}</td>
                                        <td> {{$emp->department}}</td>
                                        <td> {{$emp->immediate_reporting_manager}}</td>
                                        <td>{{ \Carbon\Carbon::parse($emp->joining_date)->format('d M, Y') }}</td>
                                        <td> {{$emp->correspondence_address_employee}}</td>
                                        <td> {{$emp->permanent_address_employee}}</td>
                                        <td> {{$emp->aadhar_number_employee}}</td>
                                        <td>
                @if($emp->profile_picture)
                    <!--<img src="{{ asset('/' . $emp->profile_picture) }}" class="text-center" style="height: 100px; border-radius: 50%;">-->
                    <br>
                    <a href="{{ asset('/' . $emp->profile_picture) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No profile picture available.</p>
                @endif
            </td>
            <td>
                @if($emp->appointment_letter)
                    
                    <a href="{{ asset('/' . $emp->appointment_letter) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No Appointment letters available.</p>
                @endif
            </td>
            <td>
                @if($emp->increment_letter)
                    
                    <a href="{{ asset('/' . $emp->increment_letter) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No Increment letters/appraisals available.</p>
                @endif
            </td>
            <td>
                @if($emp->kra_docs)
                    
                    <a href="{{ asset('/' . $emp->kra_docs) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No  KYC docs available.</p>
                @endif
            </td>
            <td>
                @if($emp->policy_manuals)
                   
                    <a href="{{ asset('/' . $emp->policy_manuals) }}" download> <i class="fas fa-download"></i></a>
                @else
                    <p>No Policy manuals of the company available.</p>
                @endif
            </td>
                                      
                                        <td> <ul class="action">
                                                    <li class="edit"> <a href="#"><i class="icon-pencil-alt text-primary" data-bs-toggle="modal" data-bs-target="#profileModal{{$emp->user_id}}"></i></a></li>
                                                    <li class="delete" id="delete-{{ $emp->user_id }}">
                                                        <form method="POST" action="{{ route('employee.delete', ['id' => $emp->user_id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this employee?')">
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                            </ul>
                                        </td>
                                        
                      

                                       
                                        </tr>
                                       
                                      
                                        <div class="modal fade" id="profileModal{{$emp->user_id}}" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel{{$emp->user_id}}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="profileModalLabel{{$emp->user_id}}">Edit User Profile</h5>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="theme-form" method="POST" action="{{ route('updateemployeeprofile') }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" class="form-control" name="employee_id" value="{{$emp->user_id}}" id="employee_id">
                                                                    <input type="text" class="form-control" name="name" id="name" value="{{$emp->name}}" placeholder="Name">
                                                                    <input type="text" class="form-control mt-2" name="phone" id="phone" value="{{$emp->phone}}" placeholder="Mobile Number">
                                                                    <input type="email" class="form-control mt-2" name="email" id="email" value="{{$emp->email}}" placeholder="Login Email" disable>
                                                                    <input type="text" class="form-control mt-2" id="password" value="{{$emp->password}}"  name="password" placeholder="Password *">
                                                                    <input type="hidden" class="form-control mt-2" name="role" id="role"  value="Employee">
                                                                    <input type="email" class="form-control mt-2" name="personal_email_id" value="{{$emp->personal_email_id}}" id="personal_email_id" placeholder="Personal Email ID">
                                                                    <input type="text" class="form-control mt-2" name="designation" id="designation" value="{{$emp->designation}}" placeholder="Designation">
                                                                    <input type="text" class="form-control mt-2" name="department" id="department" value="{{$emp->department}}" placeholder="Department">
                                                                    <input type="text" class="form-control mt-2" name="joining_date" id="joining_date" value="{{$emp->joining_date}}" placeholder="Joining Date">
                                                                    <input type="text" class="form-control mt-2" name="immediate_reporting_manager" value="{{$emp->immediate_reporting_manager}}" id="immediate_reporting_manager" placeholder="Immediate Reporting Manager">
                                                                    <input type="text" class="form-control mt-2" name="permanent_address_employee" id="permanent_address_employee" value="{{$emp->permanent_address_employee}}" placeholder="Permanent address as per aadhar card">
                                                                    <input type="text" class="form-control mt-2" name="correspondence_address_employee" id="correspondence_address_employee" value="{{$emp->correspondence_address_employee}}"  placeholder="Correspondence address">
                                                                               
                                                                                <input type="text" class="form-control mt-2" name="aadhar_number_employee" id="aadhar_number_employee" value="{{$emp->aadhar_number_employee}}" placeholder="Aadhar Number">
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
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                                                                        <button class="btn btn-primary btn-sm" style="border-radius:5px;" type="submit">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <script>
   $(document).ready(function () {
    $('#basic21').DataTable({
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
                                    <!-- Add Flatpickr library -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    

    // Initialize Flatpickr for Joining Date
    flatpickr("#joining_date", {
        dateFormat: "Y-m-d",
         // Prevent selecting future dates
    });
</script>
                                </div>
                            </div>
                            
                            
                            <div class="modal fade" id="assignClientModal" tabindex="-1" role="dialog" aria-labelledby="assignClientModal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" style="font-weight:700">Assign Clients</h5>
                                            </div>
                                            <div class="modal-body">
                                                    <form class="theme-form" method="POST" action="{{ route('assignClient') }}">
                                                        @csrf
                                                        <label for="clientSelect">Select Clients:</label><br>
                                                <div class="scrollable-container" id="clientSelect">

                                                   {{-- 
<!--                                                   <input type="text" id="clientSearch" class="form-control" placeholder="Search for clients"><br>-->
<!--                                                    <div id="matchingContainer"></div>-->
<!--<div id="nonMatchingContainer"></div>-->

<!--                                                    @foreach($clients as $client)-->
<!--                                                        <label>-->
<!--                                                            <input type="checkbox" name="client_id[]" value="{{ $client->user_id }}" class="client-checkbox">-->
<!--                                                            <span class="clientcolor">{{ $client->name }}</span>-->
<!--                                                        </label><br>-->
<!--                                                    @endforeach-->

--}}
<select name="client_id[]" class="client-select" multiple="multiple">
    @foreach($clients as $client)
        <option value="{{ $client->user_id }}">{{ $client->name }}</option>
    @endforeach
</select>
     <script>
    $(document).ready(function() {
        $('.client-select').select2({
            placeholder: 'Select clients',
            allowClear: true
        });
    });
</script>                                           </div>
{{--
<!--<script>-->
<!--    const clientSearchInput = document.getElementById('clientSearch');-->
<!--    const clientCheckboxes = document.querySelectorAll('.client-checkbox');-->
<!--    const clientLabels = Array.from(clientCheckboxes, checkbox => checkbox.closest('label'));-->
<!--    const matchingContainer = document.getElementById('matchingContainer');-->
<!--    const nonMatchingContainer = document.getElementById('nonMatchingContainer');-->
<!--    const selectedCheckboxes = {};-->

<!--    clientCheckboxes.forEach((checkbox, index) => {-->
<!--        checkbox.addEventListener('change', () => {-->
<!--            const value = checkbox.value;-->
<!--            selectedCheckboxes[value] = checkbox.checked;-->
<!--            updateDisplay();-->
<!--        });-->
<!--    });-->

<!--    clientSearchInput.addEventListener('input', () => {-->
<!--        updateDisplay();-->
<!--    });-->

<!--    function updateDisplay() {-->
<!--        const searchQuery = clientSearchInput.value.trim().toLowerCase();-->

        matchingContainer.innerHTML = ''; // Clear previous matching elements
        nonMatchingContainer.innerHTML = ''; // Clear previous non-matching elements

<!--        clientLabels.forEach((label, index) => {-->
<!--            const clientName = clientCheckboxes[index].nextElementSibling.textContent.toLowerCase();-->
<!--            const isVisible = clientName.includes(searchQuery) || selectedCheckboxes[clientCheckboxes[index].value];-->

<!--            if (isVisible) {-->
<!--                matchingContainer.appendChild(label.cloneNode(true));-->
<!--            } else {-->
<!--                nonMatchingContainer.appendChild(label.cloneNode(true));-->
<!--            }-->

<!--            label.style.display = isVisible ? 'block' : 'none';-->
<!--        });-->

        // Remove white space for hidden elements
<!--        clientLabels.forEach(label => {-->
<!--            if (label.style.display === 'none') {-->
<!--                label.style.marginBottom = '0';-->
<!--            }-->
<!--        });-->
<!--    }-->

    // Initialize the display
<!--    updateDisplay();-->
<!--</script>-->
--}}






 




                                                        
                                                        <input type="hidden"  id="employeeIdInput" name="employee_id"><br>
                                                        <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Assign</button>
                                                    </form>
                                            </div>
                                       


                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary btn-sm" style="border-radius:5px;" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                        </div>
                                    </div>
                             </div>

                             <script>
                                $(document).ready(function() {
                                $('#assignClientModal').on('show.bs.modal', function (event) {
                                    var button = $(event.relatedTarget); // Button that triggered the modal
                                    var employeeId = button.data('employee-id'); // Extract employee ID from data attribute
                                    $('#employeeIdInput').val(employeeId); // Set the employee ID in the hidden input field
                                });
                                });
                            </script>

                        </div>
                    </div>
                    <!-- Zero Configuration  Ends-->

                </div>
            </div>
            <!-- Container-fluid Ends-->
              <div class="container-fluid">
                <div class="row">
                    <!-- Zero Configuration  Starts-->
                    <div class="col-sm-12">
                        <h4 class="">All Assign Client List</h2>
                        <div class="card">
                            <div class="card-header pb-0">
                 <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                                                            <table class="display" id="basic21no">
    <thead>
        <tr>
            <th>#</th>
            <th>Employee Name</th>
            <th>Client Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($assignments as $assignment)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $assignment->employee_name }}</td>
            <td>{{ $assignment->client_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('#basic21no').DataTable({
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
                            </div>
                            </div>
                            </div>
            
        </div>

        
        <!-- footer start-->
        @include('admin.includes.footer');
    </div>
</div>
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
  <script>
    @if(session('success'))
        Swal.fire('Success', '{{ session('success') }}', 'success');
    @endif

    @if(session('error'))
        Swal.fire('Error', '{{ session('error') }}', 'error');
    @endif
</script>
</script>
<!-- login js-->


@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
<script>
    // Check if there's a message in the session (set by the controller)
    var message = "{{ Session::get('message') }}";

    // Display SweetAlert popup if a message is available
    if (message) {
        Swal.fire({
            icon: message.includes('successfully') ? 'success' : 'error', // Use 'success' or 'error' icon based on the message content
            title: message,
            showConfirmButton: false,
            timer: 2000 // Set the popup to close after 2 seconds (adjust as needed)
        });
    }
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
.myselect option {
    padding: 10px;
}

.scrollable-container {
    max-height: 150px; /* Set the maximum height you want */
    overflow-y: auto;
    border: 1px solid #ccc; /* Add a border for a cleaner look */
    padding: 5px; /* Add some padding for spacing */
}
span.clientcolor {
    color: grey;
}
</style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
</body>

</html>
