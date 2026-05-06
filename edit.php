<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM tb_absensi WHERE id='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $ket = $_POST['keterangan'];

    mysqli_query($conn, "UPDATE tb_absensi SET 
        nama_siswa='$nama',
        keterangan='$ket'
        WHERE id='$id'");

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Absensi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 rounded-4">
    <h4>Edit Absensi</h4>

    <form method="POST">
        <input type="text" name="nama" value="<?= $d['nama_siswa'] ?>" class="form-control mb-3">

        <select name="keterangan" class="form-control mb-3">
            <option <?= ($d['keterangan']=='Hadir')?'selected':'' ?>>Hadir</option>
            <option <?= ($d['keterangan']=='Izin')?'selected':'' ?>>Izin</option>
            <option <?= ($d['keterangan']=='Alpa')?'selected':'' ?>>Alpa</option>
        </select>

        <button name="update" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</div>
</body>
</html>