<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Materialize CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/auth.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to CarRent</title>
</head>
<body class="auth-body login-bg">
    <!-- Navigation -->
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="<?= base_url() ?>" class="brand-logo">CarRent</a>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="auth-container">
        <div class="card auth-card">
            <div class="card-content">
                <h4 class="login-title">Login to CarRent</h4>
                
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="red-text error-message"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="success-message"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>

                <form action="<?= base_url('login/process') ?>" method="post">
                    <div class="input-field">
                        <input id="username" name="username" type="text" class="validate" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                <button class="btn waves-effect waves-light blue darken-3 btn-extended" type="submit">
                    Login
                </button>
                </form>
                
                <div class="auth-link">
                    <p>Don't have an account? <a href="<?= base_url('register') ?>">Register here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer blue darken-3">
        <div class="container center-align">
            <span class="white-text">CarRent &copy; <?= date('Y') ?></span>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>