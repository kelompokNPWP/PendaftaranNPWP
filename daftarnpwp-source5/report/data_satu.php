<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pendaftar NPWP</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM daftar WHERE nik='" . $_GET ['nik'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran NPWP KPP Kisaran </h2>
                        <h4>Jalan Prof. H. Muhammad Yamin No.79, Kisaran <br> Kabupaten Asahan, Sumatera Utara, 21224</h4>
                        <hr>
                        <h3>DATA PENDAFTAR NPWP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>NIK</td> <td><?= $data['nik'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
								<tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								<tr>
                                    <td>No Telepon</td> <td><?= $data['no_telepon'] ?></td>
                                </tr>
								<tr>
                                    <td>Email</td> <td><?= $data['email'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kanwil DJP Sumatera Utara II <strong></u><br>
                                        NIP.10287129141617742
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>