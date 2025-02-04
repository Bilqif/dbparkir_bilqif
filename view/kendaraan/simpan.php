<?php
include '../../config/koneksi.php';

$plat_nomor = $_POST['plat_nomor'];
$id_parkir = $_POST['id_parkir'];
$warna_kendaraan = $_POST['warna_kendaraan'];
$model_kendaraan = $_POST['model_kendaraan'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

$query = mysqli_query($conn, "INSERT INTO kendaraan VALUES('$plat_nomor','$id_parkir','$warna_kendaraan','$model_kendaraan','$jenis_kendaraan')");
echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";
?>