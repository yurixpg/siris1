<?php
require_once 'mostra-alerta.php';
?>

<!doctype html>
<html>
    <head><title>Inscrição de Funcionário em Determinado Projeto.</title>
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
                <div class="saida"><a href="destroi_session.php"><img src="imagens/sair.png" width="40"></a></div>
            </div>
        </div>
    </nav>
<!-- //menu inicial --> 
<div class="corpo">
        <h2>Inscrição de Funcionário em Determinado Projeto.</h2>
		<section class="container">

        <?php
            mostraAlerta('success');
            mostraAlerta('warning');
            mostraAlerta('danger');
       ?>
       <?php
       include_once 'conecta.php';
       $sql1 = "select * from projeto";
       $query1 = mysqli_query($db, $sql1);
       $linha1 = mysqli_fetch_array($query1);
       
       $sql2 = "select * from funcionario";
       $query2 = mysqli_query($db, $sql2);
       $linha2 = mysqli_fetch_array($query2);
       ?>
        <div class="container">
            <div class="row">        
                <div class="col-xs-12 col-md-12">
                    <form method="post" action="inscricaoProjeto2.php">
                        <div class="form-group">
                            <label for="nome">Projeto:</label>
                            <select class="form-control" name="idp">
                                <option>-</option>
                                <?php
                                   if($linha1) {
                                       do{
                                       echo "<option value=".$linha1['idprojeto'].">"
                                               .$linha1['nomeProjeto']."</option>";
                                       }while($linha1 = mysqli_fetch_array($query1));
                                   }
                                ?>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="qualquer" >Funcionário:</label><!-- classe "sr-only" oculta o label -->
                            <select class="form-control" name="idf">
                                <option>-</option>
                                <?php
                                   if($linha2) {
                                       do{
                                       echo "<option value=".$linha2['idFuncionario'].">"
                                               .$linha2['nome']."</option>";
                                       }while($linha2 = mysqli_fetch_array($query2));
                                   }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome da Fase:</label>
                            <input type="text" class="form-control" name="nomeFase"  />
                        </div>
                        <div class="form-group">
                            <label for="qualquer" >Fase Inicial:</label><!-- classe "sr-only" oculta o label -->
                            <input type="date" class="form-control" name="faseInicial" />
                        </div>
                        <div class="form-group">
                            <label for="qualquer" >Fase Final:</label><!-- classe "sr-only" oculta o label -->
                            <input type="date" class="form-control" name="faseFinal" />
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