<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url('/produtos/create') ?>" method="post">
            
                <h1>Cadastrar - Produto</h1>

                <div class="contents-wrap">
                    <?php foreach($attribute as $attributes): ?>
                        <div class="contents-products">
                            <div class="select">
                                <label for="<?= $attributes->name ?>">
                                    <strong><?= $attributes->name ?></strong>
                                </label>
                                
                                <select name="attribute_option_ids[]" id="<?= $attributes->name ?>">
                                    <?php foreach($attributes->attribute_options as $option): ?>
                                        <option value="<?= $option->id ?>"><?= $option->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endforeach ?>

                    <div class="contents-products">
                        <div class="input-text">
                            <label for=""><strong>Título de Busca</strong></label>
                            <input type="text" name="name">
                        </div>

                        <div class="input-text">
                            <label for=""><strong>Valor</strong></label>
                            <input type="text" name="price">
                        </div>
                        
                        <div class="button-save">
                            <button type="submit">Salvar</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>