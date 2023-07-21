<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pinjaman = $_POST['jumlah_pinjaman'];
    $pinjaman = preg_replace('/[.,]|Rp\s?/u', '', $pinjaman);
    $jenis_payroll = $_POST['jenis_payroll'];
    $wpinjaman = $_POST['wpinjaman'];
    $jenis_bunga = $_POST['jenis_bunga'];

    switch ($jenis_bunga) {
        case 'asnaktif':
            if($jenis_payroll == "Bank Nagari"){
                if ($wpinjaman>=1 && $wpinjaman<=5) {
                    $jpersen = 8.25;
                } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                    $jpersen = 8.75;
                } elseif($wpinjaman>=11 && $wpinjaman<=13) {
                    $jpersen = 9.75;
                } elseif($wpinjaman>=14 && $wpinjaman<=15) {
                    $jpersen = 10;
                } else{
                    $jpersen = 10;
                }
            } elseif($jenis_payroll == "Non Nagari"){
                if ($wpinjaman>=1 && $wpinjaman<=5) {
                    $jpersen = 8.75;
                } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                    $jpersen = 9.75;
                } elseif($wpinjaman>=11 && $wpinjaman<=15) {
                    $jpersen = 11;
                } else{
                    $jpersen = 11;
                }
            }
            $totalbungabulanan = 0;
            $premi = 0;
            $jmlhditerima = 0;
            $bungabulanan = 0;
            $biayapencairan = 0;
            $pembayaranbulanan = 0;
            $jumlahcicilanbulanan = 0;
            $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
            $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
            $premi = 0.00375*$pinjaman*$wpinjaman;
            $jmlhditerima = $pinjaman - $premi;
            $bungabulanan = $jpersen / 12;
            $biayapencairan= $premi;
            $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
            $jumlahcicilanbulanan= $wpinjaman*12 ;
            $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
            $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
            $pinjaman_format = number_format($pinjaman, 0, ',', '.');
            $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
            $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
            $premi_format = number_format($premi, 0, ',', '.');
            break;
        case 'prapensiun':
            if($jenis_payroll == "Bank Nagari"){
                if ($wpinjaman>=1 && $wpinjaman<=5) {
                    $jpersen = 8.25;
                } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                    $jpersen = 8.75;
                } elseif($wpinjaman>=11 && $wpinjaman<=13) {
                    $jpersen = 9.75;
                } elseif($wpinjaman>=14 && $wpinjaman<=15) {
                    $jpersen = 10;
                } else{
                    $jpersen = 10;
                }
            } elseif($jenis_payroll == "Non Nagari"){
                if ($wpinjaman>=1 && $wpinjaman<=5) {
                    $jpersen = 8.75;
                } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                    $jpersen = 9.75;
                } elseif($wpinjaman>=11 && $wpinjaman<=15) {
                    $jpersen = 11;
                } else{
                    $jpersen = 11;
                }
            }
            $totalbungabulanan = 0;
            $premi = 0;
            $jmlhditerima = 0;
            $bungabulanan = 0;
            $biayapencairan = 0;
            $pembayaranbulanan = 0;
            $jumlahcicilanbulanan = 0;
            $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
            $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
            $premi = 0.00375*$pinjaman*$wpinjaman;
            $jmlhditerima = $pinjaman - $premi;
            $bungabulanan = $jpersen / 12;
            $biayapencairan= $premi;
            $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
            $jumlahcicilanbulanan= $wpinjaman*12 ;
            $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
            $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
            $pinjaman_format = number_format($pinjaman, 0, ',', '.');
            $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
            $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
            $premi_format = number_format($premi, 0, ',', '.');
            break;
        case 'asnpensiun':
            if ($wpinjaman>=1 && $wpinjaman<=5) {
                $jpersen = 9;
            } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                $jpersen = 9.5;
            } else{
                $jpersen = 10.5;
            }
            $totalbungabulanan = 0;
            $premi = 0;
            $biayaprovisi = 0;
            $jmlhditerima = 0;
            $bungabulanan = 0;
            $biayapencairan = 0;
            $pembayaranbulanan = 0;
            $jumlahcicilanbulanan = 0;
            $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
            $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
            $premi = 0.00375*$pinjaman*$wpinjaman;
            $biayaprovisi = $pinjaman*0.01;
            $jmlhditerima = $pinjaman - $premi - $biayaprovisi - 150000;
            $bungabulanan = $jpersen / 12;
            $biayapencairan= $premi + $biayaprovisi - 150000;
            $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
            $jumlahcicilanbulanan= $wpinjaman*12 ;
            $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
            $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
            $pinjaman_format = number_format($pinjaman, 0, ',', '.');
            $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
            $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
            $premi_format = number_format($premi, 0, ',', '.');
            $biayaprovisi_format = number_format($biayaprovisi, 0, ',', '.');
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
    <script>
        function formatNumber(input) {
            // Remove existing dots, commas, and "Rp" prefix
            var num = input.replace(/[.,]|Rp\s?/g, "");
            // Add thousands separator and "Rp" prefix
            num = "Rp " + num.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            return num;
        }
        function removeNonNumeric(input) {
            return input.replace(/[^0-9.,]/g, "");
        }
        function handleInputChange(input) {
            var sanitizedValue = removeNonNumeric(input.value);
            input.value = formatNumber(sanitizedValue);
        }
    </script>
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
                                    <form action="" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="control-label" for="jenis_bunga">Jenis Bunga </label>
                                                <select name="jenis_bunga" class="form-control"
                                                type="text"  id="formGroupExampleInput10" >
                                                    <option value="asnaktif">ASN AKTIF</option>
                                                    <option value="prapensiun">ASN Pra-Pensiun</option>
                                                    <option value="asnpensiun">ASN Pensiun</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="jumlah_pinjaman">Jumlah Pinjaman</label>
                                                <input name="jumlah_pinjaman" type="text" class="form-control autonumber" id="numeric8" placeholder="Masukkan Jumlah Pinjaman Anda" inputmode="numeric" oninput="handleInputChange(this);" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="numeric9">Waktu Pinjaman (dalam tahun)</label>
                                                <input name="wpinjaman" type="text" class="form-control autonumber" id="numeric9" placeholder="Masukkan Waktu pinjaman anda dalam tahun">
                                            </div>
                                            <div class="form-group">
                                                <div class="card-body">
                                                    <label>Jenis Payroll</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="jenis_payroll" id="inlineRadio01" value="Bank Nagari">
                                                        <label class="form-check-label" for="inlineRadio01">Bank Nagari</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="jenis_payroll" id="inlineRadio02" value="Non Nagari">
                                                        <label class="form-check-label" for="inlineRadio02">Non Nagari</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Hitung" class="btn btn-primary text-uppercase">
                                    </form>
                                    <br><br><br>
                                    <h3>
                                        <?php
                                        echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
                                        echo "<strong>Waktu Pinjaman:</strong> {$wpinjaman} Tahun<br>";
                                        echo "Biaya pencairan: Rp {$biayapencairan_format}<br>";
                                        echo "<strong>Jumlah yang Diterima:</strong> Rp {$jmlhditerima_format} <br>";
                                        echo "<br>";
                                        echo "<strong>Pembayaran Pinjaman Bulanan :</strong> Rp {$pembayaranbulanan_format} x {$jumlahcicilanbulanan} Bulan<br>";
                                        echo "<br> Suku Bunga Tahunan: {$jpersen}%";
                                        echo "<br> Suku Bunga Bulan: {$bungabulanan_persen}%";
                                        echo "<br> Total Premi: Rp {$premi_format} ";
                                        ?>
                                    </h3>
                                    
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
                                                <?php for ($i = 1; $i <= $jumlahcicilanbulanan; $i++) { ?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td>Rp. 
                                                            <?php echo $pembayaranbulanan_format;?>
                                                        </td>
                                                        <td>Rp. 
                                                            <?php
                                                            $tabelbungabulanan = number_format($bungabulanan*$pembayaranbulanan/100, 0, ',', '.');
                                                            echo $tabelbungabulanan
                                                            ?>
                                                        </td>
                                                        <td>Rp.
                                                            <?php
                                                            echo number_format(($pembayaranbulanan+($bungabulanan*$pembayaranbulanan/100))+1, 0, ',', '.'); ;
                                                            ?>
                                                        </td>
                                                        <td>Rp. 
                                                            <?php $sisa = $pinjaman-($pembayaranbulanan*$i);
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