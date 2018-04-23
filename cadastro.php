<?php
require_once 'mostra-alerta.php';
?>

<!doctype html>
<html>
    <head><title>Cadastro</title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <style>
        .corpo{
            margin-top: 80px;
        }
        .saida{
            position: absolute;
            top: 5px;
            right: 2%;
        }
    </style>
    <body>
<!-- menu inicial -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header indexNavBar">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacaox9">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu-navegacao1">
            	<ul class="nav navbar-nav navbar-right">
                    <li align="center"><a href="cadastro.php" class="label" data-toggle="tooltip">Cadastro_Funcionário</a></li>
                    <li align="center"><a href="cadastroProjeto.php" class="label" data-toggle="tooltip">Cadastro_Projeto</a></li>
                    <li align="center"><a href="relatorioFuncionario.php" class="label" data-toggle="tooltip">Relatório_Funcionário</a></li>
                    <div class="saida"><a href="destroi_session.php"><img src="imagens/sair.png" width="40"></a></div>
                </ul>
                </div>
            </div>
        </div>
    </nav>
<!-- //menu inicial --> 
<div class="corpo">
        <h1>Cadastro</h1>
		<section class="container">

        <?php
            mostraAlerta('success');
            mostraAlerta('warning');
            mostraAlerta('danger');
       ?>
        <div class="container">
            <div class="row">        
                <div class="col-xs-12 col-md-12">
                    <form method="post" action="cadastro2.php">
                        <div class="form-group">
                            <label for="nome">Nome Completo:</label>
                            <input type="text" class="form-control" name="nomeUsuario"  />
                        </div>

                        <div class="form-group">
                            <label for="qualquer" >RG:</label><!-- classe "sr-only" oculta o label -->
                            <input type="text" class="form-control" name="rg" />
                        </div>
                        <div class="form-group">
                            <label for="qualquer" >Senha:</label><!-- classe "sr-only" oculta o label -->
                            <input type="password" class="form-control" name="senha1" />
                        </div>
                        <div class="form-group">
                            <label for="qualquer" >Confirmar Senha:</label><!-- classe "sr-only" oculta o label -->
                            <input type="password" class="form-control" name="senha2" />
                        </div>
                        <div class="form-group">
                            <label for="qualquer" >E-Mail:</label><!-- classe "sr-only" oculta o label -->
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="qualquer" >Data Nascimento:</label><!-- classe "sr-only" oculta o label -->
                            <input type="date" name="dataNasc" >
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Enviar Formulário"/>
                        </div>
                        <div class="form-group">
                            <input type="reset" class="btn btn-danger" value="Limpar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		</section>
</div>        
        <script src="js/jquery-3.1.1.min.js"></script>
        <!-- adiciona o JS Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>