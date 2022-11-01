<?php

include("tela_usuario.php");

$imagem = $_FILES['imagem_perfil'];
$extensao = $imagem['type'];
$conteudo = file_get_contents($imagem['tmp_name']);
$base64 = "data:".$extensao.";base64,".base64_encode($conteudo); //gravar no banco de dados
// https://rafaelcouto.com.br/salvar-imagem-no-banco-de-dados-com-php-mysql/

// Transformando foto em dados (binário)
$conteudo = file_get_contents($arquivo['tmp_name']);

$email = $_POST["email"];
$senha = MD5($_POST["senha"]);
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];

$comando=$pdo->prepare("UPDATE usuario SET email=:email,senha=:senha,telefone=:telefone,cpf=:cpf,foto=:conteudo WHERE cod_usuario=:codigo");
$comando->bindValue(":email",$email);
$comando->bindValue(":senha",$senha);
$comando->bindValue(":telefone",$telefone);
$comando->bindValue(":cpf",$cpf);
session_start();
$comando->bindValue(":codigo",$_SESSION["cod_usuario"]);
$comando->bindValue(":conteudo",$base64);

$comando->execute();

unset($comando);
unset($pdo);

header("location:tela_usuario.php?email=$email");
?>