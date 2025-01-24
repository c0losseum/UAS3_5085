<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>
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
        <h3>Edit Nilai Mahasiswa</h3>
        <form action="<?= site_url('rekapitulasi/edit/' . $id_mahasiswa . '/' . $id_matakuliah) ?>" method="post">
    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" class="form-control" value="<?= $mahasiswa->nama_mahasiswa ?>" readonly>
    </div>
    <div class="form-group">
        <label>NIM</label>
        <input type="text" class="form-control" value="<?= $mahasiswa->nim ?>" readonly>
    </div>
    <div class="form-group">
        <label>Nilai</label>
        <input type="number" name="nilai" class="form-control" value="<?= $mahasiswa->nilai ?>" min="0" max="100" required>
    </div>
    <div class="container mt-5">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error') ?>
        </div>
    <?php endif; ?></div>
    
    <!-- Sisa kode view tetap sama -->
    <button type="submit" name="submit" value="1" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('rekapitulasi/detail/' . $id_matakuliah) ?>" class="btn btn-secondary">Kembali</a>
</form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>