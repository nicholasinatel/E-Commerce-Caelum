<!DOCTYPE html>
<html>
<head>
    <title><?php print $cabecalho_title; ?></title>
    <meta charset="UTF-8">
    <!--Declaracao MEta Tag com Viewport para Mobile-->
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <?php print @$cabecalho_css; ?>
    <!-- @ para somente utilizar a variavel SE passada-->
    <!-- Importe Mobile.CSS Depois De Todos Os outros arquivos, usar media query p/ 320px-->
    <link rel="stylesheet" href="assets/css/mobile.css" media="(max-width: 939px)">
    
</head>
<header class="container">
        <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
            <p class="sacola">
                Nenhum item na sacola de compras
            </p>
            <nav class="menu-opcoes"> <!-- Horizontal Pelo CSS-->
                <ul>
                    <!--Links Ancoras-->
                    <li><a href="#">Sua Conta</a></li>
                    <!--# Trecho da pagina-->
                    <li><a href="#">Lista de Desejos</a></li>
                    <li><a href="#">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <!--Pagina HTML interna-->
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
    </header>
