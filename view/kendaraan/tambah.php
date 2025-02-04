<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tambah Kendaraan</title>
</head>
<body>
    <h1>Halaman Tambah Data Kendaraan</h1>
    <form action="simpan.php" method="POST">
        <label for="">plat_nomor</label>
        <input type="text" name="plat_nomor">
        <br>
        <label for="">id_parkir</label>
        <input type="text" name="id_parkir">
        <br>
        <label for="">warna_kendaraan</label>
        <input type="text" name="warna_kendaraan">
        <br>
        <label for="">model_kendaraan</label>
        <input type="text" name="model_kendaraan">
        <br>
        <label for="">jenis_kendaraan</label>
        <input type="text" name="jenis_kendaraan">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>