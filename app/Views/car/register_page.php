<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CarRent</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/auth.css') ?>">
    <style>
        body.auth-body.register-page::before {
            background-image: url('<?= base_url("img/slider/3.png") ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>
<body class="auth-body register-page">
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="<?= base_url() ?>" class="brand-logo">CarRent</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?= base_url('login') ?>">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="auth-container">
        <div class="card auth-card">
            <div class="card-content">
                <h4 class="center-align">Create Account</h4>
                
                <!-- Validation Errors -->
                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="red-text error-message">
                        <?php 
                        $errors = session()->getFlashdata('errors');
                        if (is_array($errors)) {
                            echo implode('<br>', $errors);
                        } else {
                            echo $errors;
                        }
                        ?>
                    </div>
                <?php endif; ?>
                
                <!-- Success/Error Messages -->
                <?php if (session()->getFlashdata('message')): ?>
                    <div class="<?= session()->getFlashdata('message_type') === 'error' ? 'red-text' : 'green-text' ?> error-message">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>

                <form id="registerForm" action="<?= base_url('register/process') ?>" method="post">
                    <?= csrf_field() ?>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input id="username" name="username" type="text" class="validate" 
                               value="<?= old('username') ?>" required>
                        <label for="username">Username</label>
                        <span class="helper-text" data-error="Please enter a valid username"></span>
                    </div>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate" 
                               value="<?= old('email') ?>" required>
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Please enter a valid email"></span>
                    </div>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" name="password" type="password" class="validate" required minlength="8">
                        <label for="password">Password</label>
                        <span class="helper-text" data-error="Password must be at least 8 characters"></span>
                    </div>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="confirm_password" name="confirm_password" type="password" class="validate" required>
                        <label for="confirm_password">Confirm Password</label>
                        <span class="helper-text" data-error="Passwords must match"></span>
                    </div>
                    
                    <button class="btn waves-effect waves-light blue darken-3 btn-extended" type="submit">
                        Register
                        <i class="material-icons right">send</i>
                    </button>
                </form>
                
                <div class="auth-link">
                    Already have an account? <a href="<?= base_url('login') ?>">Login here</a>
                </div>
            </div>
        </div>
    </div>

     <footer class="page-footer blue darken-3">
        <div class="container center-align">
            <span class="white-text">CarRent &copy; <?= date('Y') ?></span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize form validation
            const form = document.getElementById('registerForm');
            
            form.addEventListener('submit', function(e) {
                // Client-side validation
                const password = document.getElementById('password');
                const confirmPassword = document.getElementById('confirm_password');
                
                if (password.value !== confirmPassword.value) {
                    e.preventDefault();
                    M.toast({html: 'Passwords do not match!', classes: 'red'});
                    return false;
                }
                
                if (password.value.length < 8) {
                    e.preventDefault();
                    M.toast({html: 'Password must be at least 8 characters!', classes: 'red'});
                    return false;
                }
                
                return true;
            });
        });
    </script>
</body>
</html>