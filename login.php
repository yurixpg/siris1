<?php
include 'conecta.php';
require_once 'mostra-alerta-index.php';
$matricula = trim($_POST['matricula']);
$senha = trim($_POST['senha']);
//echo "$login, $senha";
if($login ==="" || $senha===""){
    $_SESSION['warning'] = 'Preencha corretamente todos campos.';
    header('Location: index.php');
    exit;
}else{
    $sql = "select * from funcionario where matricula = {$matricula} and senha = ('$senha')";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    $numLinhas = mysqli_num_rows($query);
    if($numLinhas>0){
        header('Location: home.php');
        mysqli_close($db);
        exit;
    }else{
        $_SESSION['danger'] = 'Usuário inválido.';
        header('Location: index.php');
        exit;
    }
}
