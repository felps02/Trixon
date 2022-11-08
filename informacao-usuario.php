<?php
session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="informacao_usuario.css">
    <title>Pagina Inicial</title>
</head>

<body>
    <?php
        include("usuario_conectado.php");
        echo "<p id='msg-bemvindo'>Bem vindo, ".$informacoes_usuario['nome']."!</p>";
    ?>
    <h3 id="listar-usu">Lista de Usuários Cadastrados</h3>
    <table border="1">
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_usuarios.php");

            //verifica se a variável tem os valores da tabela.
            if (!empty($lista_usuarios)) {
                //seleciona linha por linha.
                foreach ($lista_usuarios as $linha) { ?>
                    <tr>
                        <td> <?php echo $linha['cpf']; ?></td>
                        <td> <?php echo $linha['nome']; ?></td>
                        <td> <?php echo $linha['email']; ?></td>
                        <td> <?php echo $linha['telefone']; ?></td>
                        <td> <?php echo $linha['data1']; ?></td>
                    </tr>
                    <td> <a href="excluir_usuario.php?cpf=<?php echo $linha['cpf'];?> ">
                                <input type="button" value="Excluir">
                            </a>
                        </td>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html>