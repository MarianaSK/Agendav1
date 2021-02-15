<?php
require '../../conexao2.php';

$nome_lembrete = $_POST['nome_lembrete'];
$desc_lembrete = $_POST['desc_lembrete'];

if(
    isset($nome_lembrete) && !empty($nome_lembrete) &&
    isset($desc_lembrete) && !empty($desc_lembrete)
){
    $sql = "INSERT INTO lembretes (nome_lembrete, descricao) VALUES ('$nome_lembrete','$desc_lembrete')";
    $pdo->prepare($sql)->execute([$name, $surname, $sex]);
}
header("Location: ../../index.php?pagina=lembretes");