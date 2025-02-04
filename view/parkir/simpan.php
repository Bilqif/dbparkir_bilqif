<?php
include '../../config/koneksi.php';

$id_parkir = $_POST['id_parkir'];
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];

$query = mysqli_query($conn, "INSERT INTO parkir VALUES('$id_parkir','$harga','$lokasi')");
echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";
?>