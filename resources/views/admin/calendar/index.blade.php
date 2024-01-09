
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
    <title>Plutus - Calendar</title><link rel="preconnect" href="https://fonts.googleapis.com/">
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/calendar.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
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
        @include('admin/includes.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <!-- <h3>Calendar For Satyam Parekh</h3> -->
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Calender</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <label for="clientSelect">Select Client:</label>
                    <select class="form-control" id="clientSelect" name="client_id">
                      <option value="" disabled Selected>Select Client</option>
                      @foreach($clients  as $client)
                      <option value="{{ $client->id }}" {{ $loop->first ? 'selected' : '' }}>{{ $client->name }}</option>
                      @endforeach
                    </select>
             </div>
             <div class="col-lg-6">
             <label for="month-select">Select a Month:</label>
              <select class="form-control" id="month-select"></select>                           
              </div>
            </div>
          </div>
          <br>
          <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group mb-3">
                    
                    <button class="btn btn-primary" id="export-csv">Export CSV</button>
                </div>
            </div>
        </div>
    </div>
    <br>
          <div class="container-fluid calendar-basic">
            <div class="card">
              <div class="card-body">
                <div class="row" id="wrap">
                  
                  <div class="col-xxl-12 box-col-70">
                    <div class="calendar-default" id="calendar-container">
                      <div id="calendar">
                      
                      </div>

                          <div class="modal fade" id="event-details-modal" tabindex="-1" role="dialog" aria-labelledby="event-details-modal-label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="event-details-modal-label">Event Details</h5>
                          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button> -->
                          </div>
                          <div class="modal-body">
                          <!-- Event details will be displayed here -->
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary reload" data-dismiss="modal">Close</button>
                          </div>
                          </div>
                          </div>
                          </div>

                          </div>

                                                      <script>
                                                      // Wait for the document to be fully loaded
                                                      document.addEventListener('DOMContentLoaded', function () {
                                                      // Find the "Close" button with the "reload" class
                                                      var reloadButton = document.querySelector('.modal-footer .reload');

                                                      // Add a click event listener to the button
                                                      reloadButton.addEventListener('click', function () {
                                                      // Reload the page
                                                      location.reload();
                                                      });
                                                      });
                                                      </script>
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
    <script src="../assets/js/calendar/fullcalendar.min.js"></script>
    <script src="../assets/js/calendar/fullcalendar-custom.js"></script>
    <!-- Template js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js">  </script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs@4.3.1/dist/exceljs.min.js"></script>


    <script>
    var calendarEvents = <?php echo json_encode($calendarEvents); ?>;
</script>


    <!-- login js-->
    <script>
 document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // ... other FullCalendar options ...
        });

        // Get the month selection dropdown
        var monthSelect = document.getElementById('month-select');

        // Function to update the calendar when the month dropdown changes
        function updateCalendarMonth() {
            var selectedMonth = monthSelect.value;
            if (selectedMonth) {
                // Change the calendar view to the selected month
                calendar.gotoDate(selectedMonth);
            }
        }

        // Add an event listener to the month selection dropdown
        monthSelect.addEventListener('change', updateCalendarMonth);

        // Populate the month dropdown with options for the next 6 months in the future
        var currentDate = new Date();
        for (var i = -24; i < 24; i++) { // Show 6 months in the future
            var nextMonth = new Date(currentDate);
            nextMonth.setMonth(currentDate.getMonth() + i);
            var monthOption = document.createElement('option');
            monthOption.value = nextMonth.toISOString();
            monthOption.text = nextMonth.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
            monthSelect.appendChild(monthOption);
        }

        // Set the default selected option to the current month
        var currentMonthOption = document.querySelector('option[value="' + currentDate.toISOString() + '"]');
        if (currentMonthOption) {
            currentMonthOption.selected = true;
        }

        // Trigger the change event on page load to set the initial calendar month
        updateCalendarMonth();

        // Get the client selection dropdown
        var clientSelect = document.getElementById('clientSelect');

        // Add an event listener to the client selection dropdown
        clientSelect.addEventListener('change', function () {
            var selectedClientId = this.value;
            if (selectedClientId) {
                // Filter events based on the selected client
                var filteredEvents = {!! json_encode($calendarEvents) !!}.filter(function (event) {
                    return event.client_id == selectedClientId;
                });
                // Set the filtered events as the calendar's event source
                calendar.removeAllEvents();
                calendar.addEventSource(filteredEvents);
            } else {
                // If no client is selected, reset the calendar to show all events
                calendar.removeAllEvents();
                calendar.addEventSource({!! json_encode($calendarEvents) !!});
            }
            // Render the calendar
            calendar.render();
        });

        // Trigger the change event on page load to filter events based on the default selection
        var defaultSelectedClientId = clientSelect.value;
        if (defaultSelectedClientId) {
            var changeEvent = new Event('change');
            clientSelect.dispatchEvent(changeEvent);
        }

        // Event click handler to display event details in a modal
        calendar.setOption('eventClick', function (info) {
            var event = info.event;
            var eventDetails = "Title: " + event.title + "<br>" +
                "Start: " + event.start.toLocaleDateString() + "<br>" +
                "Description: " + event.extendedProps.description;

            // Use Bootstrap's Modal to display the popup
            $('#event-details-modal .modal-body').html(eventDetails);
            $('#event-details-modal').modal('show');
        });

        calendar.render();
      
        var filteredCalendarEvents = [];

// Event listener for the "Export CSV" button
document.getElementById('export-csv').addEventListener('click', function () {
    // Check if a client is selected
    var selectedClientId = clientSelect.value;
    if (selectedClientId) {
        // Filter events based on the selected client
        filteredCalendarEvents = calendarEvents.filter(function (event) {
            return event.client_id == selectedClientId;
        });

        // Check if there are filtered events to export
        if (filteredCalendarEvents.length > 0) {
            // Convert filteredCalendarEvents to CSV format
            var csvContent = 'data:text/csv;charset=utf-8,';
            csvContent += 'Title,Start,Description,Client ID,Employee ID\n'; // CSV header

            filteredCalendarEvents.forEach(function (event) {
                csvContent += `${event.title},${event.start},${event.description},${event.client_id},${event.employee_id}\n`;
            });

            // Create a Blob containing the CSV data and trigger the download
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement('a');
            link.setAttribute('href', encodedUri);
            link.setAttribute('download', 'calendar_events.csv');
            document.body.appendChild(link); // Required for Firefox
            link.click();
        } else {
            // No events for the selected client
            alert('No events found for the selected client.');
        }
    } else {
        // No client selected
        alert('Please select a client to export events.');
    }
});
    });
</script>





  </body>

</html>
