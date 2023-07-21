<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logos.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">User Menu</li>
                            
                            <li><a href="dashboard_user.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Dashboards</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Bank Nagari</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="asnaktif_1.php">ASN Aktif</a> </li>
                                    <li> <a href="prapensiun_1.php">ASN Pra-Pensiun </a> </li>
                                    <li> <a href="user_page.php">ASN Pensiun</a> </li>
                                </ul>
                            </li>
                            <li><a href="#" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Bank DKI</span></a> </li>
                            <li><a href="#" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Bank SulSelBar</span></a></li>
                            <li><a href="kalkulator.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Kalkulator (sementara)</span></a> </li>
                            <li><a href="logout.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Logout</span></a> </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                
            </div>
            <!-- end app-container -->
            <!-- begin app-main -->
            <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1>Tabs</h1>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                        <ol class="breadcrumb p-0 m-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ti ti-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                UI Kit
                                            </li>
                                            <li class="breadcrumb-item active text-primary" aria-current="page">Tabs</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start Tabs contant -->
                    <div class="row">
                        <div class="col-xxl-4 m-b-30">
                            <div class="card card-statistics h-100 mb-0 o-hidden">
                                <div class="card-header">
                                    <h4 class="card-title">Total Nasabah</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0">132</h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+23%</b> dari bulan lalu  </span>
                                        </div>
                                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0">45,541</h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+15%</b> Likes </span>
                                        </div>
                                        <div class="col-12 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0">78,462</h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+32%</b> Comments </span>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-xxs-4">
                                        <p>You're scheduled earn <span class="badge  badge-success-inverse">$2,350 today</span></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end Tabs contant -->
                    
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->
    
    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>