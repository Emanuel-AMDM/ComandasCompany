<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= public_url('/css/auth/login-register.css') ?>">
    <title>Registrar</title>
</head>
<body>
    
    <div class="login-center">
        <div class="border">
            <div class="img-login">
                <img src="<?= public_url('/img/logo.png') ?>" alt="">
            </div>

            <form action="" method="post">
                <div class="contents-center">
                    <div class="input-login">
                        <label for="name">Nome</label>
                        <input type="text" name="name" required>

                        <label for="email">E-mail</label>
                        <input type="text" name="email" required>

                        <label for="password">Senha</label>
                        <div>
                            <input type="password" name="password" required>
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                </div>

                <div class="button-login">
                    <div class="register">
                        <button class="button-21" role="button" type="submit">
                            <span class="text">Registrar</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>