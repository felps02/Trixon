<?php
include("conecta.php");   

$num_cartao=$_POST['num_cartao'];
$cvv=$_POST['cvv'];
$data_validade=$_POST['data_validade'];
$nome_titular=$_POST['nome_titular'];

$comando = $pdo -> prepare("INSERT INTO cartao(num_cartao,cvv,data_validade,nome_titular) VALUES(:num_cartao,:cvv,:data_validade,:nome_titular)");

$comando->bindValue(":num_cartao", $num_cartao);
$comando->bindValue(":cvv", $cvv);
$comando->bindValue(":data_validade", $data_validade);
$comando->bindValue(":nome_titular", $nome_titular);
$comando->execute();

?> 