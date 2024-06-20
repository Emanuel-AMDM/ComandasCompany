<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            Bem-Vindo: <?= $usuario ?>
        </div>
    </div>
</div>