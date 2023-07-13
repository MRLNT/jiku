<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $kode_marketing = $_SESSION['user_name'];
    $insert = "INSERT INTO temp_form2(waktu_pengajuan, tanggal_syarat_ketentuan, kode_marketing) VALUES(NOW(), NOW(), '$kode_marketing')";
    mysqli_query($conn, $insert);
    header('Location: asnaktif_3.php');
    //header('Location: kredit_final.php');
 };

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
                            <li><a href="#" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Bank SulSelBar</span></a> </li>
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
                                    <h1>Syarat dan Ketentuan</h1>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start Tabs contant -->
                    <div class="row tabs-contant">
                        <div class="col-xxl-12">
                            <div class="card card-statistics">
                                <form action="" method="post">
                                    <div class="card-body">
                                        <h5 class="card-text">Bank Nagari<br>Syarat dan Ketentuan:<br>1.	Calon Debitur membuat dan menandatangi permohonan kredit/pembiayaan, dengan melengkapi data persyaratan yang ditetapkan oleh Bank.<br><br>2. Debitur yang akan mengajukan perubahan plafond, penukaran jaminan, syarat - syarat lainnya dari Perjanjian/Akad Kredit/Pembiayaan harus mengajukan dan menandatangani permohonan kepada Bank.<br><br> 3. Bank berhak meminta data - data dan keterangan yang dibutuhkan, sesuai dengan kentuan dan persyaratan kredit/pembiayaan.<br><br>4.	Calon Debitur atau Debitur berkewajiban memberi keterangan yang diminta oleh Bank dengan benar, baik mengenai identitas Debitur, kondisi keuangan dan lain sebagainya.<br><br>5. Bank setelah melaukan analisa mengenal kelayakan pemberian kredit/pembiayaan atas permohonan yang diajukan oleh Calon Debitur atau Debitur menetapkan : <br>a.	Permohonan ditolak, apabila menurut penilaian Bank, Debitur tidak layak diberikan kredit/pembiayaan.<br>b.	Permohonan ditangguhkan, apabila persyaratan yang ditetapkan oleh Bank belum dipenuhi oleh Debitur atau karena hal lain yang belum bisa dipenuhi untuk syarat pencairan kredit/pembiayaan debitur.<br>c.	Permohonan dikabulkan, apabila menurut penilaian Bank Debitur layak untuk diberikan kredit/pembiayaan.<br><br>6. Bank hanya dapat mengabulkan permohonan Calon Debitur atau Debitur, maksimal sebesar permohonan Calon Debitur atau Debitur.<br><br>7. Berdasarkan analisa yang telah dilakukan Bank dapat menetapkan arah/komposisi pembiayaan usaha calon Debitur atau Debitur.<br><br>8. Calon Debitur jika setuju dengan persyaratan Bank wajib menandatangani Surat Pemberitahuan Persetujuan Kredit yang diserahkan oleh Bank kepada Debitur.<br><br>9. Jumlah kredit yang diberikan tidak mutlak ditentukan oleh nilai agunan yang diberikan Debitur, tetapi berdasarkan kemampuan bayar dan kebutuhan kredit Debitur.<br></h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Setujui syarat dan ketentuan
                                            </label>
                                        </div>
                                        <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
                                    </div>
                                    
                                    
                                </form>
                                
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