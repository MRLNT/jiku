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
    <?php @include 'components/head.php'?>
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
            <?php @include 'components/navigation.html'?>
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
                                    <h1>Data Table</h1>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                        <ol class="breadcrumb p-0 m-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ti ti-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                Tables
                                            </li>
                                            <li class="breadcrumb-item active text-primary" aria-current="page">Data Table</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="datatable-wrapper table-responsive">
                                        <table id="datatable" class="display compact table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID Pengajuan</th>
                                                    <th>Tipe Kredit</th>
                                                    <th>Nama Marketing</th>
                                                    <th>Nama Debitur</th>
                                                    <th>Jumlah Pinjaman</th>
                                                    <th>Waktu Pengajuan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sql = "SELECT * from data_kredit_asnaktif";
                                            if ($result = mysqli_query($conn, $sql)) $rowcount = mysqli_num_rows( $result );

                                            $sql1 = "SELECT * FROM data_kredit_asnaktif";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                for ($i = 1; $i <= $rowcount; $i++) {
                                                    $row = $result1->fetch_assoc();
                                                    echo "<tr>";
                                                    echo "<td>"; echo $row['id_pengajuan']; echo "</td>";
                                                    echo "<td>"; echo $row['tipe_kredit']; echo "</td>";
                                                    echo "<td>"; echo $row['nama_marketing']; echo "</td>";
                                                    echo "<td>"; echo $row['nama_debitur']; echo "</td>";
                                                    echo "<td>"; echo $row['jumlah_pinjaman']; echo "</td>";
                                                    echo "<td>"; echo $row['waktu_pengajuan']; echo "</td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "No data found.";
                                            }
                                            ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Pengajuan</th>
                                                    <th>Tipe Kredit</th>
                                                    <th>Nama Marketing</th>
                                                    <th>Nama Debitur</th>
                                                    <th>Jumlah Pinjaman</th>
                                                    <th>Waktu Pengajuan</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
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