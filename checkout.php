<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Checkout Mirror Fashion</title>
    </head>
    <body style="padding-top: 40px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.php">Mirror Fashion</a>

            <button type="button" class="navbar-toggler btn btn-default" 
            data-toggle="collapse" data-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> 

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="sobre.php" class="nav-link">Sobre<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Ajuda</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Perguntas Frequentes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Entre em contato</a></li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion! 
                Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- col-sm(small tablets >= 768px)-4 Colunas ocupadas -->
                <!-- col-lg(large Desktops >= 1200px)-3 Colunas ocupadas -->
                <!-- 2 classes para Responsividade em 2 tamanhos distintos -->
                <div class="col-md-4 col-xl-3">
                    <div class="card" style="border-color: #dddddd;">
                        <div class="card-header">
                            <h2 class="card-title">Sua compra</h2>
                        </div>
                        <div class="card-body">
                            <img src="img/produtos/foto3-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-fluid hidden-xsd-none d-sm-block">
                            <dl>
                                <dt>Produto</dt>
                                <dd><?= $_POST['nome'] ?></dd>
                                
                                <dt>Preço</dt>
                                <dd id="preco">R$ <?= $_POST['preco'] ?></dd>
                                <!-- Lista semantica para Itens -->
                                <!-- Lista de termos e respectiva definicao -->
                                <dt>Cor</dt>
                                <dd><?= $_POST['cor'] ?></dd>
                                <!-- Acesso aos parametros do array & -->
                                <!-- Formato de PRINT comprimido do PHP -->
                                <dt>Tamanho</dt>
                                <dd><?= $_POST['tamanho'] ?></dd>
                            </dl>
                            <!-- Quantidade Escolher do Produto -->
                            <div class="form-group">
                                <label for="qt">Quantidade</label>
                                <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <output for="qt preco" id="total" class="form-control">
                                    <?= $_POST["preco"] ?>
                                </output>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-sm(small tablets >= 768px)-8 Colunas ocupadas -->
                <!-- col-lg(large Desktops >= 1200px)-9 Colunas ocupadas -->
                <div class="col-md-8 col-xl-9">
                    <form>
                        <div class="row">
                            <!-- col-md(medium desktops >= 992px)-6 Colunas ocupadas -->
                            <fieldset class="col-lg-6"><!-- used to group several controls as well as labels-->
                                <legend>Dados pessoais</legend><!-- texto semântico -->
                                
                                <div class="form-group">
                                    <label for="nome">Nome completo</label> 
                                    <input type="text" class="form-control" id="nome" name="nome" required autofocus>                                            
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" 
                                    id="cpf" name="cpf" placeholder="000.000.000-00" 
                                    data-mask="999.999.999-99" required>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="sim" name="spam" checked>
                                        Quero receber spam da Mirror Fashion
                                    </label>
                                </div>
                            </fieldset>
                            <!-- col-md(medium desktops >= 992px)-6 Colunas ocupadas -->
                            <fieldset class="col-lg-6">
                                <legend>Cartão de crédito</legend>

                                <div class="form-group">
                                    <label for="numero-cartao">Número - CVV</label>
                                    <input type="text" class="form-control" 
                                    id="numero-cartao" name="numero-cartao"
                                    data-mask="9999 9999 9999 9999 - 999">
                                </div>

                                <div class="form-group">
                                    <label for="bandeira-cartao">Bandeira</label>
                                    <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                        <option value="master">MasterCard</option>
                                        <option value="visa">VISA</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                                </div>
                            </fieldset>

                        <button type="submit" class="btn btn-primary btn-lg float-right">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            Confirmar Pedido
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/total.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/js/inputmask-plugin.js"></script>
    </body>
</html>
