<?php
include("conecta.php");   

$nome_produto=$_POST['nome_produto'];
$preco_produto=$_POST['preco_produto'];
$tema_produto=$_POST['tema_produto'];
$desc_produto=$_POST['desc_produto'];
$imagem=$_FILES['imagem'];
$extensao=$imagem['type'];
$conteudo=file_get_contents($imagem['tmp_name']);
$base64="data:".$extensao.";base64,".base64_encode($conteudo);

$comando=$pdo->prepare("INSERT INTO cadastro_produto(nome_produto,preco_produto,tema_produto,desc_produto,foto_produto)VALUES(:nome_produto,:preco_produto,:tema_produto,:desc_produto,:conteudo)");

$comando->bindValue(":nome_produto", $nome_produto);
$comando->bindValue(":preco_produto", $preco_produto);
$comando->bindValue(":tema_produto", $tema_produto);
$comando->bindValue(":desc_produto", $desc_produto);
$comando->bindValue(":conteudo", $base64);
$comando->execute();

echo("foto_produto");
?> 