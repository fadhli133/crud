<?php
require 'config/koneksi.php';

// validasi id
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: index.php?msg=invalid");
    exit;
}

// prepare query
$stmt = $conn->prepare("DELETE FROM tb_absensi WHERE id = ?");
$stmt->bind_param("i", $id);

// eksekusi
if ($stmt->execute()) {
    header("Location: index.php?msg=hapus_sukses");
} else {
    header("Location: index.php?msg=hapus_gagal");
}

$stmt->close();
$conn->close();
exit;