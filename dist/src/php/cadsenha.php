<?php

include 'connect.php';
include 'session.php';

$titlesenha = $_POST['titleSenha'];

$passgerada = password_hash(PASSWORD_DEFAULT, PASSWORD_DEFAULT);

$id_user = $_SESSION['id_user'];

$connect->query("INSERT INTO senhas (id_senha, nome_senha, id_user, senha_gerada) VALUES (default, '$titlesenha', '$id_user', '$passgerada')");

echo"<meta http-equiv='refresh' content='0;url=manager.php'>";
?>