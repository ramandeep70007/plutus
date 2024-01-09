
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

    <link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
     <script src="https://code.jquery.com/jquery-1.12.3.js"></script>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Add the Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<style>
 td{
        font-weight:500;
    }
</style>
<script>
    @if(session('success'))
        Swal.fire('Success', '{{ session('success') }}', 'success');
    @endif

    @if(session('error'))
        Swal.fire('Error', '{{ session('error') }}', 'error');
    @endif
</script>
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
                  <h3>Timesheets</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item active">Timesheets</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid basic_table">
            <div class="row">

             
                   <h5 style="font-weight:700">{{$user->name}}
                   </h5>
                   <form class="theme-form" method="POST" action="{{ route('updatetimesheet') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="clientSelect">Select Client:</label>
                    <select class="form-control" id="clientSelect" name="client_id" >
                      <option value="" disabled Selected>Select Client</option>
                      @foreach($clients as $client)
                      <option value="{{ $client->client_id }}">{{ $client->name }}</option>
                      @endforeach
                    

                    </select><br>
                    <label for="clientSelect">Non Client:</label>
                   <input type="text"  name="non_client" class="form-control" ><br>
                    <label for="clientSelect">Time Spent (In Min.):</label>
                   <input type="number" min="0" max="1440" name="spenttime" class="form-control" required><br>
                   <label for="clientSelect">Date of Work:</label>
                   <input type="text"  name="date_of_work" id="date_of_work" class="form-control" required><br>
                 <script>
    // Get the current date
    const currentDate = new Date();

    // Calculate the start of the current week (Monday)
    const currentWeekStart = new Date(currentDate);
    const dayOfWeek = currentDate.getDay();
    currentWeekStart.setDate(currentDate.getDate() - (dayOfWeek - 1 + 7) % 7);

    // Calculate the end of the current week (Sunday)
    const currentWeekEnd = new Date(currentWeekStart);
    currentWeekEnd.setDate(currentWeekStart.getDate() + 6);

    // Initialize Flatpickr for Tenure Start Date
    flatpickr("#date_of_work", {
        dateFormat: "Y-m-d", // Set the date format to match the server-side format
        // minDate: currentWeekStart,
        maxDate: currentWeekEnd,
        locale: {
            firstDayOfWeek: 1 // Set Monday as the first day of the week
        }
    });

    
</script>


                    <label for="clientSelect">Work Description (Max 25 words):</label>
                   <textarea type="textarea" name="timesheettxt"  id="wordLimitInput" class="form-control"  required></textarea><br>
                   
                        <p id="wordCount">0 words</p>
                   <script>
  const input = document.getElementById("wordLimitInput");
  const wordCount = document.getElementById("wordCount");
  const wordLimit = 25;

  input.addEventListener("input", () => {
    const words = input.value.split(/\s+/).filter(word => word !== "").length;
    wordCount.textContent = `${words} words`;

    if (words > wordLimit) {
      input.value = input.value
        .split(/\s+/)
        .slice(0, wordLimit)
        .join(" ");
      wordCount.textContent = `${wordLimit} words`;
    }
  });
</script>
                   <input type="hidden" name="employee_id" value="{{$user->id}}">
                   <button type="submit" class="btn btn-primary btn-sm pull-right" style="border-radius:5px;"> Add</button>
                    </form>
                   </div>

                  
  <br>
                  <div class="timesheetdata">
                                  <table class="display" id="basic1111122">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Client Name </th>
                                                            <th>Time Spent (In Min.) </th>
                                                            <th>Work description </th>
                                                            <th>Date of Work</th>
                                                            <th>Created At</th>
                                                            <th>Action</th>
                                                            
                                                            

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($results  as $index => $cli)

                                                        <tr>
                                                            
                                                      
                                                       
                                                         <td>{{ $loop->iteration }}</td>
                                                        <td>{{$cli->client_name}}</td>
                                                        <td>{{$cli->spenttime}}</td>
                                                        <td>{{$cli->timesheet_txt }}</td>
                                                        <td> {{ $cli->date_of_work }}</td>
                                                        <td>{{$cli->created_date   }}</td>
                                                        <td> <ul class="action">
                                                    <li class="edit"> <a href="#"><i class="icon-pencil-alt text-primary " onclick="openModal({{$cli->id}})"></i></a></li>
                                                  <li class="delete" id="delete-{{ $cli->id }}">
    <form method="POST" action="{{ route('time.delete', ['id' => $cli->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this record?')">
            <i class="icon-trash"></i>
        </button>
    </form>
</li>


                                                   
                                            </ul></td>    
                                                        
                                                      
                                                        
                                                        </tr>


                                                        @endforeach



                                                      

                                                        </tbody>
                                                    </table>
                                  </div>
                                  
                  </div>


                     

            </div>

           </div>
 @foreach($results  as $index => $cli)

