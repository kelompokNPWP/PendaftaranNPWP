<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                <strong>Selamat Datang di SI Pendaftaran NPWP KPP Pratama Kisaran</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Form Formulir Pendaftaran NPWP</center></h3>
                    <br>        
		<div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                               <div class="col-sm-9">
                               <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan NIK Anda" required> 
							</div>
						</div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_lahir"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Anda" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin Anda" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Anda" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="no_telepon" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telepon" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Telepon Anda" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Inputkan Email Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data&actions=pendaftar" class="btn btn-danger btn-sm">
                        Kembali ke Data Pendaftar
                    </a>
                </div>
            </div>
        
		</table>
		</tbody>

                    </table>
                </div>
            </div>
        </div>
		
		<?php
if($_POST){
    //Ambil data dari form
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$no_telepon=$_POST['no_telepon'];
	$email=$_POST['email'];
 
    //buat sql
    $sql="INSERT INTO daftar VALUES ('$nik','$nama','$tgl_lahir','$jenis_kelamin','$alamat','$no_telepon','$email')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=pendaftar');</script>";
    }else{
        echo "<script>alert('Simpan Gagal');<script>";
    }
    }

?>
