<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <!-- <form action="<?= url("/comandas/$registro->id/edit") ?>" method="post"> -->

                <h1>Comanda - <?= $comanda->number ?></h1>

                <div class="contents-edit">
                    <div class="select">
                        <label for=""><strong>Produto</strong></label>
                        <select name="" id=""></select>
                    </div>
                    <div class="input-number">
                        <label for=""><strong>Quantidade</strong></label>
                        <input type="number">
                    </div>
                    <div class="button-ask">
                        <button><strong>Pedir</strong></button>
                    </div>
                    <div class="button-close">
                        <button><strong>Fechar Conta</strong></button>
                    </div>
                </div>
            
            <!-- </form> -->

            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Data/Hora</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>produto1</td>
                            <td>10$</td>
                            <td>02/03/2024 20:53:00</td>
                            <td><a href=""><i class="fa-solid fa-trash" style="color:red;"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>