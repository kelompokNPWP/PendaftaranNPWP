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
				<p align="center"><img src="img/pajak.jpg"></img></p>
					Sistem Informasi Pendaftaran NPWP Kantor Pelayanan Pajak Pratama Kisaran ini adalah sebuah media bagi para wajib pajak untuk melakukan pendaftaran NPWP secara online. Efektif dan efisien merupakan tujuan dan faktor utama kami untuk membuat aplikasi ini yang mana dapat memudahkan para wajib pajak untuk pendaftaran Nomor Pokok Wajib Pajak (NPWP).
					<br>Untuk mengetahui syarat-syarat pendaftaran yang dibutuhkan untuk melakukan registrasi atau pendaftaran NPWP silahkan lihat dan masuk ke menu "Syarat Pendaftaran" pada menubar.
					<br></br>
					<br>
			<center><font size="4">"Jika Anda ingin melakukan registrasi atau pendaftaran NPWP silahkan login terlebih dahulu"</center></font>
            
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
