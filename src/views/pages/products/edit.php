<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Cadastrar - Produto</h1>

            <div class="contents-products">
                <div class="select">
                    <label for=""><strong>Setor</strong></label>
                    <select name="" id=""></select>
                </div>
                <div class="select">
                    <label for=""><strong>Tipo</strong></label>
                    <select name="" id=""></select>
                </div>
            </div>

            <div class="contents-products">
                <div class="select">
                    <label for=""><strong>Sabor</strong></label>
                    <select name="" id=""></select>
                </div>
                <div class="select">
                    <label for=""><strong>Tamanho</strong></label>
                    <select name="" id=""></select>
                </div>
            </div>

            <div class="contents-products">
                <div class="select">
                    <label for=""><strong>Marca</strong></label>
                    <select name="" id=""></select>
                </div>
                <div class="input-text">
                    <label for=""><strong>Valor</strong></label>
                    <input type="text">
                </div>
            </div>

            <div class="button-save">
                <button>Salvar</button>
            </div>

        </div>
    </div>
</div>