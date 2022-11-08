<?php
include("conecta.php");

$cpf = $_POST["cpf"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha =  $_POST["senha"];
$telefone = $_POST["telefone"];
// $imagem = $_FILES['imagem_perfil'];
// $extensao = $imagem['type'];
// $conteudo = file_get_contents($imagem['tmp_name']);
// $base64 = "data:".$extensao.";base64,".base64_encode($conteudo); //gravar no banco de dados
// https://rafaelcouto.com.br/salvar-imagem-no-banco-de-dados-com-php-mysql/

// Transformando foto em dados (binário)
// $conteudo = file_get_contents($arquivo['tmp_name']);




$comando=$pdo->prepare("UPDATE cadastro_usuario SET usuario=:usuario,email=:email,senha=:senha,telefone=:telefone WHERE cpf=:cpf");
$comando->bindValue(":usuario",$usuario);
$comando->bindValue(":email",$email);
$comando->bindValue(":senha",$senha);
$comando->bindValue(":telefone",$telefone);
$comando->bindValue(":cpf",$cpf);

// $comando->bindValue(":conteudo",$base64);

$comando->execute();

unset($comando);
unset($pdo);

header("location:tela_usuario.php");
?>