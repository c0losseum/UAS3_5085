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
<body class="bgungu">
    <section class="">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">
    
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
    <div class="text-end"> <a href="<?= site_url('rekapitulasi/detail/' . $id_matakuliah) ?>"><button type="submit" name="submit" value="1" class="btn btn-primary">Simpan</button></a></div>
  
</form>
    </div>

</div>
</div>
</div>
</div>
</section>

</body>
</html>