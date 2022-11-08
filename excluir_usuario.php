<?php
    include("conecta.php");

    $cpf = $_GET['cpf'];
    
    //comando sql.
    $comando = $pdo->prepare("DELETE FROM cadastro_usuario WHERE cpf = :cpf;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':cpf',$cpf);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:informacao-usuario.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>