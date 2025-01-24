<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 70%;
        }
        .left-image {
            background: url('https://i.pinimg.com/1200x/fb/c6/2a/fbc62a5d7033f65b0fbd6f8e809fc077.jpg') no-repeat center center;
            background-size: cover;
            width: 50%;
        }
        .form-section {
            padding: 2rem;
            width: 50%;
            background-color: #fff;
            color: #000;
        }
        .form-section h3 {
            margin-bottom: 1.5rem;
        }
        .btn-login {
            background-color: #ff4d4d;
            color: white;
        }
        .btn-login:hover {
            background-color: #e03e3e;
        }
        .form-footer {
            margin-top: 1rem;
            text-align: center;
        }
        .form-footer a {
            color: #007bff;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="card">
            <div class="row no-gutters">
                <!-- Left Image Section -->
                <div class="left-image d-none d-md-block"></div>

                <!-- Form Section -->
                <div class="form-section">
                    <h3 class="text-center">Masuk ke akunmu</h3>

                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger"> <?= $this->session->flashdata('error'); ?> </div>
                    <?php endif; ?>

                    <form method="post" action="<?= site_url('login/auth'); ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                        </div>

                        <button type="submit" class="btn btn-login btn-block">Login</button>

                        <div class="form-footer">
                            <a href="#">Lupa Password?</a> | <a href="#">Belum Punya Akun? Register disini</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
