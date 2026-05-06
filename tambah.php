<?php include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $ket = $_POST['keterangan'];

    mysqli_query($conn, "INSERT INTO tb_absensi (nama_siswa, keterangan) VALUES ('$nama','$ket')");
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Absensi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 rounded-4">
    <h4>Tambah Absensi</h4>

    <form method="POST">
        <input type="text" name="nama" class="form-control mb-3" placeholder="Nama Siswa" required>

        <select name="keterangan" class="form-control mb-3">
            <option>Hadir</option>
            <option>Izin</option>
            <option>Alpa</option>
        </select>

        <button name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</div>
</body>
</html>