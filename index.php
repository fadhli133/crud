<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Absensi Siswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow rounded-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h4>Data Absensi</h4>
            <a href="tambah.php" class="btn btn-light btn-sm">+ Tambah</a>
        </div>

        <div class="card-body">
            <table class="table table-hover text-center">
                <thead class="table-secondary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM tb_absensi ORDER BY id DESC");

                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['nama_siswa'] ?></td>
                        <td>
                            <span class="badge bg-<?=
                                ($d['keterangan'] == 'Hadir') ? 'success' :
                                (($d['keterangan'] == 'Izin') ? 'warning' : 'danger')
                            ?>">
                                <?= $d['keterangan'] ?>
                            </span>
                        </td>
                        <td></td>
                        <td>
                            <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $d['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>