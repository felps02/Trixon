<?php
include("conecta.php");

$nome_produto = $_POST["nome_produto"];
$preco_produto = $_POST["preco_produto"];
$tema_produto = $_POST["tema_produto"];
$desc_produto =  $_POST["desc_produto"];
$id_produto = $_POST["id_produto"];
// $imagem = $_FILES['imagem_perfil'];
// $extensao = $imagem['type'];
// $conteudo = file_get_contents($imagem['tmp_name']);
// $base64 = "data:".$extensao.";base64,".base64_encode($conteudo); //gravar no banco de dados
// https://rafaelcouto.com.br/salvar-imagem-no-banco-de-dados-com-php-mysql/

// Transformando foto em dados (binário)
// $conteudo = file_get_contents($arquivo['tmp_name']);




$comando=$pdo->prepare("DELETE cadastro_produto WHERE id_produto=id_produto");
$comando->bindValue(":nome_produto",$nome_produto);
$comando->bindValue(":id_produto",$id_produto);


// $comando->bindValue(":conteudo",$base64);

$comando->execute();

unset($comando);
unset($pdo);


?> 