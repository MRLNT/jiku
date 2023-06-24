<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $kredit_file_1 = $_POST['kredit_file_1'];
    $kredit_file_2 = $_POST['kredit_file_2'];
    $kredit_file_3 = $_POST['kredit_file_3'];
    $kredit_file_4 = $_POST['kredit_file_4'];
    $kredit_file_5 = $_POST['kredit_file_5'];
    $kredit_file_6 = $_POST['kredit_file_6'];
    $kredit_file_7 = $_POST['kredit_file_7'];
    $kredit_file_8 = $_POST['kredit_file_8'];
    $kredit_file_9 = $_POST['kredit_file_9'];
    $kredit_file_10 = $_POST['kredit_file_10'];
    $kredit_file_11 = $_POST['kredit_file_11'];
    $kredit_file_13 = $_POST['kredit_file_13'];
    $kredit_file_14 = $_POST['kredit_file_14'];
    $kredit_file_15 = $_POST['kredit_file_15'];
    $kredit_file_16 = $_POST['kredit_file_16'];
    $kredit_file_17 = $_POST['kredit_file_17'];
    $kredit_file_18 = $_POST['kredit_file_18'];
    $kredit_file_19 = $_POST['kredit_file_19'];
    $kredit_file_20 = $_POST['kredit_file_20'];

    $insert = "INSERT INTO temp_form6(kredit_file_1, kredit_file_2, kredit_file_3, kredit_file_4, kredit_file_5, kredit_file_6, kredit_file_7, kredit_file_8, kredit_file_9, kredit_file_10, kredit_file_11, kredit_file_13, kredit_file_14, kredit_file_15, kredit_file_16, kredit_file_17, kredit_file_18, kredit_file_19, kredit_file_20) VALUES('$kredit_file_1','$kredit_file_2','$kredit_file_3','$kredit_file_4','$kredit_file_5','$kredit_file_6','$kredit_file_7','$kredit_file_8','$kredit_file_9','$kredit_file_10','$kredit_file_11','$kredit_file_13','$kredit_file_14','$kredit_file_15','$kredit_file_16','$kredit_file_17','$kredit_file_18','$kredit_file_19','$kredit_file_20')";
    mysqli_query($conn, $insert);
    
    header('Location: kredit_final.php');
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
                                    <h1>Syarat dan Ketentuan</h1>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start Tabs contant -->
                    <div class="row tabs-contant">
                        <div class="col-xxl-12 m-b-30">
                            <div class="card card-statistics h-100 mb-0">
                                <form action="" method="post">
                                    <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                                        <div class="card-heading mb-3 mb-sm-0">
                                            <h4 class="card-title">Dokumen Check List dan Tanda Terima Dokumen</h4>
                                        </div>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark" style="max-height: 420px;">
                                        <div class="table-responsive m-t-20">
                                            <table id="datatable-buttons" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Dokumen</th>
                                                        <th>Cek List</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Asli SK Pangkat Calon Pegawai 80%</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_1" id="defaultCheck1" name="kredit_file_1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Asli SK Pengangkatan sebagai PNS (100%) / SK Pensiun</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_2" id="defaultCheck2" name="kredit_file_2">
                                                                <label class="form-check-label" for="defaultCheck2">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Asli SK Pangkat Terakhir</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_3" id="defaultCheck3" name="kredit_file_3">
                                                                <label class="form-check-label" for="defaultCheck3">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Slip Gaji Bulan Terakhir</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_4" id="defaultCheck4" name="kredit_file_4">
                                                                <label class="form-check-label" for="defaultCheck4">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Copy Kartu Tanda Penduduk (KTP)</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_5" id="defaultCheck5" name="kredit_file_5">
                                                                <label class="form-check-label" for="defaultCheck5">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Copy Kartu Keluarga</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_6" id="defaultCheck6" name="kredit_file_6">
                                                                <label class="form-check-label" for="defaultCheck6">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Asli Bukti Kepemilikan Agunan bagi kredit yang disyaratkan<br>menggunakan agunan tambahan</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_7" id="defaultCheck7" name="kredit_file_7">
                                                                <label class="form-check-label" for="defaultCheck7">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Copy Kartu Taspen</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_8" id="defaultCheck8" name="kredit_file_8">
                                                                <label class="form-check-label" for="defaultCheck8">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Copy NPWP untuk jumlah permohonan kredit yang wajib<br>dilengkapi NPWP sesuai aturan yang berlaku</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_9" id="defaultCheck9" name="kredit_file_9">
                                                                <label class="form-check-label" for="defaultCheck9">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Menyerahkan Surat Kuasa Memotong Gaji<br>diatas materi secukupnya</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_10" id="defaultCheck10" name="kredit_file_10">
                                                                <label class="form-check-label" for="defaultCheck10">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Menyerahkan Surat Kuasa Pendebetan<br>Rekening diatas material secukupnya</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_11" id="defaultCheck11" name="kredit_file_11">
                                                                <label class="form-check-label" for="defaultCheck11">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Membuat Surat Pernyataan dan<br>Kuasa diatas materai secukupnya yang memuat :</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Pernyataan dari debitur tidak akan memindahkan<br>gaji/mengganti rekening gaji debitur dari PT Bank Nagari<br>walaupun debitur pindah tugas ke daerah lain sampai kredit<br>dinyatakan Lunas Oleh PT Bank Nagari</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_13" id="defaultCheck13" name="kredit_file_13">
                                                                <label class="form-check-label" for="defaultCheck13">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Menyetujui penggunaan Hak Substitusi dari Bendahara gaji lama kepada<br>bendahara gaji yang baru untuk memotong gajinya dan meneruskannya<br>/mengirimkan/transfer ke Bank Nagari untuk angsuran kreditnya</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_14" id="defaultCheck14" name="kredit_file_14">
                                                                <label class="form-check-label" for="defaultCheck14">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Memberikan kuasa kepada Bank Nagari untuk<br>melakukan penagihan kepada lembaga/instansi tempat debitur<br>bekerja apabila debitur pindah dinas ke daerah lain</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_15" id="defaultCheck15" name="kredit_file_15">
                                                                <label class="form-check-label" for="defaultCheck15">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Menyetujui pendampingan pengurusan dan<br>pengarahan yang dilakukan oleh staf PT<br>Bank Nagari agar uang pensiun Debitur dibayarkan melalui PT Bank Nagari</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_16" id="defaultCheck16" name="kredit_file_16">
                                                                <label class="form-check-label" for="defaultCheck16">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Untuk debitur Selang 2 (dua) Waktu wajib dilengkapi dengan I-Deb SLIK</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_17" id="defaultCheck17" name="kredit_file_17">
                                                                <label class="form-check-label" for="defaultCheck17">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Kwitansi/bukti lunas/keterangan lunas dari<br>bank lain tersebut setelah kredit di bank lain dilunasi</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_18" id="defaultCheck18" name="kredit_file_18">
                                                                <label class="form-check-label" for="defaultCheck18">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Form Fronting Agent ditandatangi oleh Calon Debitur dan Bank</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_19" id="defaultCheck19" name="kredit_file_19">
                                                                <label class="form-check-label" for="defaultCheck19">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Format Form Fronting Agent sebagaimana diatur dalam Lampiran</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_20" id="defaultCheck20" name="kredit_file_20">
                                                                <label class="form-check-label" for="defaultCheck20">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
                                </form>
                            </div>
                        </div>
                    </div>
                    
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