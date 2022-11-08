<?php
include("listar_usuarios.php");
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
       
        include("usuario_conectado.php");
        echo "<p>Bem vindo ".$informacoes_usuario['nome']."!</p>";
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
        <form action="editar_usuario.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="usuario" maxlength="250" size="50" placeholder="<?php echo $informacoes_usuario['usuario'];?>" id="usuario"    class="estilo-info">
        <br><br>

        <input type="text" name="email" maxlength="250" size="50" placeholder="<?php echo $informacoes_usuario['email'];?>" id="email"          class="estilo-info">
        <br><br>

        <input type="text" name="senha" maxlength="250" size="50" placeholder="<?php echo $informacoes_usuario['senha'];?>" id="senha"          class="estilo-info">
        <br><br>

        <input type="text" name="telefone" maxlength="11" size="50" placeholder="<?php echo $informacoes_usuario['telefone'];?>" id="telefone"  class="estilo-info">
        <br><br>

        <input type="text" name="cpf" maxlength="11" size="50" placeholder="Insira o CPF para atualizar" id="cpf"  class="estilo-info">
        <br><br>

        <input type="submit" value="Atualizar" name="submit" id="atualizar">
</form>
    </div>
</body>

</html>