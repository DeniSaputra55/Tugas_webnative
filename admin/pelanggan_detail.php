<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);
?>

<div>
    <label>Kode : <?= $pelanggan['kode'] ?></label><br>
    <label>Nama Pelanggan : <?= $pelanggan['nama_pelanggan'] ?></label><br>
    <label>jenis Kelamin : <?= $pelanggan['jk'] ?></label><br>
    <label>Tempat Lahir : <?= $pelanggan['tmp_lahir'] ?></label><br>
    <label>Tanggal Lahir : <?= $pelanggan['tgl_lahir'] ?></label><br>
    <label>Email : <?= $pelanggan['email'] ?></label><br>
    <label>Alamat : <?= $pelanggan['alamat'] ?></label><br>
    <label>Jenis Kartu : <?= $pelanggan['kartu_id'] ?></label><br>
</div>