<!doctype html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->


    <title>Medix- HMS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Plugins css -->
    <link rel="stylesheet" href="css/default-assets/mini-event-calendar.min.css">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Main Page Wrapper **********
    ======================================= -->

    <div class="main-container-wrapper">
        <!-- Top bar area -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route("Dashboard") }}"><img src="images/logo.png" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route("Dashboard") }}"><img src="images/favicon.ico"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item app-search d-none d-md-block">
                        <form role="search" class=""><input type="text" placeholder="Search..." class="form-control">
                            <button type="submit" class="search-btn mr-0"><i class="fa fa-search"></i></button></form>
                    </li>
                </ul>
                <ul class="top-navbar-area navbar-nav navbar-nav-right">

                    <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-primary">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Code problem solved.</h6>
                                    <p class="mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>New theme update.</h6>
                                    <p class="mb-0">
                                        02 days ago
                                    </p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Awsome support.</h6>
                                    <p class="mb-0">
                                        02 days ago
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item d-flex align-items-center">
                                <div class="notification-thumbnail">
                                    <div class="preview-icon bg-danger">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="notification-item-content">
                                    <h6>Text to build on the card title.</h6>
                                    <p class="mb-0">
                                        03 days ago
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>

                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="img/member-img/contact-2.jpg" alt="profile" /> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top"
                            aria-labelledby="profileDropdown">
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon"
                                    aria-hidden="true"></i> My profile</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon"
                                    aria-hidden="true"></i> Messages</a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon"
                                    aria-hidden="true"></i> Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    <i class="ti-unlink profile-icon" aria-hidden="true"></i> {{ __('Logout') }}

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="ti-layout-grid2"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-box link-icon">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("Reception") }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar link-icon">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="menu-title">Reception</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("Nurse") }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar link-icon">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="menu-title">Nurse's Station</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("Dept") }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar link-icon">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="menu-title">Consultation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false"
                            aria-controls="elements">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-feather link-icon">
                                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                                <line x1="16" y1="8" x2="2" y2="22"></line>
                                <line x1="17.5" y1="15" x2="9" y2="15"></line>
                            </svg>
                            <span class="menu-title">Laboratory</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route("Pharm") }}" aria-expanded="false"
                            aria-controls="app">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-command link-icon">
                                <path
                                    d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                            <span class="menu-title">Pharmacy</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("Dept") }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar link-icon">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="menu-title">Department and Specialty</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route("Roles") }}" aria-expanded="false"
                            aria-controls="advanced">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-edit link-icon">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            <span class="menu-title">Roles and Permission</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route("Patient") }}" aria-expanded="false"
                            aria-controls="job">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell link-icon">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="menu-title">Patient Management</span>

                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route("Inventory") }}" aria-expanded="false"
                            aria-controls="email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail link-icon">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class="menu-title">Store and Inventory</span>

                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users link-icon">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="menu-title">Account/Billing</span>
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <!-- Widgets Data -->
                        <div class="row">
                            <div class="col-sm-6 col-xl-3 mb-30">
                                <div class="card widget-slider-area p-20">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Doctors</h6>
                                                <span class="badge badge-pill badge-primary">79% Done</span>
                                            </div>
                                            <h6 class="mb-0">$79,639.69 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>

                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Nurses</h6>
                                                <span class="badge badge-pill badge-primary">68% Done</span>
                                            </div>
                                            <h6 class="mb-0">$13,0278.78 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 mb-30">
                                <div class="card widget-slider-area p-20">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Patients</h6>
                                                <span class="badge badge-pill badge-primary">79% Done</span>
                                            </div>
                                            <h6 class="mb-0">$79,639.69 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>

                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">pharmacists</h6>
                                                <span class="badge badge-pill badge-primary">68% Done</span>
                                            </div>
                                            <h6 class="mb-0">$13,0278.78 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 mb-30">
                                <div class="card widget-slider-area p-20">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Accountants</h6>
                                                <span class="badge badge-pill badge-primary">79% Done</span>
                                            </div>
                                            <h6 class="mb-0">$79,639.69 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>

                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Operations</h6>
                                                <span class="badge badge-pill badge-primary">68% Done</span>
                                            </div>
                                            <h6 class="mb-0">$13,0278.78 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 mb-30">
                                <div class="card widget-slider-area p-20">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Birth Reports</h6>
                                                <span class="badge badge-pill badge-primary">79% Done</span>
                                            </div>
                                            <h6 class="mb-0">$79,639.69 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>

                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0">Death Reports</h6>
                                                <span class="badge badge-pill badge-primary">68% Done</span>
                                            </div>
                                            <h6 class="mb-0">$13,0278.78 <span>(+6.71)</span></h6>
                                            <p class="mb-0">by last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Order Summary -->
                            <div class="col-xl-8 box-margin height-card ">
                                <div class="card bg-boxshadow full-height">
                                    <div
                                        class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                        <div class="widgets-card-title">
                                            <h5 class="card-title mb-0">Revenue Comparison</h5>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="apexareachart"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Visits Chart Area -->
                            <div class="col-md-6 col-xl-4 box-margin height-card ">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title">Visits of 2023</h4>
                                            <div id="chart"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-30">
                                    <h4 class="card-title">EMPLOYEE DATA
                                        <button class="btn btn-info" style="margin-left: 900px" style="margin-left: 800px"
                                    data-toggle="modal" data-target="#myModal">Add </button>
                                    </h4>


                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Employee Registration</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form action="{{ route('Emp') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label for="name">Full Name:</label>
                                                            <input type="name" class="form-control" id="name" placeholder="Enter Full Name"
                                                                name="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="dob">DOB:</label>
                                                            <input type="date" class="form-control" id="dob" placeholder="Enter Date of Birth"
                                                                name="dob">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gen">Gender:</label>
                                                            <input type="gen" class="form-control" id="gen"
                                                                name="gen">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone Number:</label>
                                                            <input type="phone" class="form-control" id="phone"
                                                                name="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add">Address:</label>
                                                            <input type="add" class="form-control" id="add" placeholder="Enter Home Address"
                                                                name="add">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="dep">Department:</label>
                                                            <select class="form-control" id="dep"  name="dep" type="dep" >
                                                                @foreach ($dpt as $dpt )
                                                                <option>{{ $dpt->dept }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="spe">Specialty:</label>
                                                            <select class="form-control" id="spe"  name="spe" type="spe" >
                                                                @foreach ($spc as $spc )
                                                                <option>{{ $spc->spe }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-info">Submit</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card box-margin">
                                                <div class="card-body">
                                                    <div class="shortcode-html">
                                                        <!-- Table Striped Rows -->
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>First Name</th>
                                                                        <th>DOB</th>
                                                                        <th>Gender</th>
                                                                        <th>Phone</th>
                                                                        <th>Email</th>
                                                                        <th>Address</th>
                                                                        <th>Department</th>
                                                                        <th>Specialty</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($get as $key =>$gt )

                                                                    <tr>
                                                                        <td>{{ $key + 1 }}</td>
                                                                        <td>{{ $gt->name }}</td>
                                                                        <td class="hidden-sm">{{ $gt->dob }}</td>
                                                                        <td>{{ $gt->gen }}</td>
                                                                        <td>{{ $gt->phone }}</td>
                                                                        <td>{{ $gt->email }}</td>
                                                                        <td>{{ $gt->add }}</td>
                                                                        <td>{{ $gt->dep }}</td>
                                                                        <td>{{ $gt->spe }}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- End Table Striped Rows -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Area -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Footer Area -->
                                <footer
                                    class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                    <!-- Copywrite Text -->
                                    <div class="copywrite-text">
                                        <p>Created by @<a href="#">Theme-zome</a></p>
                                    </div>
                                    <div class="fotter-icon text-center">
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Instagram">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>
    <script src="js/default-assets/fullscreen.js"></script>

    <!-- Active JS -->
    <script src="js/canvas.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/template.js"></script>
    <script src="js/default-assets/active.js"></script>

    <!-- Inject JS -->
    <script src="js/default-assets/apexchart.min.js"></script>
    <script src="js/default-assets/apex-custom.js"></script>
    <script src="js/default-assets/dashboard-active.js"></script>

</body>


</html>
