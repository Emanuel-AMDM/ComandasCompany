<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url("/produtos/$product->id/edit") ?>" method="post">
            
                <h1>Editar - Produto</h1>

                <?php foreach($attributes as $attribute): ?>
                    <input type="hidden" name="created_at" value="<?= $attribute->created_at ?>">
                    
                    <div class="contents-products">
                        <div class="select">
                            <label for="<?= $attribute->name ?>">
                                <strong><?= $attribute->name ?></strong>
                            </label>
                            
                            <select name="attribute_option_ids[]" id="<?= $attribute->name ?>">
                                <?php foreach($attribute->atributte_options as $option): ?>
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
                </div>

                <div class="contents-products">
                    <div class="input-text">
                        <label for=""><strong>Valor</strong></label>
                        <input type="text" name="price">
                    </div>
                </div>

                <div class="button-save">
                    <button type="submit">Salvar</button>
                </div>

            </form>

        </div>
    </div>
</div>