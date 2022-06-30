<?php
If (!isset($_SESSION)) {
  session_start();
}

If (!isset($_SESSION['id_user']) and !isset($_SESSION['nome_user']) and !isset($_SESSION['email_user']) and !isset($_SESSION['senha_user']) and !isset($_SESSION['tipo_user'])) {
  session_destroy();
  echo"<meta http-equiv='refresh' content='0;url=../../index.html'>";
  exit;
} 

?>