<div class="modal fade" id="statustimeModal{{$cli->id}}" tabindex="-1" aria-labelledby="statustimeModal{{$cli->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statustimeModal{{$cli->id}}Label">Update </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Display user data here -->
               <form class="theme-form" method="POST" action="{{ route('empupdatetimesheet') }}" enctype="multipart/form-data">
                                @csrf
                               <label for="clientSelect">Client Name:</label>
                               <input type="text" class="form-control mt-2" name="client_id" value="{{$cli->client_name}}"  id="client_id" readonly><br>
                               <label for="clientSelect">Time Spent (In Min.):</label>
                               <input type="number" min="0" max="1440" name="spenttime" class="form-control" value="{{$cli->spenttime}}" required><br>
                               <label for="clientSelect">Date of Work:</label>
                              <input type="date" name="date_of_work" id="date_of_work{{$cli->id}}" class="form-control" required value="{{$cli->date_of_work}}">
                               
                                             <label for="clientSelect">Work description (Max 25 Words):</label>
                               <textarea type="textarea" name="timesheettxt" id="wordLimitInputs" class="form-control"  required> {{$cli->timesheet_txt}}</textarea><br>
                                <!--<p id="wordCounts">0 words</p>-->
                 <script>
  const textarea = document.getElementById("wordLimitInputs");
  const wordCount = document.getElementById("wordCounts");
  const wordLimit = 25;

  textarea.addEventListener("input", () => {
    const words = textarea.value.split(/\s+/).filter(word => word !== "").length;
    wordCount.textContent = `${words} words`;

    if (words > wordLimit) {
      // Split the text content of the textarea and slice it to the word limit.
      textarea.textContent = textarea.textContent
        .split(/\s+/)
        .slice(0, wordLimit)
        .join(" ");
      wordCount.textContent = `${wordLimit} words`;
    }
  });
</script>
                               <input type="hidden" class="form-control mt-2" name="time_id"  id="time_id" value="{{$cli->id}}">
                               
                                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Save</button>
            </div>
             </form>
        </div>
    </div>
</div>
@endforeach

<script>
// Function to initialize the date input for the current week
function initializeDateInput(element) {
    const currentDate = new Date();
    const dayOfWeek = currentDate.getDay(); // 0 for Sunday, 1 for Monday, etc.
    
    // Calculate the start of the current week (Monday)
    const currentWeekStart = new Date(currentDate);
    currentWeekStart.setDate(currentDate.getDate() - (dayOfWeek - 1 + 7) % 7);
    
    // Calculate the end of the current week (Sunday)
    const currentWeekEnd = new Date(currentWeekStart);
    currentWeekEnd.setDate(currentWeekStart.getDate() + 6);
    
    // Format the start and end dates to yyyy-mm-dd
    const startDateFormatted = currentWeekStart.toISOString().slice(0, 10);
    const endDateFormatted = currentWeekEnd.toISOString().slice(0, 10);
    
    // Set the min and max attributes of the date input
    // element.min = startDateFormatted;
    element.max = endDateFormatted;
}

// Get all date input elements by class or other means
const dateInputs = document.querySelectorAll('input[type="date"]');

// Initialize each date input element
dateInputs.forEach(function(input) {
    initializeDateInput(input);
});
</script>


<script>
    // Function to open the modal when the edit button is clicked
    function openModal(employeeId) {
        $('#statustimeModal' + employeeId).modal('show');
    }
</script>
<script>
    var selectedEmployeeNames = [];

    $(document).ready(function () {
        var table = $('#basic1111122').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    customize: function (xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('row c[r^="C"]', sheet).attr('s', '2');
                    },
                    text: '<i class="fa fa-download"></i> Download As Excel',
                    filename: function () {
                        // Check if there is any filter applied
                        if (table && table.search()) {
                            return selectedEmployeeNames.join('_') + '_time_sheet_file';
                        } else {
                            return 'all_employee_time_sheet_file';
                        }
                    },
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-download"></i> Download As CSV',
                    filename: function () {
                        // Check if there is any filter applied
                        if (table && table.search()) {
                            return selectedEmployeeNames.join('_') + '_time_sheet_file';
                        } else {
                            return 'all_employee_time_sheet_file';
                        }
                    },
                }
            ]
        });

        // Listen for the DataTables draw event to update selectedEmployeeNames
        table.on('draw.dt', function () {
            // Extract unique employee names from the filtered data
            var uniqueEmployeeNames = table
                .column(1, { search: 'applied' }) // Assuming 'Employee Name' is the first column (index 0)
                .data()
                .unique()
                .toArray();

            // Update selectedEmployeeNames
            selectedEmployeeNames = uniqueEmployeeNames;
        });
    });
</script>

            {{-- END --}}


              </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('employee.includes.footer')
      </div>
    </div>
    <!-- latest jquery-->
    <!--<script src="../assets/js/jquery-3.6.0.min.js"></script>-->
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

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js">  </script>
<!--    <script src="/../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>-->
<!--<script src="/../assets/js/datatable/datatables/datatable.custom.js"></script>-->
<script src="/../assets/js/sweet-alert/sweetalert.min.js"></script>
<script src="/../assets/js/sweet-alert/app.js"></script>

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
</script>
    <!-- login js-->
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
</style>
    <!-- login js-->
  </body>

</html>
