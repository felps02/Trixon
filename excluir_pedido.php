<?php
    include("conecta.php");

    $id = $_POST['id_produto'];
    
    //comando sql.
    $comando = $pdo->prepare("DELETE FROM cadastro_produto WHERE id_produto = :id_produto;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':id_produto',$id);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:alterar_pedidos.html");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>