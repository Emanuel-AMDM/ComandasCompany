<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/index.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Produtos</h1>

            <div class="button-create">
                <a href="">Cadastrar</a>
            </div>

            <div class="table-products">
                <table>
                    <thead>
                        <tr>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>marca</th>
                            <th>Sabor</th>
                            <th>Tamanho</th>
                            <th>Valor</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cerveja</td>
                            <td>Garrafa</td>
                            <td>Brahma</td>
                            <td>Pilsen</td>
                            <td>1L</td>
                            <td>10$</td>
                            <td>
                                <a href=""><i class="fa-solid fa-pen" style="color:green;"></i></a>
                                <a href=""><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>