<?php
session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // header("location: tela_principal.html");
    // exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Jomhuria' rel='stylesheet'>
    <link rel="stylesheet" href="tela_usuario.css">
    <title>Usuário</title>
</head>

<body>
    <?php
        include("listar_usuario_conectado.php");
        echo "<p>Bem vindo ".$informacoes_usuario['nome_usuario']."!</p>";
    ?>
    <div class="voltar">
        <a href="tela2.html"><img src="img/im_voltar.png"></div></a> 
    <div class="im_texto">
        <img src="img/im_perfil_azu.png">

    </div>

    <div class="tudo_user">
        <div class="sair">
            
            
            <a href="tela_principal.html"><img src="img/im_sair.png" width="30px"></a> <p>SAIR</p>

        </div>

        <input type="text" maxlength="50" size="50" placeholder="Usuário" id="cpf" class="estilo-info">
        <br><br>

        <input type="text" maxlength="250" size="50" placeholder="Fulano@naoseioq.com" id="email"class="estilo-info">
        <br><br>

        <input type="text" maxlength="250" size="50" placeholder="Alterar senha" id="senha"class="estilo-info">
        <br><br>

        <input type="text" maxlength="250" size="50" placeholder="Número de telefone" id="telefone"class="estilo-info">
        <br><br>

        <input type="text" maxlength="250" size="50" placeholder="Cartao" id="cartao"class="estilo-info">
        <br><br>
    </div>
</body>

</html>