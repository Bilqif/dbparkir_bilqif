<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tambah Parkir</title>
</head>
<body>
    <h1>Halaman Tambah Data Parkir</h1>
    <form action="simpan.php" method="POST">
        <label for="">id_parkir</label>
        <input type="text" name="id_parkir">
        <br>
        <label for="">harga</label>
        <input type="text" name="harga">
        <br>
        <label for="">lokasi</label>
        <input type="text" name="lokasi">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>