<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/pre-registration/index.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Pre-Cadastros</h1>

            <div class="button-create">
                <a href="<?= url('/pre-cadastro/create') ?>"><strong>Cadastrar</strong></a>
            </div>

            <div class="table-products">
                <table>
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros as $row): ?>
                            <tr>
                                <td><?= $row->type_id ?></td>
                                <td><?= $row->name ?></td>
                                <td>
                                    <a href="<?= url("/pre-cadastro/$row->id/edit") ?>"><i class="fa-solid fa-pen" style="color:green;"></i></a>
                                    <a href="<?= url("/pre-cadastro/$row->id/delete") ?>"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>