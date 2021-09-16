<?php

if(isset($_GET['kode'])){
    $sql_cek = "SELECT * FROM tb_anggota WHERE id_anggota='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>
<section class="content-header">
	<h1>
		Cetak
		<small>Cetak Kartu Anggota</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Si Perpustakaan</b>
			</a>
		</li>
	</ol>
</section>
<section class="content">
        <body>
            <div style="width: 750px;height: 243px;margin: 50px;background-image: url('dist/img/cetak.jpg');">
                <p style="position: absolute; font-family: arial; font-size: 10px; padding-left: 130px;text-transform: uppercase; text-align: center;"> <br>VSGA Digitalent Scholarship<br>Perpustakaan Digital<br><b style="font-size: 12px">Cahya Diantoni</b></p>
                <p style="padding-left: 123px;padding-top: 70px; "><b>KARTU ANGGOTA PERPUSTAKAAN</b></p>
            <table style="margin-top: -10px; margin-left: 125px; padding-left: 10px; position: relative;font-family: arial;font-size: 11px;">
                <br>
                <tr>
                    <td>ID Anggota</td>
                    <td>:</td>
                    <td><?php echo $data_cek['id_anggota'];?></td>
                </tr><tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $data_cek['nama'];?></td>
                </tr>
                </tr><tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php if($data_cek['jekel']=='PR') echo "Perempuan"; else echo "Laki-Laki";?></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td>:</td>
                    <td><?php echo $data_cek['no_hp'];?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $data_cek['alamat'];?></td>
                </tr>
                <tr>
                    <td>Berlaku</td>
                    <td>:</td>
                    <td>Seumur Hidup</td>
                </tr>
            </table>
            <br>
            <p style="padding-left: 10px;font-size: 8px; font-family: arial;position: absolute;">Alamat : Perum Cikarang Permai Desa Ciantra Kec. Cikarang Selatan - Kode Pos 17530<br> Email : cahyadiantoni@gmail.com | Telp : 081919480565 | Website : cahyadiantoni.com</p>
            </div>
        </body>
    <br>
</section>