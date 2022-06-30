<?php

include 'connect.php';

$pesquisar = $_POST['pesquisar'];

$consulta = $connect->query("SELECT * FROM nome_senha FROM senhas WHERE '%$pesquisar%'");

// Completar
?>