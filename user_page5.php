<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
    $waktu_pinjaman = $_POST['waktu_pinjaman'];
    $umur_pengajuan = $_POST['umur_pengajuan'];
    
    
    $insert = "INSERT INTO temp_form4(jumlah_pinjaman,waktu_pinjaman,umur_pengajuan) VALUES('$jumlah_pinjaman','$waktu_pinjaman','$umur_pengajuan')";
    mysqli_query($conn, $insert);
    header('Location: user_page6.php');
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
                                    <li> <a href="user_page.php">ASN Aktif</a> </li>
                                    <li> <a href="user_page.php">ASN Pra-Pensiun </a> </li>
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
                                    <h1>Tabs</h1>
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
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Hasil Perhitungan</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <?php
                                    $sql1 = "SELECT * FROM temp_form4 ORDER BY id_pengajuan DESC LIMIT 1";
                                    $result1 = $conn->query($sql1);
                                    if ($result1->num_rows > 0) {
                                        $row = $result1->fetch_assoc();
                                    } else {
                                        echo "No data found.";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama Marketing</label>
                                        <input name="nama_marketing" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['waktu_pinjaman'] ?>">
                                    </div>
                                    <h5>
                                        <?php
                                        $test = $row['jumlah_pinjaman']; echo $test;

                                        $umur = $row['umur_pengajuan'];
                                        $pinjaman = $row['jumlah_pinjaman'];
                                        $wpinjaman = $row['waktu_pinjaman'];

                                        $jpersen = 0.0;
                                        $totalbungabulanan = 0;
                                        $premi = 0;
                                        $biayaprovisi = 0;
                                        $jmlhditerima = 0;
                                        $bungabulanan = 0;
                                        $biayapencairan = 0;
                                        $pembayaranbulanan = 0;
                                        $jumlahcicilanbulanan = 0;
                                        $max_pinjaman = 300000000; // Maksimal jumlah pinjaman adalah 300 juta
                                    
                                        if ($pinjaman > $max_pinjaman) 
                                        {
                                        echo "Maaf, maksimal jumlah pinjaman adalah " . number_format($max_pinjaman, 0, ',', '.') . " rupiah.";
                                        exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                        }

                                        if ($wpinjaman > 180) 
                                        {
                                        echo "Maaf, maksimal Pengajuan waktu kredit 15 Tahun";
                                        exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                        }

                                        if ($wpinjaman>=1 && $wpinjaman<=5) {
                                            $jpersen = 9;
                                        } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                                            $jpersen = 9.5;
                                        } else{
                                            $jpersen = 10.5;
                                        }

                                        $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
                                    // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                        $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
                                    // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                        $premi = 0.00375*$pinjaman*$wpinjaman;
                                    // Total premi =2.  0.375*200jt*5tahun=3.7jt
                                        $biayaprovisi = $pinjaman*0.01;
                                    // Biaya Provisi =3.
                                        $jmlhditerima = $pinjaman - $premi - $biayaprovisi - 150000;
                                    // Jumlah yang diterima
                                        $bungabulanan = $jpersen / 12;
                                    // Bunga Bulanan
                                        $biayapencairan= $premi + $biayaprovisi - 150000;
                                    // Bunga Bulanan
                                        $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
                                    // Pembayaran Bulanan
                                        $jumlahcicilanbulanan= $wpinjaman*12 ;
                                    // Pembayaran Bulanan
                                        $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
                                        $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
                                        $pinjaman_format = number_format($pinjaman, 0, ',', '.');
                                        $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
                                        $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
                                        $premi_format = number_format($premi, 0, ',', '.');
                                        $biayaprovisi_format = number_format($biayaprovisi, 0, ',', '.');

                                        echo "<strong>Umur:</strong> {$umur} <br>";
                                        echo "<br>";
                                        echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
                                        echo "<strong>Waktu Pinjaman:</strong> {$wpinjaman} <br>";
                                        echo "Biaya pencairan: Rp {$biayapencairan_format}<br>";
                                        echo "<strong>Jumlah yang Diterima:</strong> Rp {$jmlhditerima_format} <br>";
                                        echo "<br>";
                                        echo "<strong>Pembayaran Pinjaman Bulanan :</strong> Rp {$pembayaranbulanan_format} x {$jumlahcicilanbulanan} <br>";
                                        echo "<br> Suku Bunga Tahunan: {$jpersen}%";
                                        echo "<br> Suku Bunga Bulan: {$bungabulanan_persen}%";
                                        echo "<br> Total Premi: Rp {$premi_format} ";
                                        echo "<br>";
                                        echo "Biaya Provisi: Rp {$biayaprovisi_format}";
                                        echo "<br>";
                                        ?>
                                    </h5>
                                        
                                    </div>
                                    <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
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