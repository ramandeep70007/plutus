


<div class="sidebar-wrapper">
    <div>
         <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light" src="/../assets/images/logo.png" style="height: 58px;margin-left: 73px;" alt=""></a>
         <br>
        <span style="color:#ffffff;margin-left:80px;font-size:11px;font-weight:600">Admin</span>

            <div class="back-btn"><i data-feather="grid"></i></div>
            <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="#">
                <div class="icon-box-sidebar"><i data-feather="grid"></i></div></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-list">
                        <h6>Pinned</h6>
                    </li>
                    <hr>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/home')}}"><i data-feather="home"> </i><span>Dashboard</span></a></li>


                 <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/calendar')}}"><i data-feather="calendar"> </i><span>Calendar</span></a></li>


                 <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/issue')}}"><i data-feather="info"> </i><span>Open Issue Tracker</span></a></li>
                 <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/timesheet')}}"><i data-feather="clock"> </i><span>Timesheet</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/employees')}}"><i data-feather="briefcase"> </i><span>Employees</span></a></li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/clients')}}"><i data-feather="users"> </i><span>Clients</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/dsc')}}"><i data-feather="users"> </i><span>DSC</span></a></li>


                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/announcement')}}"><i data-feather="radio"> </i><span>Announcements</span></a></li>
                
                 <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/outofexpense')}}"><i data-feather="film"> </i><span>OPE</span></a></li>
                 <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{url('/admin/policymanual')}}"><i data-feather="file"> </i><span>Policy Manual</span></a></li>


                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="log-in"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>



                 <li clas="sidebar-list">
                 <img src="/../assets/images/Saly-10.png" style="height:200px;" >
                 </li>




                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

    <script>
        function showToast(message,type){
            $.notify({
                    message: message,
                },
                {
                    type: type,
                    allow_dismiss:true,
                    newest_on_top:true ,
                    showProgressbar:false,
                    spacing:10,
                    timer:1000,
                    placement:{
                        from:'top',
                        align:'right'
                    },
                    offset:{
                        x:30,
                        y:30
                    },
                    // delay:1000 ,
                    z_index:10000,
                    animate:{
                        enter:'flash',
                        exit:'flash'
                    }
                });
        }
    </script>
