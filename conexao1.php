<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "loja";

$conecta = mysqli_connect($localhost, $user, $pass, $banco);

$sql = mysqli_query($conecta, "SELECT * FROM usuarios");

echo "existem" . mysqli_num_rows($sql);