<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $plafond_pinjaman = $_POST['num1'];
    $bunga_pinjaman = $_POST['num2'];
    $waktu_pinjaman = $_POST['num3'];
    $jenis_bunga = $_POST['jenis_bunga'];

    switch ($jenis_bunga) {
        case 'flat':
            $total_angsuran = $plafond_pinjaman + ($plafond_pinjaman*0.83335*$bunga_pinjaman/100);
            $pokok = $plafond_pinjaman/$waktu_pinjaman;
            $bunga = $plafond_pinjaman*0.83335*$bunga_pinjaman/1000;
            $total = $total_angsuran/$waktu_pinjaman;
            break;
        case 'sliding_harian':
            $total_angsuran =
            ($plafond_pinjaman*(1+($bunga_pinjaman/100)*1.0484));
            //Total Biaya Pinjaman = Rp.90.000.000 * (1 + 0,24)^12 = Rp.101.930.000
            $pokok = $plafond_pinjaman/$waktu_pinjaman;
            $bunga = ($plafond_pinjaman*$bunga_pinjaman/100)/$waktu_pinjaman;
            $total = $pokok+$bunga;
            $sliding_harian = true;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            // Check if division by zero is attempted
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Cannot divide by zero!';
            }
            break;
    }
}
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
                                    <h1>Kalkulator</h1>
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
                                <div class="card-body">
                                    <form id="kalkulator" method="post" class="form-horizontal">
                                    <label class="control-label" for="jenis_bunga">Jenis Bunga </label>
                                    <select name="jenis_bunga" required>
                                        <option value="flat">FLAT</option>
                                        <option value="sliding_harian">SLIDING HARIAN PER TAHUN</option>
                                        <option value="*">*</option>
                                        <option value="/">/</option>
                                    </select><br>
                                    <label class="control-label" for="num1">Jumlah Kredit (Rp.) </label>
                                    <input type="number" name="num1" required><br>
                                    <label class="control-label" for="num2">Besar Bunga (%) </label>
                                    <input type="number" name="num2" required><br>
                                    <label class="control-label" for="num2">Jangka Waktu Kredit (bulan) </label>
                                    <input type="number" name="num3" required><br>
                                    <button type="submit" class="btn btn-primary" name="kalkulator" value="kalkulator">Calculate</button>
                                    </form>
                                    <h2>
                                        Plafond Pinjaman : Rp <?php echo number_format($plafond_pinjaman, 0, ',', '.') ?><br>
                                        Total Angsuran : Rp <?php echo number_format($total_angsuran, 0, ',', '.') ?><br>
                                        ANGSURAN PER-BULAN (FLAT) : <?php echo $waktu_pinjaman ?>x<br>
                                    </h2>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Tabel Angsuran</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Angsuran Ke-</th>
                                                        <th scope="col">Pokok</th>
                                                        <th scope="col">Bunga</th>
                                                        <th scope="col">Total Angsuran</th>
                                                        <th scope="col">Sisa Angsuran</th>
                                                    </tr>
                                                </thead>
                                                <?php for ($i = 1; $i <= $waktu_pinjaman; $i++) { ?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td>Rp. 
                                                            <?php echo number_format($pokok, 0, ',', '.');?>
                                                        </td>
                                                        <td>Rp. 
                                                            <?php
                                                            echo number_format($bunga, 0, ',', '.');
                                                            ?>
                                                        </td>
                                                        <td>Rp.
                                                            <?php
                                                            echo number_format($total, 0, ',', '.');?>
                                                        </td>
                                                        <td>Rp. 
                                                            <?php $sisa = $plafond_pinjaman-($pokok*$i);
                                                            echo number_format($sisa, 0, ',', '.'); 
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                            
                                        </div>
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