<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/pre-registration/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url("/pre-cadastro/$registro->id/edit") ?>" method="post">
            
                <h1>Editar - Pre-Cadastro</h1>
                <!-- mudar para um select onde ele vai escolher o tipo  -->
                <div class="contents-pre-registration">
                    <div class="select">
                        <label for=""><strong>Tipo:</strong></label>
                        <select name="type_id" id="type_id">
                            <option value="<?= $registro->type_id ?>"><?= $registro->type_id ?></option>
                            <option value="1">Setor</option>
                            <option value="2">Marca</option>
                            <option value="3">Sabor</option>
                            <option value="4">Tamanho</option>
                        </select>
                    </div>   
                    <div class="input-text">
                        <label for=""><strong>Descrição:</strong></label>
                        <input type="text" name="name" value="<?= $registro->name ?>">
                    </div>        
                    <div class="button-save-registration">
                        <button type="submit">Salvar</button>
                    </div>
                </div>
            
            </form>

        </div>
    </div>
</div>