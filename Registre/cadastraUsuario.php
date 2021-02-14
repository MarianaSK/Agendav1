<?php
require '../conexao2.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(
    isset($nome) && !empty($nome) &&
    isset($email) && !empty($email) &&
    isset($senha) && !empty($senha)
){
    $sql = "INSERT INTO usuarios (nome, email, senha, sit) VALUES ('$nome','$email',MD5('$senha'),1)";
    $pdo->prepare($sql)->execute([$name, $surname, $sex]);
}
header("Location: ../index.php");
