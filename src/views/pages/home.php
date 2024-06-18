<!-- para nao ficar dando require, uso a function view que vai trazer o arquivo -->
<?= view('includes/header.php') ?>

<h1>home page works</h1>

<!-- para navegar entre pastas e nao precisar ficar saindo delas, uso a function public_url -->
<link rel="stylesheet" href="<?= public_url('/css/styles.css') ?>">

<!-- para ir a outras paginas, ou trazer imagens, function url -->
<a href="<?= url('/contato') ?>">ir para pagina de contato</a>
