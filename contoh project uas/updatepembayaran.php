<?php
require_once 'koneksipembayaran.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM pembayaran WHERE id_pembayaran = '$id'");
foreach ($q as $dt) :
  ?>
<h1>Tabel Pembayaran</h1>
  <h2>Halaman Ubah Data</h2>
<form action="proses_updatepembayaran.php" method="post">
    <input type="number" name="id_pembayaran" value="<?= $dt['id_pembayaran'] ?>">
    <input type="date" name="tanggal" value="<?= $dt['tanggal'] ?>">
    <input type="number" name="nominal" value="<?= $dt['nominal'] ?>">
    <input type="number" name="jumlah_bulan" value="<?= $dt['jumlah_bulan'] ?>">
    <input type="number" name="denda" value="<?= $dt['denda'] ?>">
    <input type="number" name="siswa_nis" value="<?= $dt['siswa_nis'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}