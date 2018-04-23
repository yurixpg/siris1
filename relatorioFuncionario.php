<?php
require_once 'mostra-alerta.php';
require_once 'conecta.php';
?>

<!doctype html>
<html>
    <head><title>Relatório de Funcionários</title>
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
        <h2>Relatório de Funcionários</h2>
		<section class="container">

        <?php
            mostraAlerta('success');
            mostraAlerta('warning');
            mostraAlerta('danger');
       ?>
        <div class="container">
            <div class="row">        
                <div class="col-xs-12 col-md-12">
                       <div class="panel-body">
                	<table class="table table-striped">                
                      <thead>
                          <tr>
                              <th>Matrícula</th>
                              <th>Nome do Funcionário</th>
                              <th>Identidade/RG</th>
                              <th></th>
                          </tr>
                      </thead>   
                 <?php
                    $sql = "select * from funcionario";
		    $query = mysqli_query($db,$sql) or die(mysqli_error());
                    $linha = mysqli_fetch_array($query, MYSQLI_ASSOC);    
                    if($linha){
			do{
                           $idf = $linha['idFuncionario'];
		 ?>                           
                      <tbody>
                      	  <tr>                          
                            <td><?php echo $linha['idFuncionario'];?></td>
                            <td><?php echo $linha['nome'];?></td>
                            <td><?php echo $linha['rg'];?></td>
                            
                            <td><a href="excluiFuncionario.php?id=<?php echo $idf;?>"><img src="imagens/deleta.ico" width="16"></a></td>
                          </tr>
                      </tbody>
                 <?php
			}while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)); 
                    }
		 ?>
                     </table>
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