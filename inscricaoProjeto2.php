<?php
// linka com a página mostra-alerta.php para apresentar a mensagem de alerta
require_once 'mostra-alerta.php';

// Recebe os dados do formulário, conforme os names de cada input
$idp = trim($_POST['idp']);
$idf = trim($_POST['idf']);
$nomeFase = trim($_POST['nomeFase']);
$faseInicial = trim($_POST['faseInicial']);
$faseFinal = trim($_POST['faseFinal']);
//echo "$idp, $idf, $nomeFase, $faseInicial, $faseFinal ";

// verifica se os campos foram preenchidos 
if($idp === "-" || $idf === "-" || $nomeFase === "" || $faseInicial === "" ||
        $faseFinal === ""){
    $_SESSION['danger'] = 'Preencha corretamente todos campos.';
    header('Location: inscricaoProjeto.php');
    exit;
}else{
    require_once 'conecta.php';
    $sql = "select * from funcionario_projeto where FKFuncionario = '$idf' and"
            . " FKProjeto = '$idp'";
    $query = mysqli_query($db, $sql);
    $nrLinhas = mysqli_num_rows($query);
    if($nrLinhas > 0){
        mysqli_close($db);	
        $_SESSION['warning'] = 'Funcionário cadastrado anteriormente neste projeto.';
        header('Location: inscricaoProjeto.php');
        exit;
    }else{
        $sql = "insert into funcionario_projeto values ('$idf', '$idp', '$nomeFase',"
            . " '$faseInicial', '$faseFinal', 1, null)";
        mysqli_query($db, $sql) or die(mysqli_error($db));
        mysqli_close($db);	
        $_SESSION['success'] = 'Inscrição do Funcionário realizada com sucesso';
        header('Location: inscricaoProjeto.php');
        exit;
    }
}
