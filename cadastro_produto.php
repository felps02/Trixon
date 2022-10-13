<?php
    include("conecta.php");

    $nome_produto = $_POST["nome_produto"];
    $preco_produto = $_POST["preco_produto"];
    $tema_produto = $_POST["tema_produto"];
    $desc_produto = $_POST["desc_produto"];
    
    $comando = $pdo -> prepare("INSERT INTO cadastro_produto(nome_produto,preco_produto,tema_produto,desc_produto) VALUES(:nome_produto,:preco_produto,:tema_produto,:desc_produto)");
    $comando->bindValue(":nome_produto", $nome_produto);
    $comando->bindValue(":preco_produto", $preco_produto);
    $comando->bindValue(":tema_produto", $tema_produto);
    $comando->bindValue(":desc_produto", $desc_produto);
    $comando->execute();

    echo("Produto Cadastrado");
?> 