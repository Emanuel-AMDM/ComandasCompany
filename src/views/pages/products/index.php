<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/products/index.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Produtos</h1>

            <div class="button-create">
                <a href="<?= url('/produtos/create') ?>"><strong>Cadastrar</strong></a>
            </div>

            <!-- Campo de busca -->
            <form action="" method="get"></form>
                <div>
                    <div>
                        <label for="busca">Filtro</label>
                        <input type="text" name="busca" id="busca">
                    </div>
                    <button type="submit">Filtrar</button>
                </div>
            </form>

            <div class="table-products">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($produtos as $row): ?>
                            <tr>
                                <td><?= $row->name ?></td>
                                <td><?= $row->price ?></td>
                                <td>
                                    <a href="<?= url("/produtos/$row->id/edit") ?>"><i class="fa-solid fa-pen" style="color:green;"></i></a>
                                    <a href="<?= url("/produtos/$row->id/delete") ?>"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>