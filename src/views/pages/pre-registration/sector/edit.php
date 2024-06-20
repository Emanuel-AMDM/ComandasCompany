<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/pre-registration/create-edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Editar - Setor</h1>

            <div class="contents-pre-registration">
                <div class="input-text">
                    <label for=""><strong>Nome Setor:</strong></label>
                    <input type="text">
                </div>        
                <div class="button-save-registration">
                    <button>Salvar</button>
                </div>
            </div>

        </div>
    </div>
</div>