<footer>
        <div class="container">
            <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
            <ul class="social">
                <li>
                    <a href="http://facebook.com/mirrorfashion">Facebook</a>
                </li>
                <li>
                    <a href="http://twitter.com/mirrorfashion">Twitter</a>
                </li>
                <li>
                    <a href="http://plus.google.com/mirrorfashion">Google</a>
                </li>
            </ul>
            <div class="data-rodape">
                <p>Fundada há
                    <?php
                        print date('Y') - 1932;
                    ?>
                    anos
                </p>
                <p>
                Data de Hoje:
                <?php
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    echo strftime('%A, %d de %B de %Y', strtotime('today')); 
                ?>
                </p>
            </div>
        </div>
        <section id="copyright">
            &copy; Copyright Mirror Fashion
        </section>
    </footer>