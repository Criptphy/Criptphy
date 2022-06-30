<?php


include 'session.php';
include 'connect.php';


$id_user = $_SESSION['id_user'];

mysqli_query($connect, "DELETE FROM users WHERE id_user = '$id_user'");
session_destroy();
echo"<meta http-equiv='refresh' content='0;url=../../index.html'>";
exit;



?>