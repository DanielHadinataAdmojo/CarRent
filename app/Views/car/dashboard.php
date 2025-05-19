<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('css/materialize.min.css') ?>" media="screen,projection" />
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="<?= base_url() ?>" class="brand-logo">Carrent</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
        <?php if ($username): ?>
            <h4>Welcome, <?= esc($username) ?>!</h4>
            <p>You are logged in.</p>
        <?php else: ?>
            <h4>Welcome!</h4>
            <p>You are not logged in.</p>
        <?php endif; ?>
    </div>
    <script type="text/javascript" src="<?= base_url('js/materialize.min.js') ?>"></script>
</body>
</html>
