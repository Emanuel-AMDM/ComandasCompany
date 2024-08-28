<link rel="stylesheet" href="<?= public_url('/css/side-bar.css') ?>">

<div class="side-bar-menu">
    <div>
        <img src="<?= public_url('/img/logo.png') ?>" alt="">
    </div>

    <hr>

    <div class="user">
        <i class="fa-solid fa-user"></i>
        <span>Emanuel Menezes</span>
    </div>

    <hr>

    <div class="buttons-menu">
        <a href="<?= url('/comandas') ?>"><i class="fa-solid fa-clipboard"></i><strong>Comandas</strong></a>
        <a href="<?= url('/produtos') ?>"><i class="fa-brands fa-product-hunt"></i><strong>Produtos</strong></a>
        <a href="<?= url('/pre-cadastro') ?>"><i class="fa-solid fa-table-list"></i><strong>Pré-Cadastros</strong></a>
        <!-- <div class="contents">
            <a href="<?= url('/pre-cadastro/marca') ?>"><strong>Marca</strong></a>
            <a href="<?= url('/pre-cadastro/sabor') ?>"><strong>Sabor</strong></a>
            <a href="<?= url('/pre-cadastro/setor') ?>"><strong>Setor</strong></a>
            <a href="<?= url('/pre-cadastro/tamanho') ?>"><strong>Tamanho</strong></a>
            <a href="<?= url('/pre-cadastro/tipo') ?>"><strong>Tipo</strong></a>
        </div> -->
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
</div>