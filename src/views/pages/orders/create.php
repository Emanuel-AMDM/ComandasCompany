<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/create.css') ?>">

<div class="main"> 
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= load_controller('/CardsController') ?>" method="post"></form>
            
                <h1>Cadastrar Comanda</h1>

                <div class="orders">
                    <div class="input-text">
                        <label for=""><strong>Número Comanda</strong></label>
                        <input type="text" name="number">
                    </div>        
                    <div class="button-save-registration">
                        <button type="submit">Salvar</button>
                    </div>
                </div>
            
            </form>
                

        </div>
    </div>
</div>