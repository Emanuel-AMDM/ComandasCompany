<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= public_url('/css/auth/login-register.css') ?>">
    <title>Login</title>
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
                        <label for="email">E-mail</label>
                        <input type="text" name="email">

                        <label for="password">Senha</label>
                        <input type="password" name="password">
                        
                        <a href="">Esqueci minha senha!</a>
                    </div>
                </div>

                <div class="button-login">
                    <div class="register">
                        <a href="<?= url('/register') ?>" class="button-21">
                            <span>Registrar-se</span>
                        </a>
                    </div>
                    <div class="login">
                        <button class="button-21" role="button" type="submit">
                            <span class="text">Login</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>