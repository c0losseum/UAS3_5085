<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Nilai</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <style>
        .bgs{
            background-color: #5335b8;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3>Daftar Mata Kuliah</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Mata Kuliah</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($matakuliah)): ?>
            <?php foreach ($matakuliah as $index => $mk): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $mk->nama_matakuliah ?></td>
                    <td>
                        <a href="<?= site_url('rekapitulasi/detail/' . $mk->id_matakuliah) ?>" class="btn btn-primary btn-sm">Lihat Mahasiswa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">Data tidak tersedia.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <a href="<?= site_url('login/logout'); ?>" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
