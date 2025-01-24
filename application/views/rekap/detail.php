<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <style>
        .bgungu{
            background-color: #5335b8;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3>Mahasiswa Mata Kuliah: <?= $matakuliah->nama_matakuliah ?></h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($mahasiswa)): ?>
    <?php foreach ($mahasiswa as $index => $mhs): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $mhs->nama_mahasiswa ?></td>
            <td><?= $mhs->nim ?></td>
            <td><?= $mhs->nilai ?></td>
            <td>
                <!-- Debug: Cek apakah objek mhs memiliki id -->
                <?php if (property_exists($mhs, 'id')): ?>
                    <a href="<?= site_url('rekapitulasi/edit/' . $mhs->id_mahasiswa . '/' . $matakuliah->id_matakuliah) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= site_url('rekapitulasi/delete/' . $mhs->id_mahasiswa . '/' . $matakuliah->id_matakuliah) ?>" 
           class="btn btn-danger btn-sm" 
           onclick="return confirm('Yakin ingin menghapus nilai mahasiswa ini?')">Hapus</a>
                <?php else: ?>
                    <span>Data tidak lengkap</span>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="5" class="text-center">Data tidak tersedia.</td>
    </tr>
<?php endif; ?>


        </tbody>
    </table>
    <a href="<?= site_url('rekapitulasi') ?>" class="btn btn-secondary">Kembali</a>
</div>

<!-- Script untuk Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
