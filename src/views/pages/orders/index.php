<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/index.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <h1>Comandas</h1>

            <div class="button-create">
                <a href="<?= url('/comandas/create') ?>"><strong>Criar Comanda</strong></a>
            </div>

            <div class="orders">
                <?php foreach ($comandas as $comanda): ?>
                    <div class="border">

                        <a href="<?= url("/comandas/$comanda->id/edit") ?>">
                            <h2><?= $comanda->number ?></h2>
                        </a>

                        <div class="icons">
                            <div class="border-boll-trash">
                                <a href=""><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>