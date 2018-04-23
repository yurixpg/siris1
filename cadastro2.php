<?php
// linka com a página mostra-alerta.php para apresentar a mensagem de alerta
require_once 'mostra-alerta.php';

// Recebe os dados do formulário, conforme os names de cada input
$nome = trim($_POST['nomeUsuario']);
$rg = trim($_POST['rg']);
$email = trim($_POST['email']);
$dataNasc = trim($_POST['dataNasc']);
$senha1 = trim($_POST['senha1']);
$senha2 = trim($_POST['senha2']);
//echo "$nome, $rg, $email, $dataNasc";

// verifica se os campos foram preenchidos 
if($nome === "" || $rg === "" || $email === "" || $dataNasc === "" ||
        $senha1 === "" || $senha2 === ""){
    $_SESSION['danger'] = 'Preencha corretamente todos campos.';
    header('Location: cadastro.php');
    exit;
}else{
    if($senha1===$senha2){
        require_once 'conecta.php';
        $sql = "select * from funcionario where nome = '$nome' and rg = '$rg'";
        $query = mysqli_query($db, $sql);
        $nrLinhas = mysqli_num_rows($query);
        if($nrLinhas > 0){
            mysqli_close($db);	
            $_SESSION['danger'] = 'Funcionário cadastrado anteriormente.';
            header('Location: cadastro.php');
            exit;
        }else{
            $sql = "insert into funcionario values (null, '$nome', '$rg', md5('$senha1'),"
                . " '$email', '$dataNasc')";
            mysqli_query($db, $sql) or die(mysqli_error($db));
            mysqli_close($db);	
            $_SESSION['success'] = 'Funcionário cadastrado com sucesso';
            header('Location: cadastro.php');
            exit;
        }
    }else{
        $_SESSION['danger'] = 'Senha inválida.';
        header('Location: cadastro.php'); exit;
    }
}
