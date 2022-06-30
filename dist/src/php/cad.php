<?php
include 'connect.php';

// $avatarp = "../avatares/avatarpadrao.png";

$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];
$senha_user = $_POST['senha_user'];
$hash_pass = password_hash($senha_user, PASSWORD_DEFAULT);


$testuser = $connect->query("SELECT * FROM users WHERE nome_user = '$nome_user'");
$checkuser = mysqli_num_rows($testuser);

$testemail = $connect->query("SELECT * FROM users WHERE email_user = '$email_user'");
$checkemail = mysqli_num_rows($testemail);


If ($checkuser == 0 and $checkemail == 0 and password_verify($senha_user, $hash_pass)) {
    $connect->query("INSERT INTO users (id_user, nome_user, email_user, senha_user, tipo_user) VALUES (default, '$nome_user','$email_user', '$hash_pass', 1)");
    echo"<meta http-equiv='refresh' content='0;url=../../index.html'>";
    exit;
}

elseif ($checkemail == 1 and $checkuser == 1) {
    echo"<meta http-equiv='refresh' content='0;url=aviso.php'>";
    exit;
}

elseif ($checkemail == 1) {
    echo"<meta http-equiv='refresh' content='0;url=aviso.php'>";
    exit;
}


elseif ($checkuser == 1) {
    echo"<meta http-equiv='refresh' content='0;url=aviso.php'>";
    exit;
}
?>
