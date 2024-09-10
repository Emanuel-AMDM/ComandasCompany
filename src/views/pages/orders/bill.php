<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/bill.css') ?>">

<div class="main"> 
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Conta - <?= $comanda->number ?></h1>

            <div class="contents-bill">
                <div class="input-text">
                    <label for=""><strong>Total</strong></label>
                    <input type="text">
                </div>
                <div class="input-text">
                    <label for=""><strong>Total com 10%</strong></label>
                    <input type="text">
                </div>
                <div class="button-pay">
                    <button><strong>Pago</strong></button>
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