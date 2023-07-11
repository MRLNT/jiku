<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$kode_marketing = $_SESSION['user_name'];
//error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $nama_marketing = $_POST['nama_marketing'];
    $nik_marketing = $_POST['nik_marketing'];
    $cabang_pembantu = $_POST['cabang_pembantu'];
    $no_hp_marketing = $_POST['no_hp_marketing'];

    $insert = "INSERT INTO pengajuan_kredit(nama_marketing, nik_marketing, cabang_pembantu, no_hp_marketing) VALUES('$nama_marketing','$nik_marketing','$cabang_pembantu','$no_hp_marketing')";
    mysqli_query($conn, $insert);
    header('Location: dashboard_user.php');
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
                                    <h1>Review Formulir Akhir</h1>
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
                                            <h4 class="card-title">Data Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql1 = "SELECT * FROM temp_form1 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result1 = $conn->query($sql1);
                                        if ($result1->num_rows > 0) {
                                            $row = $result1->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama Marketing</label>
                                            <input name="nama_marketing" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['nama_marketing'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIK</label>
                                            <input name="nik_marketing" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['nik_marketing'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Handphone</label>
                                            <input name="no_hp_marketing" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['no_hp_marketing'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Cabang/Capem</label>
                                            <select class="form-control" name="cabang_pembantu" id="formGroupExampleInput2">
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG ALAHAN PANJANG') ? 'selected' : '' ?>>CABANG ALAHAN PANJANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG NIAGA') ? 'selected' : '' ?>>CABANG NIAGA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM GUBERNUR') ? 'selected' : '' ?>>CAPEM GUBERNUR</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM LUBUK BUAYA') ? 'selected' : '' ?>>CAPEM LUBUK BUAYA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PASAR RAYA') ? 'selected' : '' ?>>CABANG PASAR RAYA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH PADANG') ? 'selected' : '' ?>>CABANG SYARIAH PADANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM BANDAR BUAT') ? 'selected' : '' ?>>CAPEM BANDAR BUAT</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM UNAND') ? 'selected' : '' ?>>CAPEM UNAND</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG BATU SANGKAR') ? 'selected' : '' ?>>CABANG BATU SANGKAR</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SITEBA') ? 'selected' : '' ?>>CABANG SITEBA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM RSUP M JAMIL') ? 'selected' : '' ?>>CAPEM RSUP M JAMIL</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SOLOK') ? 'selected' : '' ?>>CABANG SOLOK</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM AROSUKA') ? 'selected' : '' ?>>CAPEM AROSUKA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PAINAN') ? 'selected' : '' ?>>CABANG PAINAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM SIMPANG HARU') ? 'selected' : '' ?>>CAPEM SIMPANG HARU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG BUKIT TINGGI') ? 'selected' : '' ?>>CABANG BUKIT TINGGI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SIMPANG EMPAT') ? 'selected' : '' ?>>CABANG SIMPANG EMPAT</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG UJUNG GADING') ? 'selected' : '' ?>>CABANG UJUNG GADING</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM TABEK PATAH') ? 'selected' : '' ?>>CAPEM TABEK PATAH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH BATUSANGKAR') ? 'selected' : '' ?>>CABANG SYARIAH BATUSANGKAR</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG UTAMA') ? 'selected' : '' ?>>CABANG UTAMA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG BANDUNG') ? 'selected' : '' ?>>CABANG BANDUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG JAKARTA') ? 'selected' : '' ?>>CABANG JAKARTA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG KOTA BARU') ? 'selected' : '' ?>>CABANG KOTA BARU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LINTAU') ? 'selected' : '' ?>>CABANG LINTAU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK ALUNG') ? 'selected' : '' ?>>CABANG LUBUK ALUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK BASUNG') ? 'selected' : '' ?>>CABANG LUBUK BASUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK GADANG') ? 'selected' : '' ?>>CABANG LUBUK GADANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK SIKAPING') ? 'selected' : '' ?>>CABANG LUBUK SIKAPING</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG MANTRAMAN JAKARTA') ? 'selected' : '' ?>>CABANG MANTRAMAN JAKARTA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG MENTAWAI') ? 'selected' : '' ?>>CABANG MENTAWAI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG MUARA LABUH') ? 'selected' : '' ?>>CABANG MUARA LABUH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PADANG PANJANG') ? 'selected' : '' ?>>CABANG PADANG PANJANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PANGKALAN') ? 'selected' : '' ?>>CABANG PANGKALAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PARIAMAN') ? 'selected' : '' ?>>CABANG PARIAMAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PAYAKUMBUH') ? 'selected' : '' ?>>CABANG PAYAKUMBUH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PEKANBARU') ? 'selected' : '' ?>>CABANG PEKANBARU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PULAU PUNJUNG') ? 'selected' : '' ?>>CABANG PULAU PUNJUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SAWAHLUNTO') ? 'selected' : '' ?>>CABANG SAWAHLUNTO</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SIJUNJUNG') ? 'selected' : '' ?>>CABANG SIJUNJUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH PAYAKUMBUH') ? 'selected' : '' ?>>CABANG SYARIAH PAYAKUMBUH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH SOLOK') ? 'selected' : '' ?>>CABANG SYARIAH SOLOK</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG TAPAN') ? 'selected' : '' ?>>CABANG TAPAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG TAPUS') ? 'selected' : '' ?>>CABANG TAPUS</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM AUR KUNING BUKITTINGGI') ? 'selected' : '' ?>>CAPEM AUR KUNING BUKITTINGGI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM AIR HAJI') ? 'selected' : '' ?>>CAPEM AIR HAJI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM BY PASS PADANG') ? 'selected' : '' ?>>CAPEM BY PASS PADANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM BAWAN') ? 'selected' : '' ?>>CAPEM BAWAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Syarat dan Ketentuan Bank Nagari</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-text">Bank Nagari<br>Syarat dan Ketentuan:<br>1.	Calon Debitur membuat dan menandatangi permohonan kredit/pembiayaan, dengan melengkapi data persyaratan yang ditetapkan oleh Bank.<br><br>2. Debitur yang akan mengajukan perubahan plafond, penukaran jaminan, syarat - syarat lainnya dari Perjanjian/Akad Kredit/Pembiayaan harus mengajukan dan menandatangani permohonan kepada Bank.<br><br> 3. Bank berhak meminta data - data dan keterangan yang dibutuhkan, sesuai dengan kentuan dan persyaratan kredit/pembiayaan.<br><br>4.	Calon Debitur atau Debitur berkewajiban memberi keterangan yang diminta oleh Bank dengan benar, baik mengenai identitas Debitur, kondisi keuangan dan lain sebagainya.<br><br>5. Bank setelah melaukan analisa mengenal kelayakan pemberian kredit/pembiayaan atas permohonan yang diajukan oleh Calon Debitur atau Debitur menetapkan : <br>a.	Permohonan ditolak, apabila menurut penilaian Bank, Debitur tidak layak diberikan kredit/pembiayaan.<br>b.	Permohonan ditangguhkan, apabila persyaratan yang ditetapkan oleh Bank belum dipenuhi oleh Debitur atau karena hal lain yang belum bisa dipenuhi untuk syarat pencairan kredit/pembiayaan debitur.<br>c.	Permohonan dikabulkan, apabila menurut penilaian Bank Debitur layak untuk diberikan kredit/pembiayaan.<br><br>6. Bank hanya dapat mengabulkan permohonan Calon Debitur atau Debitur, maksimal sebesar permohonan Calon Debitur atau Debitur.<br><br>7. Berdasarkan analisa yang telah dilakukan Bank dapat menetapkan arah/komposisi pembiayaan usaha calon Debitur atau Debitur.<br><br>8. Calon Debitur jika setuju dengan persyaratan Bank wajib menandatangani Surat Pemberitahuan Persetujuan Kredit yang diserahkan oleh Bank kepada Debitur.<br><br>9. Jumlah kredit yang diberikan tidak mutlak ditentukan oleh nilai agunan yang diberikan Debitur, tetapi berdasarkan kemampuan bayar dan kebutuhan kredit Debitur.<br></h5>
                                        <?php
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql2 = "SELECT * FROM temp_form2 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result2 = $conn->query($sql2);
                                        if ($result2->num_rows > 0) {
                                            $row = $result2->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <h5 style="color: red;">Syarat dan Ketentuan disetujui pada : <?php echo $row['tanggal_syarat_ketentuan'] ?></h5>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Data Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql3 = "SELECT * FROM temp_form3 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result3 = $conn->query($sql3);
                                        if ($result3->num_rows > 0) {
                                            $row = $result3->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput1">Nama Marketing</label>
                                            <input name="nama_debitur" type="text" class="form-control" id="formGroupExampleInput1" value="<?php echo $row['nama_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['tempat_lahir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput3">Tanggal Lahir</label><br>
                                            <input id="formGroupExampleInput3" name="tanggal_lahir" type="date"  value="<?php echo $row['tanggal_lahir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput4">NIK Debitur</label>
                                            <input name="nik_debitur" type="number" class="form-control" id="formGroupExampleInput4" value="<?php echo $row['nik_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput5">NIP Debitur</label>
                                            <input name="nip_debitur" type="number" class="form-control" id="formGroupExampleInput5" value="<?php echo $row['nip_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput6">Nomor Pensiun</label>
                                            <input name="nomor_pensiun" type="number" class="form-control" id="formGroupExampleInput6" value="<?php echo $row['nomor_pensiun'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput7">Alamat Rumah</label>
                                            <input name="alamat_rumah" type="text" class="form-control" id="formGroupExampleInput7" value="<?php echo $row['alamat_rumah'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput8">Nama Ibu</label>
                                            <input name="nama_ibu" type="text" class="form-control" id="formGroupExampleInput8" value="<?php echo $row['nama_ibu'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput9">Nama Instansi</label>
                                            <input name="nama_instansi" type="text" class="form-control" id="formGroupExampleInput9" value="<?php echo $row['nama_instansi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput10">Pangkat dan Golongan</label>
                                            <select class="form-control" name="pangkat_golongan" id="formGroupExampleInput10">
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV A Pembina') ? 'selected' : '' ?>>Golongan IV A Pembina</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV B Pembina Tingkat 1') ? 'selected' : '' ?>>Golongan IV B Pembina Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV C Pembina Utama Muda') ? 'selected' : '' ?>>Golongan IV C Pembina Utama Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV D Pembina Utama Madya') ? 'selected' : '' ?>>Golongan IV D Pembina Utama Madya</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV E Pembina Utama') ? 'selected' : '' ?>>Golongan IV E Pembina Utama</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III A Penata Muda') ? 'selected' : '' ?>>Golongan III A Penata Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III B Penata Muda Tingkat 1') ? 'selected' : '' ?>>Golongan III B Penata Muda Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III C Penata') ? 'selected' : '' ?>>Golongan III C Penata</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III D Penata Tingkat 1') ? 'selected' : '' ?>>Golongan III D Penata Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II A Pengatur Muda') ? 'selected' : '' ?>>Golongan II A Pengatur Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II B Pengatur Muda Tingkat 1') ? 'selected' : '' ?>>Golongan II B Pengatur Muda Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II C Pengatur') ? 'selected' : '' ?>>Golongan II C Pengatur</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II D Pengatur Tingkat 1') ? 'selected' : '' ?>>Golongan II D Pengatur Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I A Juru Muda') ? 'selected' : '' ?>>Golongan I A Juru Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I B Juru Muda Tingkat 1') ? 'selected' : '' ?>>Golongan I B Juru Muda Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I C Juru') ? 'selected' : '' ?>>Golongan I C Juru</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I D Juru Tingkat 1') ? 'selected' : '' ?>>Golongan I D Juru Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput11">Nomor Rekening</label>
                                            <input name="nomor_rekening" type="number" class="form-control" id="formGroupExampleInput11" value="<?php echo $row['nomor_rekening'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput12">Nomor NPWP</label>
                                            <input name="nomor_npwp" type="number" class="form-control" id="formGroupExampleInput12" value="<?php echo $row['nomor_npwp'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput13">Nomor Telepon</label>
                                            <input name="nomor_telepon" type="number" class="form-control" id="formGroupExampleInput13" value="<?php echo $row['nomor_telepon'] ?>">
                                        </div>
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