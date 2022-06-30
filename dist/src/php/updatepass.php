<?php

include 'connect.php';

$new_titleSenha = $_POST['newtitleSenha'];

$id_senha = $_GET['id_senha'];

$connect->query("UPDATE senhas SET nome_senha = '$new_titleSenha' WHERE id_senha='$id_senha'");

echo"<meta http-equiv='refresh' content='0;url=manager.php'>";
?>