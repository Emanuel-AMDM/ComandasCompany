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
            <form action="<?= url('/produtos') ?>" method="get">
                <div class="filter">
                    <div class="input-text">
                        <label for="filter">Filtro</label>
                        <input type="text" name="filter">
                    </div>
                    <div class="button-filter">
                        <button type="submit">Filtrar</button>
                    </div>
                    <div class="button-clean">
                        <a href="<?= url('/produtos') ?>">Limpar</a>
                    </div>
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
                        <tr>
                            <td colspan="3">
                                <form action="<?= url('/produtos') ?>" method="get">
                                    <div class="pagination">
                                        <?php if($page > 1): ?>
                                            <button type="submit" name="page" value="<?= $page_anterior ?>"><i class="fa-solid fa-chevron-left"></i></button>
                                        <?php endif; ?>
                                        
                                        <div>
                                            <?= $page . ' de ' . $total_page ?>
                                        </div>
                                        
                                        <?php if($page < $total_page): ?>
                                            <button type="submit" name="page" value="<?= $page_proximo ?>"><i class="fa-solid fa-chevron-right"></i></button>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            

        </div>
    </div>
</div>