<!---------------------------------------------------------------------HEADER---------------------------------------------------------------->
<?php
    phpinfo();
    $cabecalho_title = "Mirror Fashion";
    //From Eric Meyer 4 Compatibility with older browsers
    $cabecalho_css = '<link rel="stylesheet" href="assets/css/estilos.css">';
    include("cabecalho.php"); 
?>
<body>
<!---------------------------------------------------------------------MENUS---------------------------------------------------------------->
    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2><!--Começo da Busca-->
            <form><!-- Captura De Dados do User-->
                <input type="search"><!--Captura Tipo Search-->
                <input type="image" src="img/busca.png"><!-- Submissão Dos Dados Tipo IMG-->
            </form>
        </section><!--Fim da Busca-->
        <!--Começo Menu Departamenos-->
        <section class="menu-departamentos">
            <h2>Departamentos</h2>
            <nav> <!-- Links Navegacao Apropriados-->
                <ul><!--Bookmarks locais na Pagina-->
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga Curta</a></li>
                            <li><a href="#">Manga Comprida</a></li>
                            <li><a href="#">Manga Social</a></li>
                            <li><a href="#">Manga Casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section>
        <!-- fim .menu-departamentos-->
        <a href="#" class="pause"></a>
        <img src="img/destaque-home.png" alt="Promoção: Big City Nights">
    </div><!-- fim .menu-departamentos-->
    <!---------------------------------------------------------------------PRODUTOS----------------------------------------------------------- -->
    <div class="container paineis">
        <!-- Os Paineis de Novidades Entram Aqui-->
        <!-- Utilizar Propriedade Inline Block para Separar Itens na Vertical-->
        <section class="painel novidades painel-compacto">
            <h2>Novidades</h2>
            <ol><!--Lista Ordenada-->
                <!--Primeiro Produto-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Segundo Produto-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Bad To The Bone R$99,90</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Terceiro Produto-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Green Sweater Xarbi R$224,24</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Quarto Produto-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Jaqueta Inverno Vinho R$250,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Quinto Produto-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Blusa Fitness Azul R$50,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Sexto Produto-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura6.png">
                            <figcaption>Blusinha Rosa R$40,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Setimo Produto-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura7.png">
                            <figcaption>Blusinha Rosa R$40,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Oitavo Produto-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura8.png">
                            <figcaption>Blusinha Rosa R$40,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Nono Produto-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura9.png">
                            <figcaption>Blusinha Rosa R$40,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Decimo Produto-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Blusinha Rosa R$40,00</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
            <button type="button">Mostra mais</button>
        </section>
        <section class="painel mais-vendidos painel-compacto">
            <h2>Mais Vendidos</h2>
            <ol>
                <!--Produto Mais Vendido 1-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Blusa Longa R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 2-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura11.png">
                            <figcaption>Shortinho Tanga Frouxa R$90,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 3-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura12.png">
                            <figcaption>Camiseta Chique R$120,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 4-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura13.png">
                            <figcaption>Camiseta Chique no Ultimatum R$80,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 5-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura14.png">
                            <figcaption>Queima De estoque!!! R$59,99</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 6-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura15.png">
                            <figcaption>Você merece essa peça R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 7-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura1.png">
                            <figcaption>Você merece essa peça R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 8-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Você merece essa peça R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 9-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Você merece essa peça R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 10-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Você merece essa peça R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
                <!--Produto Mais Vendido 11-->
                <li>
                    <a href="produtos.html">
                        <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Você merece essa peça R$100,00</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
            <button type="button">Mostra mais</button>
        </section>
    </div>
    <!---------------------------------------------------------------------FOOTER-------------------------------------------------------------- -->
    <?php 
        include("rodape.php") 
    ?>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>