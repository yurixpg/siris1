<?php
$idf = $_REQUEST['id'];
//echo $idf;
include "conecta.php";
$sql = "delete from funcionario_projeto where FKFuncionario = '$idf'";
mysqli_query($db, $sql);
$sql = "delete from funcionario where idFuncionario = '$idf'";
mysqli_query($db, $sql);
mysqli_close($db);
header('Location: relatorioFuncionario.php');
exit;
