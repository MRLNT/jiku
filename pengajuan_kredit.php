<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $Nama = $_POST['Nama'];
   $Tempat_Lahir = $_POST['Tempat_Lahir'];
   $Tgl_Lahir = $_POST['Tgl_Lahir'];
   $ID = $_POST['ID'];
   $NIK = $_POST['NIK'];
   $NIP = $_POST['NIP'];
   $No_Pensiun = $_POST['No_Pensiun'];
   $Nama_Ibu = $_POST['Nama_Ibu'];
   $Nama_Instansi = $_POST['Nama_Instansi'];
   $Pangkat = $_POST['Pangkat'];
   $No_Rekening = $_POST['No_Rekening'];
   $NPWP = $_POST['NPWP'];
   $No_Telepon = $_POST['No_Telepon'];

   $select = " SELECT * FROM user_credit WHERE NIK = '$NIK' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'CREDIT already exist!';

   }else{
      $insert = "INSERT INTO user_credit(Nama, Tempat_Lahir, Tgl_Lahir, NIK, NIP, No_Pensiun, Nama_Ibu, Nama_Instansi, Pangkat, No_Rekening, NPWP, No_Telepon) VALUES('$Nama','$Tempat_Lahir','$Tgl_Lahir','$NIK', '$NIP', '$No_Pensiun', '$Nama_Ibu', '$Nama_Instansi', '$Pangkat', '$No_Rekening', '$NPWP', '$No_Telepon')";

      mysqli_query($conn, $insert);
      header('location:pengajuan_kredit.php');
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
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

<body class="bg-white">
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

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="card card-statistics">
                                 <div class="card-header">
                                       <div class="card-heading">
                                          <h4 class="card-title">Horizontal Form</h4>
                                       </div>
                                 </div>
                                 <div class="card-body">
                                 <h1 class="mb-2">We are Mentor</h1>
                                        <p>Welcome, Please create your account.</p>
                                        <form action="" method="post" class="mt-2 mt-sm-5">
                                            <?php
                                              if(isset($error)){
                                                 foreach($error as $error){
                                                    echo '<span class="error-msg">'.$error.'</span>';
                                                 };
                                              };
                                            ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama</label>
                                                        <input type="text" name="Nama" class="form-control" required placeholder="Masukkan Nama Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tempat Lahir</label>
                                                        <input type="text" name="Tempat_Lahir" class="form-control" required placeholder="Masukkan Tempat Lahir Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                      <label class="control-label">Tanggal Lahir</label>
                                                      <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="14-06-2018">
                                                         <input class="form-control" type="text" name="Tgl_Lahir" required placeholder="Masukkan Tanggal Lahir Anda">
                                                         <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">NIK</label>
                                                        <input type="number" name="NIK" class="form-control" required placeholder="Masukkan NIK Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">NIP</label>
                                                        <input type="number" name="NIP" class="form-control" required placeholder="Masukkan NIP Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">No Pensiun</label>
                                                        <input type="number" name="No_Pensiun" class="form-control" required placeholder="Masukkan Nomor Pensiun Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Ibu</label>
                                                        <input type="text" name="Nama_Ibu" class="form-control" required placeholder="Masukkan Nama Ibu Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Instansi</label>
                                                        <input type="text" name="Nama_Instansi" class="form-control" required placeholder="Masukkan Nama Instansi Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pangkat</label>
                                                        <input type="text" name="Pangkat" class="form-control" required placeholder="Masukkan Pangkat Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">No Rekeking</label>
                                                        <input type="number" name="No_Rekening" class="form-control" required placeholder="Masukkan Nomor Rekening Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">NPWP</label>
                                                        <input type="number" name="NPWP" class="form-control" required placeholder="Masukkan NPWP Anda" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">No Telepon</label>
                                                        <input type="number" name="No_Telepon" class="form-control" required placeholder="Masukkan Nomor Telepon Anda" />
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <input type="submit" name="submit" value="Sign Up" class="btn btn-primary text-uppercase">
                                                </div>
                                                
                                            </div>
                                        </form>
                                 </div>
                              </div>
                           </div>
 
                        </div>
                    </div>
                </div>
            </div>
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