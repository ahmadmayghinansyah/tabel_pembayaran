<?php
// panggil koneksinya
require_once 'koneksipembayaran.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran SPP</title>
</head>
<body>
  <h1>Tabel Pembayaran</h1>
  
  <form method="post" action="addpembayaran.php">
    <input type="number" name="id_pembayaran" placeholder="ID Pembayaran">
    <input type="date" name="tanggal" placeholder="YYYY_MM_DD">
    <input type="number" name="nominal" placeholder="nominal">
	<input type="number" name="jumlah_bulan" placeholder="Jumlah Bulan">
	<input type="number" name="denda" placeholder="Denda">
	<input type="number" name="siswa_nis" placeholder="NIS Siswa">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
<!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>ID Pembayaran</th>
      <th>Tanggal</th>
      <th>Nominal</th>
	  <th>Jumlah Bulan</th>
	  <th>Denda</th>
	  <th>NIS SISWA</th>
      <th colspan="2">Aksi</th>
    </tr>
<?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM pembayaran");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['id_pembayaran'] ?></td>
      <td><?= $dt['tanggal'] ?></td>
      <td><?= $dt['nominal'] ?></td>
	  <td><?= $dt['jumlah_bulan'] ?></td>
	  <td><?= $dt['denda'] ?></td>
	  <td><?= $dt['siswa_nis'] ?></td>
      <td><a href="updatepembayaran.php?id=<?= $dt['id_pembayaran'] ?>">Ubah</a></td>
      <td><a href="deletepembayaran.php?id=<?= $dt['id_pembayaran'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table>
</body>
</html>