<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url('/produtos/create') ?>" method="post">
            
                <h1>Cadastrar - Produto</h1>

                <div class="contents-products">
                    <div class="select">
                        <label for="sector"><strong>Setor</strong></label>
                        <select name="sector" id="sector">
                            <?php foreach($setor as $s): ?>
                                <option value="<?=$s->name?>"><?=$s->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="select">
                        <label for="type"><strong>Tipo</strong></label>
                        <select name="type" id="type"></select>
                    </div>
                </div>

                <div class="contents-products">
                    <div class="select">
                        <label for="flavor"><strong>Sabor</strong></label>
                        <select name="flavor" id="flavor"></select>
                    </div>
                    <div class="select">
                        <label for="size"><strong>Tamanho</strong></label>
                        <select name="size" id="size"></select>
                    </div>
                </div>

                <div class="contents-products">
                    <div class="select">
                        <label for="brand"><strong>Marca</strong></label>
                        <select name="brand" id="brand"></select>
                    </div>
                    <div class="input-text">
                        <label for=""><strong>Valor</strong></label>
                        <input type="text" name="value">
                    </div>
                </div>

                <div class="button-save">
                    <button type="submit">Salvar</button>
                </div>

            </form>

        </div>
    </div>
</div>