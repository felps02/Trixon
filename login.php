<?php
    include("conecta.php");

    //atribuindo valores dos campos a variaveis.
    $usuario = $_POST["usuario"];
    $set_senha = $_POST["senha"];

    //comando sql.
    $comando = $pdo->prepare("SELECT cpf, nome, email, usuario, senha, telefone, data1 FROM cadastro_usuario WHERE usuario = :usuario");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(":usuario", $usuario);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Se a consulta retornar uma única linha significa que o email inserido existe.
    if ($comando->rowCount() == 1) {
        //o fetch() transforma o retorno em um array (use apenas se o retorno for apenas um registro, ou seja, uma única linha da tabela).
        $resultado = $comando->fetch();

        //Comparar senha informada com a senha armazenado no banco de dados.
        if ($resultado['senha'] == ($set_senha)) {
            //inicia uma sessão.
            session_start();

            //insere informações na sessão.
            $_SESSION['cpf'] = $resultado['cpf'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['telefone'] = $resultado['telefone'];
            $_SESSION['data1'] = $resultado['data1'];
            $_SESSION['loggedin'] = true;

            //redireciona para a pagina informada.
            header("Location:tela2.html");
        } else {
            echo ("Email ou Senha Inválida!");
        }
    } else {
        echo ("Email ou Senha Inválida!");
    }
    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>