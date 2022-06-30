<?php

    session_start();
    
    unset($_SESSION['id_user']);
    unset($_SESSION['nome_user']);
    unset($_SESSION['email_user']);
    unset($_SESSION['senha_user']);
    unset($_SESSION['tipo_user']);
    
    session_destroy();

    echo"<meta http-equiv='refresh' content='0;url=../../index.html'>";
    exit;


?>