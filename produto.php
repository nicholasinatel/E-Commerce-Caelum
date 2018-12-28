<?php
    $cabecalho_title = "Produto da Mirror Fashion";
    $cabecalho_css = '<link rel="stylesheet" href="assets/css/produto.css">';
    include("cabecalho.php"); 
?>
<div class="produto-black">
    <div class="container">
        <div class="produto">
            <h1>Cardigan Thelure Basic</h1>
            <p>por apenas R$296,00</p>
            <!-- Envio dos dados escolhidos para checkout.php-->
            <!-- Se metodo GET, Parametros da escolha aparecem na URL -->
            <!-- Se metodo POST Parametro nao aparecem na URL -->
            <form action="checkout.php" method="POST">
                <!-- Parametros Hidden para serem passados do produto -->
                <input type="hidden" name="nome" value="Fuzzy Cardigan">
                <input type="hidden" name="preco" value="296,00">
                <fieldset class="cores">
                <!--Semanticamente os 3 inputs representam a mesma coisa -->
                <!--Por isso sao agrupados no mesmo fieldset que recebe uma legend-->
                    <legend>Escolha a cor:</legend>
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde"><!-- Descricao em HTML Semantico Para Input Radio-->
                        <img src="img/produtos/foto3-verde.png" alt="verde">
                    </label>
                    <input type="radio" name="cor" value="rosa" id="rosa" checked>
                    <label for="rosa">
                        <img src="img/produtos/foto3-rosa.png" alt="rosa">
                    </label>
                    <input type="radio" name="cor" value="azul" id="azul" checked>
                    <label for="azul">
                        <img src="img/produtos/foto3-azul.png" alt="azul">
                    </label>
                </fieldset>
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <!-- Type Range Otima Impelementacao do HTML5-->
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho">42</output>
                    <script type="text/javascript" src="assets/js/produto.js"></script>
                </fieldset>

                <!-- Botao Tipo Submit para envio da escolha da compra -->
                <input type="submit" class="comprar" value="Comprar">
            </form>
        </div>
        <div class="detalhes">
            <h2>Detalhes do produto</h2>
            <p>Esse é o melhor casaco do Cardigan que você já viu. Excelente
            material italiano com estampa desenhada pelos artesãos da 
            comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
            mesmo pela nossa entrega a jato.</p>
            <table>
                <thead>
                    <tr>
                        <th>Característica</th> 
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigan 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodao e Poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mao</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("rodape.php"); ?>
