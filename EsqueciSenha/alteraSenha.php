<?php
require '../conexao2.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

if(
    isset($email) && !empty($email) &&
    isset($senha) && !empty($senha)
){
    $sql = "UPDATE `usuarios` SET senha = md5('$senha') WHERE email='$email'";
    $pdo->prepare($sql)->execute([$name, $surname, $sex]);
}
header("Location: ../index.php");