<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.ico">
    <title>Diabetes Educator Dashboard</title>



    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dibates.css">


    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- select2 -->
</head>

<body>





    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div> <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md">
                    <div class="navbar-header" data-logobg="skin6">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-brand">
                            <!-- Logo icon -->
                            <a href="index.php">
                                <b class="logo-icon">
                                    <!-- Dark Logo icon -->
                                    <img src="http://oxyjon.com/images/logo.png" style="width: 85%;" alt="homepage" class="dark-logo" />
                                    <!-- Light Logo icon -->
                                    <img src="http://oxyjon.com/images/logo.png" style="width: 85%;" alt="homepage" class="light-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->

                            </a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>


                    <div class="page-breadcrumb" style="margin-left: 249px; padding:0;">
                        <div class="row">
                            <div class="align-self-center">
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">

                                    Add New Patient </h4>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb m-0 p-0">
                                            <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                            <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                    </div>



                    <!-- <div class="align-self-center" style="margin-left: 82px;">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Inputs</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div> -->
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                            <!-- Notification -->

                            <!-- End Notification -->
                            <!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->

                            <!-- <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="javascript:void(0)">
                        <div class="customize-input">
                            <select
                                class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                <option selected>EN</option>
                                <option value="1">AB</option>
                                <option value="2">AK</option>
                                <option value="3">BE</option>
                            </select>
                        </div>
                    </a>
                </li> -->
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <!-- <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="javascript:void(0)">
                        <form>
                            <div class="customize-input">
                                <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                    type="search" placeholder="Search" aria-label="Search">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                        </form>
                    </a>
                </li> -->
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->

                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">                        
                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> 
                            <span class="text-dark">
                                                                                              
                            </span>
                            <div style="margin-top: 23px; color: #000;">Welcome to Educator Panel.</div>  
                                <i data-feather="chevron-down"class="svg-icon"></i> 
                               
                        </span>
                    </a> -->

                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"><strong>Oxyjon Admin</strong></span>
                                    <!-- <i data-feather="chevron-down"class="svg-icon"></i> -->
                                </span>


                                <div style="font-size: 14px; color: #5e5c5c; font-weight: 500;">Welcome to Program Dashboard</div>
                                <!-- <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                class="svg-icon mr-2 ml-1"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                class="svg-icon mr-2 ml-1"></i>
                            My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                class="svg-icon mr-2 ml-1"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                class="svg-icon mr-2 ml-1"></i>
                            Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                class="svg-icon mr-2 ml-1"></i>
                            Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                Profile</a></div>
                    </div> -->
                            </li>

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar" data-sidebarbg="skin6">

                    <!-- Admin Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">


                            <li class="nav-small-cap nev_heading" style="color: #000;"><span class="hide-menu">Admin Panel</span></li>

                            <!-- <li class="sidebar-item" style="color: #000; margin-top:10px;">
                        <a class="sidebar-link" href="dashboard.php"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Manage Patients </span>
                        </a>
                    </li> -->




                            <!-- <li class="nav-small-cap nev_heading" style="color: #000;"><span class="hide-menu">Admin Panel</span></li> -->

                            <li class="sidebar-item" style="color: #000;">
                                <a class="sidebar-link sidebar-link" href="reports.php" aria-expanded="false">
                                    <i data-feather="home" class="feather-icon"></i><span class="hide-menu">Reports</span></a>
                            </li>


                            <li class="list-divider"></li>

                            <li class="nav-small-cap" style="color: #000;"><span class="hide-menu">Patients</span></li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="dashboard.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Assigned Patient</span></a>
                            </li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="users.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">All Patients </span></a>
                            </li>



                            <li class="list-divider"></li>

                            <li class="nav-small-cap" style="color: #000;"><span class="hide-menu">Quick Links</span></li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="patientprofile.php?patient=" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Patient Profile </span></a>
                            </li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="callnote.php?patient=" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Call Notes </span></a>
                            </li>

                            <!-- <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="dietplan.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Diet Plan </span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="patient_doc.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Documents </span></a>
                </li> -->

                            <li class="sidebar-item" style="color: #000;">
                                <a class="sidebar-link" href="sug.php?patient=" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Health Parameters</span></a>
                            </li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="alleducationcalender.php?patient=" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Education Calendar</span></a>
                            </li>


                            <li class="sidebar-item" style="color: #000;">
                                <a class="sidebar-link" href="appointments.php?patient=" aria-expanded="false">
                                    <i data-feather="tag" class="feather-icon"></i>
                                    <span class="hide-menu">Appointments</span>
                                </a>
                            </li>



                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="allergy.php?patient=" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Allergy </span></a>
                            </li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="healthConditions.php?patient=" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Health Conditions </span></a>
                            </li>




                            <!-- <li class="list-divider"></li>

                <li class="nav-small-cap" style="color: #000;"><span class="hide-menu">Health Parameters</span></li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="sug.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Sugar </span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="hba.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">HBA1C </span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="wei.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Weight </span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="cho.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Lipid Profile </span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="hp.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Blood Pressure </span></a>
                </li>

                

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="psa.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">PSA</span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="pul.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Pulse</span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="tsh.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">TSH</span></a>
                </li>
                

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="kidney.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Kidney</span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="liver.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Liver</span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="urine.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Urine</span></a>
                </li>

                <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="blood.php?patient="
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Blood</span></a>
                </li>             -->

                            <!-- <li class="list-divider"></li> -->

                            <!-- <li class="nav-small-cap" style="color: #000;"><span class="hide-menu">Patients</span></li> -->



                            <!-- <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="addnewpatient.php"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Add New Patients
                        </span></a>
                </li> -->



                            <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="leadgogel.php"
                        aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                            class="hide-menu">Google</span></a></li> -->

                            <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html"
                        aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                            class="hide-menu">Other</span></a></li> -->


                            <li class="list-divider"></li>
                            <li class="nav-small-cap" style="color: #000;"><span class="hide-menu">Masters</span></li>
                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="managefooditems.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Manage Food Items </span></a>
                            </li>


                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="managemedicine.php" aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span class="hide-menu">Manage Medicine </span></a>
                            </li>

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="managehealthplans.php" aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span class="hide-menu">Manage Health Plans </span></a>
                            </li>


                            <li class="list-divider"></li>
                            <li class="nav-small-cap" style="color: #000;"><span class="hide-menu">Settings</span></li>



                            <li class="sidebar-item"> <a class="sidebar-link" href="usermessage.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Booking & Messages </span></a>
                            </li>

                            <!-- <li class="sidebar-item"> <a class="sidebar-link" href="bloodtestbookings.php"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Blood Test Bookings </span></a>              
                </li>

                <li class="sidebar-item"> <a class="sidebar-link" href="healthplanbookings.php"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Health Plan Bookings </span></a>              
                </li> -->


                            <li class="sidebar-item"> <a class="sidebar-link" href="notification.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Notification </span></a>
                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link" href="educator.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Manage Educators </span></a>
                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link" href="doctors.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Manage Doctors </span></a>
                            </li>

                            <!-- <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link" href="addnewusers.php"
                        aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                            class="hide-menu">Add Educator </span></a>               
                </li> -->

                            <li class="sidebar-item" style="color: #000;"> <a class="sidebar-link sidebar-link" href="logout.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
 