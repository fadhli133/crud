<?php
include 'koneksi.php';

$nama   = $_POST['nama_siswa'];
$kelas  = $_POST['kelas'];
$tgl    = $_POST['tanggal'];
$status = $_POST['status'];

$query = "INSERT INTO tb_absensi (nama_siswa, kelas, tanggal, status)
          VALUES ('$nama', '$kelas', '$tgl', '$status')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>