<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/edit.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">

            <form action="<?= url("/comandas/edit") ?>" method="post">

                <h1>Comanda - <?= $comanda->number ?></h1>

                <div class="contents-edit">
                    <div class="select">
                        <label for="product_id"><strong>Produto</strong></label>
                        <select name="product_id" id="product_id">
                            <?php foreach($produto as $row): ?>
                                <option value="<?= $row->id ?>"><?= $row->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-number">
                        <label for="quantity"><strong>Quantidade</strong></label>
                        <input type="number" name="quantity">
                    </div>
                    <div class="button-ask">
                        <button type="submit"><strong>Pedir</strong></button>
                    </div>
                    <div class="button-close">
                        <button><strong>Fechar Conta</strong></button>
                    </div>
                </div>
            
            </form>

            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Data/Hora</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($itens as $item): ?>
                            <tr>
                                <td><?= $item->product_id ?></td>
                                <td><?= $item->quantity ?></td>
                                <td><?= $item->amount ?></td>
                                <td><?= $item->created_at ?></td>
                                <td><a href="<?= url("/item/$item->id/delete") ?>"><i class="fa-solid fa-trash" style="color:red;"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>