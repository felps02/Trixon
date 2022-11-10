<?php
include("conecta.php");

$nome_produto = $_POST["nome_produto"];
$preco_produto = $_POST["preco_produto"];
$tema_produto = $_POST["tema_produto"];
$desc_produto =  $_POST["desc_produto"];
$id_produto = $_POST["id_produto"];





$comando=$pdo->prepare("UPDATE cadastro_produto SET nome_produto=:nome_produto,preco_produto=:preco_produto,tema_produto=:tema_produto,desc_produto=:desc_produto WHERE id_produto=:id_produto");
$comando->bindValue(":nome_produto",$nome_produto);
$comando->bindValue(":preco_produto",$preco_produto);
$comando->bindValue(":tema_produto",$tema_produto);
$comando->bindValue(":desc_produto",$desc_produto);
$comando->bindValue(":id_produto",$id_produto);


$comando->execute();

unset($comando);
unset($pdo);

header("location:alterar_pedidos.html");
?>