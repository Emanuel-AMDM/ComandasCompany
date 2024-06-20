<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/orders/bill.css') ?>">

<div class="main"> 
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Conta - 55</h1>

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