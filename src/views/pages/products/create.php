<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url('/produtos/create') ?>" method="post">
            
                <h1>Cadastrar - Produto</h1>

                <?php foreach($atributtes as $atributte): ?>
                    <div class="contents-products">
                        <div class="select">
                            <label for="<?= $atributte->name ?>">
                                <strong><?= $atributte->name ?></strong>
                            </label>
                            
                            <select name="<?= $atributte->name ?>" id="<?= $atributte->name ?>">
                                <?php foreach($atributte->atributte_options as $option): ?>
                                    <option value="<?= $option->id ?>"><?= $option->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                <?php endforeach ?>

                <div class="contents-products">
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