<?php
$nik=$_GET['nik'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM daftar WHERE nik ='$nik'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pendaftar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9 col-xs-9">
							<input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_lahir" value="<?=$data['tgl_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="no_telepon" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telepon" value="<?=$data['no_telepon']?>"class="form-control" id="inputEmail3" placeholder="Nomor Telepon" >
                            </div>
                        </div>
						<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>"class="form-control" id="inputEmail3" placeholder="Email" >
                            </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data&actions=pendaftar" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendaftar
                    </a>
                </div>
            </div>

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
    $sql="UPDATE daftar SET nama='$nama',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',
	no_telepon='$no_telepon',email='$email' WHERE nik ='$nik'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=pendaftar');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



