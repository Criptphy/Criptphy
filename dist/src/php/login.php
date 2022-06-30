<?php

session_start();

include 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$logar = $connect->query("SELECT * FROM users WHERE (email_user = '$login' OR nome_user = '$login')");

while ($dados = mysqli_fetch_array($logar)) {
    $id_user = $dados['id_user'];
    $nome_user = $dados['nome_user'];
    $email_user = $dados['email_user'];
    $senha_user = $dados['senha_user'];
    $tipo_user = $dados['tipo_user'];

}

$cont = mysqli_num_rows($logar);

If ($cont == 1 and password_verify($password, $senha_user)) {
    $_SESSION['id_user'] = $id_user;
    $_SESSION['nome_user'] = $nome_user;
    $_SESSION['email_user'] = $email_user;
    $_SESSION['senha_user'] = $senha_user;
    $_SESSION['tipo_user'] = $tipo_user;

    echo"<meta http-equiv='refresh' content='0;url=manager.php'>";
    exit;
    
}


else {
    unset($_SESSION['id_user']);
    unset($_SESSION['nome_user']);
    unset($_SESSION['email_user']);
    unset($_SESSION['senha_user']);
    unset($_SESSION['tipo_user']);

    session_destroy();
    echo"<meta http-equiv='refresh' content='0;url=loginerror.php'>";
    exit;
}

?>