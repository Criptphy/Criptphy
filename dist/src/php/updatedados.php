<?php

include 'connect.php';
include_once 'session.php';

// $newavatar = "../avatares/";

// $separador = explode(".", $newavatar);
// $separador = array_reverse($separador);

// $new_up_avatar = $_FILES['avatar_user']['name'];

// $avatarbd = $newavatar . $new_up_avatar;

$new_user = $_POST['new_user'];
$new_email = $_POST['new_email'];
$new_pass = $_POST['new_pass'];

$new_hash = PASSWORD_HASH($new_pass, PASSWORD_DEFAULT);

$id_user = $_SESSION['id_user'];

$connect->query("UPDATE users SET nome_user = '$new_user', email_user = '$new_email', senha_user = '$new_hash' WHERE id_user='$id_user'");

// move_uploaded_file($_FILES['avatar_user']['tmp_name'],  $newavatar . $new_up_avatar);

echo"<meta http-equiv='refresh' content='0;url=settings.php'>";
?>