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
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-12">



                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                                        <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Personal Details</span>
                                    </div>
                                    <form name="newcallnotes" action="patient_post.php" id="newcallnotes" method="POST">
                                        <input type="hidden" name="page" value="">

                                        <div class="row" style="padding: 20px;">

                                            <div class="col-md-4 form-group" id="full_name_p">
                                                <label for="full_name">Patient Full Name </label> <span class="span_error" id="error_full_name"></span>
                                                <input type="text" class="form-control form_input" name="full_name" id="full_name" placeholder="Patient Full Name">
                                            </div>

                                            <div class="col-md-4 form-group" id="mobile_no_p">
                                                <label for="mobile_no">Patient Mobile No </label> <span class="span_error" id="error_mobile_no"></span>
                                                <input type="text" class="form-control form_input" name="mobile_no" maxlength="10" id="mobile_no" placeholder="Patient Mobile No.">
                                            </div>


                                            <div class="col-md-4 form-group">
                                                <label for="">Gender</label> <span class="span_error" id="error_gender"></span>
                                                <select name="gender_name" class="form-control form_select" id="gender_name">
                                                    <option value="">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>


                                            <div class="col-md-4 form-group" id="height_ids">
                                                <label for="BirthDate" style="width: 100%;">Height in Feet</label> <span class="span_error" id="error_height_ids"></span>

                                                <input style="width: 45%!important; float: left; margin-right: 10%;" type="number" class="form-control form_input" min="1" max="8" pattern="[1-8]{1}" title="Please Add valid Height Inches" name="height_ft" id="user_height" placeholder="Height(Feet)">

                                                <input style="width: 45% !important; float: left;" type="number" class="form-control form_input" type="number" class="form-control form_input" min="0" max="12" pattern="[0-12]{2}" title="Please Add valid Height Inches" name="height_inches" id="user_height_inches" placeholder="Height(Inches)">
                                            </div>






                                            <div class="col-md-4 form-group" id="height_ids">
                                                <label for="BirthDate">Weight in kg</label> <span class="span_error" id="error_weight"></span>
                                                <input type="text" pattern="\d{1,5}" title="Please Add valid Weight:[123654]" class="form-control form_input" maxlength="3" autocomplete="off" name="weight" id="user_weight" placeholder="Weight in kg">
                                            </div>


                                            <div class="col-md-4 form-group" id="BirthDate_ids">
                                                <label for="BirthDate">Birth Date</label> <span class="span_error" id="error_BirthDate"></span>
                                                <input type="text" class="form-control form_input" autocomplete="off" name="BirthDate" id="BirthDate" placeholder="Birth Date">
                                            </div>


                                            <div class="col-md-4 form-group">
                                                <label for="">Blood Group</label> <span class="span_error" id="error_span_bloodgroup"></span>
                                                <select name="bloodgroup" class="form-control form_select" id="bloodgroup">
                                                    <option value="">Blood Group</option>
                                                    <option value="71"> O+ </option>
                                                    <option value="72"> A+ </option>
                                                    <option value="73"> B+ </option>
                                                    <option value="74"> AB+ </option>
                                                    <option value="75"> O- </option>
                                                    <option value="76"> A- </option>
                                                    <option value="77"> B- </option>
                                                    <option value="78"> AB- </option>
                                                    <option value="458"> Don't Know</option>
                                                </select>
                                            </div>


                                            <div class="col-md-4 form-group">
                                                <label for="">Lead Sources</label> <span class="span_error" id="error_span_leadSource"></span>
                                                <select name="leadSource" class="form-control form_select" id="leadSource">
                                                    <option value="">Lead Sources</option>
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Instagram">Instagram</option>
                                                    <option value="Google">Google</option>
                                                    <option value="Patient-Referral">Patient Referral</option>
                                                    <option value="Doctor-Referral">Doctor Referral</option>
                                                    <option value="Other-Referral">Other Referral</option>
                                                    <option value="Whatsapp">Whatsapp</option>
                                                    <option value="SMS">SMS</option>
                                                    <option value="Newspaper">Newspaper</option>
                                                    <option value="AppDownload">AppDownload</option>

                                                </select>
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="">Select Caregiver:</label> <span class="span_error" id="error_span_caregiver"></span>
                                                <select name="caregiver" class="form-control form_select" id="caregiver">
                                                    <option value="">Select Caregiver</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    <option value="Wife">Wife</option>
                                                    <option value="Daughter-in-Law">Daughter in Law</option>
                                                    <option value="Son-in-Law">Son in Law</option>
                                                    <option value="Help">Help</option>
                                                    <option value="Self">Self</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="">Using Oxyjon App?</label> <span class="span_error" id="error_span_bloodgroup"></span>
                                                <select name="using_oxyjon_App" class="form-control form_select" id="using_oxyjon_App">
                                                    <option value="">Using oxyjon App</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>


                                            <div class="col-md-4 form-group">
                                                <label for="">Address</label> <span class="span_error" id="error_span_address"></span>
                                                <textarea class="form-control form_input" rows="2" name="address" id="address_ids" placeholder="Patient Full Address"></textarea>
                                            </div>



                                            <div class="col-md-4 form-group" id="residing_in_ids">
                                                <label for="residing_in">Residing in <small>(select from lookup)</small></label> <span class="span_error" id="error_BirthDate"></span>
                                                <input type="text" class="form-control form_input" autocomplete="off" name="residing_in" id="residing_in" placeholder="Residing in">
                                                <input type="hidden" name="residing_in_id" id="residing_in_id" value="0">
                                            </div>

                                            <div class="col-md-4 form-group" id="adhar_card_no_ids">
                                                <label for="adhar_card_no">Aadhar Card Number</label> <span class="span_error" id="error_adhar_card_no"></span>
                                                <input type="text" class="form-control form_input" autocomplete="off" name="adhar_card_no" id="adhar_card_no" placeholder="Aadhar Card Number">
                                            </div>



                                            <div class="col-md-4 form-group" id="medical_insurance_number_ids">
                                                <label for="medical_insurance_number">Medical Insurance Number</label>
                                                <span class="span_error" id="error_medical_insurance_number"></span>
                                                <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_number" id="medical_insurance_number" placeholder="Medical Insurance Number">
                                            </div>


                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Medical Insurance Provider</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider" id="medical_insurance_provider" placeholder="Medical Insurance Provider">
                                            </div>
                                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Highest Education level</label>
                                                <select name="education" class="form-control" name="" id="">
                                                    <option value="">Highest Education Level</option>
                                                    <option value="Class 12 and below">Class 12 and below</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="Professional degree">Professional degree</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">What is your current profession?</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="text" class="form-control form_input" autocomplete="off" name="current_profession" id="medical_insurance_provider" placeholder="What is your current profession">
                                            </div>
                                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="emergency_contact_name_ids">
                                                <label for="emergency_contact_name">Emergency Contact Name</label>
                                                <span class="span_error" id="error_emergency_contact_name"></span>

                                                <input type="text" class="form-control form_input" autocomplete="off" name="emergency_contact_name" id="emergency_contact_name" placeholder="Emergency Contact Name">
                                            </div>



                                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="emergency_contact_number_ids">
                                                <label for="emergency_contact_number">Emergency Contact Number</label>
                                                <span class="span_error" id="error_emergency_contact_number"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="emergency_contact_number" id="emergency_contact_number" maxlength="10" placeholder="Emergency Contact Number">
                                            </div>


                                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="emergency_email_ids">
                                                <label for="emergency_email_id_l">Emergency Email ID</label>
                                                <span class="span_error" id="error_emergency_email_id"></span>

                                                <input type="email" class="form-control form_input" autocomplete="off" name="emergency_email_id" id="emergency_email_id" placeholder="Emergency Email ID">
                                            </div>


                                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="relationship_ids">
                                                <label for="relationship_l">Relationship</label>
                                                <span class="span_error" id="error_relationship"></span>

                                                <select name="relationship" class="form-control form_select" id="relationship">
                                                    <option value="">Select</option>
                                                    <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Sibling">Sibling</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    <option value="Spouse">Spouse</option>
                                                    <option value="Friend">Friend</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                                                <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Medical History</span>
                                            </div>
                                            <!-- <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                    <label for="residing_in">Condition <small>(select from lookup)</small></label>
                                    <select class="form-control lookup" name="" id="" multiple>
                                        <option value="">Condition </option>
                                        <option value="">Type 1 Diabetes</option>
                                        <option value="">Type 2 Diabetes</option>
                                        <option value="">High Blood pressure</option>
                                    </select>
                                </div> -->
                                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Procedures <small>(select from lookup)</small></label>
                                                <select class="form-control lookup" name="procedures" id="" multiple>
                                                    <option value="">Procedures</option>
                                                    <option value="Colonoscopy">Colonoscopy</option>
                                                    <option value="Gall bladder surgery">Gall bladder surgery</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Diabetes Type:</label> <span class="span_error" id="error_span_diabetes_types"></span>
                                                <select name="diabetes_types" class="form-control form_select" id="diabetes_types">
                                                    <option value="">Diabetes Types</option>
                                                    <option value="Type-1">Type-1</option>
                                                    <option value="Type-2">Type-2</option>
                                                    <option value="Gestational-Diabetes">Gestational Diabetes</option>
                                                    <option value="Weight-Loss">Weight Loss</option>
                                                    <option value="Pre-diabetes">Pre-diabetes</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3 form-group mt-2">
                                                <label class="mb-3" style="font-weight: bold;" for="">Check other Co morbid Disease:-</label>
                                                <label for="">Have you been diagnosed with Coronary Artery Disease?</label>
                                                <div class="form-check">
                                                    <input name="coronary_artery" value="Yes" class="form-check-input" type="radio" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="coronary_artery" value="No" class="form-check-input" type="radio" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group mt-5">
                                                <label for="">Have you ever suffered a Heart Attack?</label>
                                                <div class="form-check">
                                                    <input name="heart_attack" value="Yes" class="form-check-input" type="radio" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="heart_attack" value="No" class="form-check-input" type="radio" id="flexRadioDefault4">
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 form-group mt-5">
                                                <label for="">Have you been diagnosed with High Cholesterol?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_cholesterol" value="Yes" id="flexRadioDefault5">
                                                    <label class="form-check-label" for="flexRadioDefault5">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_cholesterol" value="No" id="flexRadioDefault6">
                                                    <label class="form-check-label" for="flexRadioDefault6">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 form-group mt-5">
                                                <label for="">Have you been diagnosed with High Blood Pressure?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_blood_pressure" value="Yes" id="flexRadioDefault7">
                                                    <label class="form-check-label" for="flexRadioDefault7">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_blood_pressure" value="No" id="flexRadioDefault8">
                                                    <label class="form-check-label" for="flexRadioDefault8">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group mt-2">
                                                <label class="mb-3" style="font-weight: bold;" for="">Check if any DM complication Disease is present :</label>
                                                <label for="">Diagnosed with Neuropathy (exp.Peripheral Vascular Disease etc.)</label>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_vascular_disease" value="Yes" id="flexRadioDefault10">
                                                    <label class="form-check-label" for="flexRadioDefault10">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_vascular_disease" value="No" id="flexRadioDefault9">
                                                    <label class="form-check-label" for="flexRadioDefault9">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group mt-5">
                                                <label for="">Diagnosed with Nephropathy (Kidney Disease)</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_kidney_disease" value="Yes" id="flexRadioDefault11">
                                                    <label class="form-check-label" for="flexRadioDefault11">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_kidney_disease" value="No" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group mt-5">
                                                <label for="">Diagnosed with Retinopathy</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="retinopathy" value="Yes" id="flexRadioDefault13">
                                                    <label class="form-check-label" for="flexRadioDefault13">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="retinopathy" value="No" id="flexRadioDefault14">
                                                    <label class="form-check-label" for="flexRadioDefault14">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Other Condition <small>(select from lookup)</small></label>
                                                <select name="conditions" class="form-control lookup" name="" id="" multiple>
                                                    <option value="">Condition </option>
                                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                                    <option value="High Blood pressure">High Blood pressure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="">In the past 12 months, have you had a Hospital Admission?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hospital_admission" value="Yes" id="flexRadioDefault15">
                                                    <label class="form-check-label" for="flexRadioDefault15">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hospital_admission" value="No" id="flexRadioDefault16">
                                                    <label class="form-check-label" for="flexRadioDefault16">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Reason(s) for hospital admissions-</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="text" class="form-control form_input" autocomplete="off" name="hospital_admission_reason" id="medical_insurance_provider" placeholder="Reason(s) for hospital admissions – ">
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">How many Day?</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="days" id="medical_insurance_provider" placeholder="How many Day?">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">In the past 12 months, have you had a primary care physician visit?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="physician_visit" value="Yes" id="flexRadioDefault17">
                                                    <label class="form-check-label" for="flexRadioDefault17">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="physician_visit" value="No" id="flexRadioDefault18">
                                                    <label class="form-check-label" for="flexRadioDefault18">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Number of Physician visits in past 12 months-</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="Num_physician_visit" id="medical_insurance_provider" placeholder="Number of Physician visits in past 12 months">
                                            </div>

                                            <form>
                                                <div class="col-md-3 form-group mt-2">
                                                    <label class="mb-3" style="font-weight: bold;" for="">Medication :</label>
                                                    <div class="form-group" id="medical_insurance_provider_ids">
                                                        <label for="residing_in">Name</label>
                                                        <span class="span_error" id="error_medical_insurance_provider"></span>

                                                        <input type="text" class="form-control form_input" autocomplete="off" name="name" id="medical_insurance_provider medicine_name" placeholder="Name of Medicine">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 form-group mt-5" id="medical_insurance_provider_ids">
                                                    <label for="residing_in">Enter quantity of Medicine</label>
                                                    <span class="span_error" id="error_medical_insurance_provider"></span>
                                                    <input type="number" class="form-control form_input" autocomplete="off" name="quantity" id="medical_insurance_provider dose" placeholder="Enter quantity of Medicine">
                                                </div>
                                                <div class="col-md-3 form-group mt-5" id="medical_insurance_provider_ids">
                                                    <label for="residing_in">Time of the day</label>
                                                    <select class="form-control lookup" name="time_of_day" id="" multiple>
                                                        <option value="Before lunch">Before lunch</option>
                                                        <option value="After lunch">After lunch</option>
                                                        <option value="before breakfast">before breakfast</option>
                                                        <option value="after breakfast">after breakfast</option>
                                                        <option value="before dinner">before dinner</option>
                                                        <option value="after dinner">after dinner</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 form-group" style="margin-top:64px;">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

                                            </form>
                                            <div class="col-md-9 float-left form-group">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl.No.</th>
                                                            <th>Name</th>
                                                            <th>quantity of Medicine</th>
                                                            <th>Time of the day</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">01</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">02</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">03</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                                                <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Diabetes Awareness and Lifestyle</span>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="">Do you monitor your blood sugar?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="blood_sugar" value="Yes" id="flexRadioDefault19">
                                                    <label class="form-check-label" for="flexRadioDefault19">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="blood_sugar" value="No" id="flexRadioDefault20">
                                                    <label class="form-check-label" for="flexRadioDefault20">
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 form-group " id="medical_insurance_provider_ids">
                                                <label for="residing_in">Frequency of blood sugar checks</label>
                                                <select class="form-control" name="frequency_blood_sugar" id="">
                                                    <option value="">blood sugar checks</option>
                                                    <option value="1 Days">1 Days</option>
                                                    <option value="7 Days">7 Days</option>
                                                    <option value="15 Days">15 Days</option>
                                                    <option value="30 Days">30 Days</option>
                                                    <option value="more than 30 days">more than 30 days</option>

                                                </select>
                                            </div>

                                            <div class=" col-md-3 form-group ">
                                                <label for="">Have you had a recent episode of high blood sugar?</label>
                                                <div class=" form-check">
                                                    <input class="form-check-input" type="radio" name="recent_episode_high_bs" value="Yes" id="flexRadioDefault21">
                                                    <label class="form-check-label" for="flexRadioDefault21">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="recent_episode_high_bs" value="No" id="flexRadioDefault22">
                                                    <label class="form-check-label" for="flexRadioDefault22">
                                                        No
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Food Habit</label>
                                                <select class="form-control" name="food_habit" id="">
                                                    <option value="">Food Habit</option>
                                                    <option value="Vegetarian">Vegetarian</option>
                                                    <option value="Eggitarian">Eggitarian</option>
                                                    <option value="Non Vegetarian">Non Vegetarian</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group mt-3">
                                                <label for="">Do you exercise?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exercise" value="Yes" id="flexRadioDefault23">
                                                    <label class="form-check-label" for="flexRadioDefault23">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exercise" value="No" id="flexRadioDefault24">
                                                    <label class="form-check-label" for="flexRadioDefault24">
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                                <label for="residing_in">What type of exercise do you do?</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="text" class="form-control form_input" autocomplete="off" name="type_of_exercise" id="medical_insurance_provider" placeholder="What type of exercise do you do-  ">
                                            </div>
                                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                                <label for="residing_in">How many days do you exercise?</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="days_of_exc" id="medical_insurance_provider" placeholder="How many days do you exercise per week">
                                            </div>
                                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                                <label for="residing_in">How many minutes do you usually exercise?</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="minutes_of_exc" id="medical_insurance_provider" placeholder="How many minutes do you usually exercise">
                                            </div>
                                            <div class="col-md-4 form-group mt-2">
                                                <label class="mb-3" style="font-weight: bold;" for="">Dietary history <small>(write down everything you ate in the 24 hours (prior to the appointment better is 2-3 days food diary
                                                        worth of meals and snack)</small></label>
                                                <div class="form-group" id="medical_insurance_provider_ids">
                                                    <label for="residing_in">EARLY MORNING : 8:00 am</label>
                                                    <span class="span_error" id="error_medical_insurance_provider"></span>

                                                    <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                     id="medical_insurance_provider" placeholder="EARLY MORNING"> -->
                                                    <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="early_morning" rows="2" placeholder="EARLY MORNING"></textarea>
                                                </div>
                                            </div>
                                            <div style="margin-top:75px ;" class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">BREAKFAST : 10:00 am</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                        id="medical_insurance_provider" placeholder="BREAKFAST"> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="breakfast" rows="2" placeholder="BREAKFAST"></textarea>
                                            </div>
                                            <div style="margin-top:75px;" class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">MID –MORNING : 11am</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                id="medical_insurance_provider" placeholder="MID –MORNING"> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="mid_morning" rows="2" placeholder="MID –MORNING"></textarea>

                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">LUNCH 1:00pm</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                        id="medical_insurance_provider" placeholder="LUNCH"> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="lunch" rows="2" placeholder="LUNCH"></textarea>
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">EVENING SNACK:4:00 – 4:30 pm</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                id="medical_insurance_provider" placeholder="EVENING SNACK"> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="evening_snack" rows="2" placeholder="EVENING SNACK"></textarea>

                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">DINNER : 8:00 pm-8:30 pm</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                id="medical_insurance_provider" placeholder="DINNER"> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="dinner" rows="2" placeholder="DINNER"></textarea>
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Bed time</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                  id="medical_insurance_provider" placeholder="Bed time"> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="bed_time" rows="2" placeholder="Bed time"></textarea>
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Total water intake/day. <small>(Lit /Day)</small></label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <input type="number" class="form-control form_input" autocomplete="off" name="water_intake" id="medical_insurance_provider" placeholder=" Lit /Day ">
                                            </div>
                                            <div class=" col-md-4 form-group ">
                                                <label for="">Constipation ?</label>
                                                <div class=" form-check">
                                                    <input name="constipation" value="Yes" class="form-check-input" type="radio" id="flexRadioDefault25">
                                                    <label class="form-check-label" for="flexRadioDefault25">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="constipation" value="No" id="flexRadioDefault26">
                                                    <label class="form-check-label" for="flexRadioDefault26">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">How often do you eat out? <small>(per/week)</small></label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <input type="number" class="form-control form_input" autocomplete="off" name="eat_out" id="medical_insurance_provider" placeholder="How often do you eat out">
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Sleeping Hours<small>(Hours /Day)</small></label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <input type="number" class="form-control form_input" autocomplete="off" name="sleeping_hours" id="medical_insurance_provider" placeholder="Hours /Day ">
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Identify trouble spots like skipping breakfast or late night snacking.</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                  id="medical_insurance_provider" placeholder="if yes Then Frequency "> -->
                                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="trouble_spots" rows="2" placeholder="if yes Then Frequency "></textarea>
                                            </div>
                                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Smoking. <small>(if they do?)</small></label>
                                                <select name="smoking" class="form-control">
                                                    <option value="">Smoking </option>
                                                    <option value="Doesn't smoke">Doesn't smoke</option>
                                                    <option value="1-2 cigarette per day">1-2 cigarette per day</option>
                                                    <option value="5 cigarette per day">5 cigarette per day</option>
                                                    <option value="More than 5 cigarette per day">More than 5 cigarette per day</option>

                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Drinking <small>(if they do?)</small></label>
                                                <select name="drinking" class="form-control">
                                                    <option value="">Drinking </option>
                                                    <option value="Doesn't drink alcohol">Doesn't drink alcohol</option>
                                                    <option value="Daily">Daily</option>
                                                    <option value="Once a week">Once a week</option>
                                                    <option value="Once in 15 days">Once in 15 days</option>
                                                    <option value="Once in 30 days">Once in 30 days</option>

                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">How often do you examine your feet?</label>
                                                <select name="examine_feet" class="form-control">
                                                    <option value="">How often do you examine your feet?</option>
                                                    <option value="daily">daily</option>
                                                    <option value="weekly">weekly</option>
                                                    <option value="monthly">monthly</option>
                                                    <option value="more than a month">more than a month</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">When was your last dental exam?</label>
                                                <select name="dental_exam" class="form-control">
                                                    <option value="">When was your last dental exam?</option>
                                                    <option value="in last 3 months">in last 3 months</option>
                                                    <option value="last 6 months">last 6 months</option>
                                                    <option value="last 12 months">last 12 months</option>
                                                    <option value="more than 12 months">more than 12 months</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                                                <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Family History</span>
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Father Condition</label>
                                                <select name="father_condition" class="form-control lookup" name="" id="" multiple>
                                                    <option value="">Father Condition</option>
                                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                                    <option value="High Blood pressure">High Blood pressure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Mother Condition</label>
                                                <select name="mother_condition" class="form-control lookup" name="" id="" multiple>
                                                    <option value="">Mother Condition</option>
                                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                                    <option value="High Blood pressure">High Blood pressure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Brother Condition</label>
                                                <select name="brother_condition" class="form-control lookup" name="" id="" multiple>
                                                    <option value="">Brother Condition</option>
                                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                                    <option value="High Blood pressure">High Blood pressure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Sister Condition</label>
                                                <select name="sister_condition" class="form-control lookup" name="" id="" multiple>
                                                    <option value="">Sister Condition</option>
                                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                                    <option value="High Blood pressure">High Blood pressure</option>
                                                </select>
                                            </div>


                                            <div class="form-group col-xs-4 col-sm-4 col-md-12 col-lg-12 ">
                                                <button type="submit" name="addNewPatient" class="btn btn-primary">Submit</button>
                                                <input type="reset" class="btn btn-primary" name="reset" value="Reset">


                                                <a href="dashboard.php">
                                                    <div class="btn btn-primary" name="back" style="float: right; background-color: #e93a68; border:0">Back</div>
                                                </a>


                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-2"></div> -->
                </div>
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
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- footer section Mobile end -->
            <footer class="footer text-center">
                All Rights Reserved Oxyjon &copy; 2022
            </footer>


            <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

            <script src="assets/libs/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <!-- <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script> -->
            <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- apps -->
            <!-- <script src="dist/js/app.min.js"></script> -->
            <!-- <script src="dist/js/app.init-menusidebar.js"></script> -->
            <script src="dist/js/app-style-switcher.js "></script>
            <script src="dist/js/feather.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
            <!-- <script src="assets/extra-libs/sparkline/sparkline.js "></script> -->
            <!-- theme js -->
            <!--Menu sidebar -->
            <script src="dist/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="dist/js/custom.min.js"></script>
            <script src="dist/js/validation.js"></script>


            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>

        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <!-- <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script> -->
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- <script src="dist/js/app.min.js"></script> -->
        <!-- <script src="dist/js/app.init-menusidebar.js"></script> -->
        <script src="dist/js/app-style-switcher.js "></script>
        <script src="dist/js/feather.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <!-- <script src="assets/extra-libs/sparkline/sparkline.js "></script> -->
        <!-- theme js -->
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
        <script src="dist/js/validation.js"></script>



        <!-- jQuery UI -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script src="js/callnotes.js"></script>


        <script>
            function addnewValidate() {
                let valid = true;
                $(".form-control").css('background-color', '');
                $(".span_error").html('');
                valid = validateContact();
                if (valid) {
                    console.log(valid);
                    return true;
                } else {
                    console.log(valid);
                    return false;
                }
            }


            function validateContact() {
                let valid = true;
                if (!$("#full_name").val()) {
                    $("#error_full_name").html("( Required )");
                    $("#full_name").css('background-color', '#efcfca');
                    valid = false;
                }
                if (!$("#mobile_no").val()) {
                    $("#error_mobile_no").html("( Required )");
                    $("#mobile_no").css('background-color', '#efcfca');
                    valid = false;
                }
                if (!$("#gender_name").val()) {
                    $("#error_gender").html("( Required )");
                    $("#gender_name").css('background-color', '#efcfca');
                    valid = false;
                }
                if (!$("#leadSource").val()) {
                    $("#error_span_leadSource").html("( Required )");
                    $("#leadSource").css('background-color', '#efcfca');
                    valid = false;
                }
                if (!$("#bloodgroup").val()) {
                    $("#error_span_bloodgroup").html("( Required )");
                    $("#bloodgroup").css('background-color', '#efcfca');
                    valid = false;
                }
                return valid;
            }
        </script>

        <script type="text/javascript">
            $(function() {

                $("#residing_in").autocomplete({
                    source: function(request, response) {
                        console.log('sssssxx');
                        // Fetch data
                        $.ajax({
                            url: "ajax-city-search.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term
                            },
                            success: function(data) {
                                //console.log('111 sssssxx');
                                //console.log(data);
                                response(data);
                            }
                        });
                    },
                    select: function(event, ui) {
                        // Set selection
                        $('#residing_in').val(ui.item.label); // display the selected text
                        $('#residing_in_id').val(ui.item.value); // save selected id to input
                        return false;
                    },
                    focus: function(event, ui) {
                        $("#residing_in").val(ui.item.label);
                        //$( "#selectuser_id" ).val( ui.item.value );
                        return false;
                    },
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.lookup').select2();
            });

            function medication() {

                const dose = document.getElementById('dose').value;
                alert(dose);

            }
        </script>

    </body>

</html>