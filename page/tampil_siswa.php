<?php
$query = mysql_query("select * from tsiswa left join tkelas on tkelas.id_kelas = tsiswa.id_kelas");
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Siswa</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Siswa</a></li>
                            <li class="active">Data Siswwa</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                       <div class="col-lg-2 col-sm-3 col-xs-12">
                          <a href="?page=input_siswa"> <button class="btn btn-block btn-primary btn-rounded"><i class="fa fa-plus"> Tambah</i></button></a>
                        </div>

                            <h3 class="box-title m-b-2">Data Siswa</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                    <thead>
                      <tr>
                        <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Alamat</th>
        				  <th>Jenis Kelamin</th>
        				  <th>Sekolah</th>
        				  <th>Kelas di Sekolah</th>
        				  <th>Kelas di Bimbel</th>
        				  <th>Semester</th> 
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no=1; {
			while ($data = mysql_fetch_array($query))  {?>	
			<tr>
			    <td><?php echo $no.'.'; ?></td>
			    <td><?php echo $data['nama_siswa']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['sekolah']; ?></td>
				<td><?php echo $data['kelas_sk']; ?></td>
				<td><?php echo $data['nama_kelas']; ?></td>
				<td><?php echo $data['semester']; ?></td>
				 <td>
             <a href="?page=input_siswa&edit=true&id_siswa=<?php echo $data['id_siswa']; ?>">
                     <button class="btn btn-warning btn-circle">
                          <i class="fa fa-edit "></i>  </button> </a>                              
         <a href="proses.php?tipe=Hapus_Siswa&id_siswa=<?php echo $data['id_siswa']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data['username']; ?>?')"> 
           <button class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i> </button></a>
                                            </td>
			</tr>	 
		<?php $no++; } }?>
                    </tbody>
                    
                   </table>
                </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
