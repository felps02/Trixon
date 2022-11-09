<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="telatema.css">
    <title>telatema</title>
</head>

<body>
    <div class="cabeça">

        <img src="img/im_logo_ama.png " width="120px">

        <div class="a">
            <a href="tela2.html">Inicio</a>
        </div>
        <div class="a">
            <u>Temas</u>
        </div>

        <img src="img/im_carrinho.png" width="40px" height="40px">


        <img src="img/im_perfil_ama.png" width="40px" height="40px">

    </div>
    <div class="coluna">
        <div class="linha">
            <table id="tabela">
                <thead>
                    <tr>
                        <th>Disney</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("lista_tema_produtos.php");

                    //verifica se a variável tem os valores da tabela.
                    if (!empty($lista_temaD)) {
                        //seleciona linha por linha.
                        foreach ($lista_temaD as $linha) { ?>
                            <tr>
                                <td> <?php echo '<img height="200px" src="' . $linha['foto_produto'] . '">'; ?> </td>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="linha">
            <table id="tabela">
                <thead>
                    <tr>
                        <th>Free fire</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("lista_tema_produtos.php");

                    //verifica se a variável tem os valores da tabela.
                    if (!empty($lista_temaF)) {
                        //seleciona linha por linha.
                        foreach ($lista_temaF as $linha) { ?>
                            <tr>
                                <td> <?php echo '<img height="200px"src="' . $linha['foto_produto'] . '">'; ?> </td>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>

            <table id="tabela">
                <thead>
                    <tr>
                        <th>Divertidamente</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("lista_tema_produtos.php");

                    //verifica se a variável tem os valores da tabela.
                    if (!empty($lista_temaDI)) {
                        //seleciona linha por linha.
                        foreach ($lista_temaDI as $linha) { ?>
                            <tr>
                                <td> <?php echo '<img height="200px"src="' . $linha['foto_produto'] . '">'; ?> </td>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>