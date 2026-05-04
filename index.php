<?php
require_once 'config/koneksi.php';
$query = "SELECT * FROM tb_absensi ORDER BY id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Absensi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Absensi</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama_siswa']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['status']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>