<?php
    include("conecta.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT foto_produto FROM cadastro_produto WHERE tema_produto = 'coisa';");
    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_temaD = $comando->fetchAll();
    }else{
        echo("Não há produtos cadastrados.");
    }
    $comando = $pdo->prepare("SELECT foto_produto FROM cadastro_produto WHERE tema_produto = 'Free fire';");
    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_temaF = $comando->fetchAll();
    }else{
        echo("Não há produtos cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>