<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/bill.css') ?>">

<div id="ModalSale" class="sale">
    <div class="content">
        <div class="position-close">
            <span class="close">&times;</span>
        </div>
        <div class="buttons">
            <form action="<?= url("/comandas/bill/paid") ?>" method="post">
                <div class="button-pay">
                    <button type="submit" name="save" value="1"><strong>Pago sem 10%</strong></button>
                </div>
                <div class="button-pay">
                    <button type="submit" name="save" value="2"><strong>Pago com 10%</strong></button>
                </div>
                <input type="hidden" value="<?= $resultTotal ?>" name="resultTotal">
                <input type="hidden" value="<?= $resultTotal10 ?>" name="resultTotal10">
                <input type="hidden" value="<?= $comanda->id ?>" name="order_id">
            </form>
        </div>
    </div>
</div>

<div class="main"> 
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Conta - <?= $comanda->number ?></h1>

            <div class="contents-bill">
                <div class="input-text">
                    <label for=""><strong>Total</strong></label>
                    <input type="text" value="<?= $resultTotal ?>" readonly>
                </div>
                <div class="input-text">
                    <label for=""><strong>Total com 10%</strong></label>
                    <input type="text" value="<?= $resultTotal10 ?>" readonly>
                </div>
                <div class="button-pay">
                    <button id="sale"><strong>Pago</strong></button>
                </div>
            </div>

            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Data/Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($itens as $item): ?>
                            <tr>
                                <td><?= $item->product_id ?></td>
                                <td><?= $item->quantity ?></td>
                                <td><?= $item->amount ?></td>
                                <td><?= $item->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="<?= public_url('/javascript/modal/sale.js') ?>"></script>