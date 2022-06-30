<?php

include 'session.php';
include 'connect.php';


$id_senha = $_GET['id_senha'];

mysqli_query($connect, "DELETE FROM senhas WHERE id_senha = '$id_senha'");

echo"<meta http-equiv='refresh' content='0;url=manager.php'>";
exit;


?>