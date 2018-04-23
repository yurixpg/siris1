<?php
// linka com a página mostra-alerta.php para apresentar a mensagem de alerta
require_once 'mostra-alerta.php';
require_once 'conecta.php';
// Recebe os dados do formulário, conforme os names de cada input
$nomeProjeto = trim($_POST['nomeProjeto']);
$nomeProjeto = utf8_decode(mysqli_real_escape_string($db,$nomeProjeto));
$nomeProjeto =  utf8_encode($nomeProjeto);
$dataInicial = $_POST['dataInicial'];
$dataFinal = $_POST['dataFinal'];
$descricao = trim($_POST['descricao']);
$descricao = utf8_decode(mysqli_real_escape_string($db,$descricao));
$descricao =  utf8_encode($descricao);
$statusProjeto = 1;

$sql = "insert into projeto values "
        . "(null, '$nomeProjeto', '$descricao',"
        . " '$dataInicial',"
        . "'$dataFinal','$statusProjeto')";
mysqli_query($db, $sql) or die(mysqli_error($db));
mysqli_close($db);	
$_SESSION['success'] = 'Projeto cadastrado com sucesso';
header('Location: cadastroProjeto.php');
exit;

