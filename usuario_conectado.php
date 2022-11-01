<?php
    include("conecta.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT cpf, nome, email, telefone, data1, senha FROM cadastro_usuario WHERE cpf=:cpf;");
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":cpf", $_SESSION['cpf']);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em um vetor (Use para um registro).
        $informacoes_usuario = $comando->fetch();
    }else{
        echo("Não há usuários cadastrados.");
    }

    unset($comando);
    unset($pdo);
?>