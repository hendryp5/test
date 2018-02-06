
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Grafik Calon Mahasiswa</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Grafik Calon Mahasiswa</a></li>
                            <li class="active">Grafik Calon Mahasiswa</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                 

                            <h3 class="box-title m-b-2">Data Grafik Calon Mahasiswa Baru</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                         <form action="index.php?page=tampil_grafik" method="post" data-parsley-validate novalidate enctype="multipart/form-data" >
                               <div class="col-md-12">
                                                    <div class="form-group">
                                                         <select class="form-control select2" name="id_sekolah" id="id_sekolah" onchange="form.submit()">
                                                            <option value="">--Pilih Sekolah--</option>
                                                             <?php
                                                            
                                                                $query = mysql_query("select distinct nama_sekolah,tformulirpendaftaran.id_sekolah from tformulirpendaftaran left join tsekolah on tsekolah.id_sekolah = tformulirpendaftaran.id_sekolah order by nama_sekolah DESC");
                                                            
                                                                while($prov=mysql_fetch_array($query)){
                                                            
                                                                 
                                                                echo "<option value=\"$prov[id_sekolah]\">$prov[nama_sekolah]</option>";
                                                                }
                                                                ?>
                                                               
                                                            
                                                        </select>
                                                        <input class="btn btn-small btn bg-orange btn-sm " type="submit" name="submit" id="submit" value="Cari Data"/> </div>
                                                </div>
                                                </form>

                                
                            </div>
                        </div>
                    </div>
                    </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        
                    <div class="panel-heading"> </div>
                    <div class="panel-body">
                        <div class="grafik" style="min-width: 310px; height: 400px; margin: 0 auto">
                         <?php include "grafi.php"; ?>
                        </div>
                        </div>
                            </div> 

                       
                        </div>
                    
                    </div>
                    </div>
                    </div>
                    </div>

      <!-- /.row -->