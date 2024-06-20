<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/create.css') ?>">

<div class="main"> 
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Cadastrar Comanda</h1>

            <div class="orders">
                <div class="input-text">
                    <label for=""><strong>Número Comanda</strong></label>
                    <input type="text">
                </div>        
                <div class="button-save-registration">
                    <button>Salvar</button>
                </div>
            </div>
                

        </div>
    </div>
</div>