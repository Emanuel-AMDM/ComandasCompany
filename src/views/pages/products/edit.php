<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url("/produtos/$product->id/edit") ?>" method="post">
            
                <h1>Editar - Produto</h1>

                <div class="contents-wrap">
                    <?php foreach($attribute as $attributes): ?>
                        <input type="hidden" name="created_at" value="<?= $attributes->created_at ?>">
                        
                        <div class="contents-products">
                            <div class="select">
                                <label for="<?= $attributes->name ?>">
                                    <strong><?= $attributes->name ?></strong>
                                </label>
                                
                                <select name="attribute_option_ids[]" id="<?= $attributes->name ?>" required>
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
                            <input type="text" name="name" value="<?= $product->name ?>" required>
                        </div>
    
                        <div class="input-text">
                            <label for=""><strong>Valor</strong></label>
                            <input type="text" name="price" value="<?= $product->price ?>" required>
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