<link rel="stylesheet" href="<?= public_url('/css/home.css') ?>">
<link rel="stylesheet" href="<?= public_url('/css/pre-registration/index.css') ?>">

<div class="main">
    <?= view('includes/side-bar.php') ?>
    <div class="wrapper">
        <?= view('includes/nav-bar.php') ?>
        <div class="contents">
            
            <h1>Sabor</h1>

            <div class="button-create">
                <a href="<?= url('/pre-cadastro/sabor/create') ?>"><strong>Cadastrar</strong></a>
            </div>

            <div class="table-products">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pilsen</td>
                            <td>
                                <a href="<?= url('/pre-cadastro/sabor/edit') ?>"><i class="fa-solid fa-pen" style="color:green;"></i></a>
                                <a href=""><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>