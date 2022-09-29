<?php
    include("conecta.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $data1 = $_POST["data1"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    
    $comando = $pdo -> prepare("INSERT INTO cadastro_usuario(cpf,nome,email,usuario,senha,data1,telefone) VALUES(:cpf,:nome,:email,:usuario,:senha,:data1,:telefone)");
    $comando->bindValue(":nome", $nome);
    $comando->bindValue(":email", $email);
    $comando->bindValue(":usuario", $usuario);
    $comando->bindValue(":senha", $senha);
    $comando->bindValue(":data1", $data1);
    $comando->bindValue(":cpf", $cpf);
    $comando->bindValue(":telefone", $telefone);
    $comando->execute();

    echo("Você foi registrado");
?> 